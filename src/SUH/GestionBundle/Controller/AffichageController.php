<?php

namespace SUH\GestionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class AffichageController extends Controller
{
    /**
     * affiche l'accueil avec la liste des étudiants
     * @return type
     */
    public function AfficherAccueilAction()
    {        
        return $this->render('SUHGestionBundle:AffichageEtudiants:accueil.html.twig',array(
            'listeEtudiantsHandicapes'=>$this->getListeEtudiants(null)
        ));
    }  
    
    /**
     * récupère les données d'un étudiant recherché avec son id et les envoie à la page d'affichage
     * @param type $id
     * @return type
     */
    public function AfficherAccueilEtudiantAction($id)
    {
        $etudiantHandicapeRepository = $this->getDoctrine()
                ->getManager()
                ->getRepository('SUHGestionBundle:EtudiantHandicape');
        
        $etudiant = $etudiantHandicapeRepository->find($id);  
        
        $tabHandicap = array();
        $tabFormation = array();
        $tabAideExamen = array();
        foreach($etudiant->getHandicap() as $val)
        {
            $tabHandicap[] = $val;
        }
        foreach($etudiant->getEtudiant()->getListEtudiantFormation() as $val)
        {
            $tabFormation[] = $val;
        }
        foreach($etudiant->getDatesAideExamen() as $val)
        {
            $tabAideExamen[] = $val;
        }
        
        $formation = false;
        $handicap = false;
        $aideExamen = false;
        if(!empty($tabHandicap))
        {
            $handicap = true;
        }
        if(!empty($tabFormation))
        {
            $formation = true;
        }
        if(!empty($tabAideExamen))
        {
            
            $aideExamen = true;
        }
        
        $informationsEtudiant = $etudiantHandicapeRepository->getInformationsStudent($id,$formation,$handicap,$aideExamen);
        
        return $this->render('SUHGestionBundle:AffichageEtudiants:spoiler.html.twig',array(
            'informationsEtudiant'=>$informationsEtudiant,
        ));
    }     
    
    /**
     * Affiche l'accueil avec une liste composée d'étudiants récupérés suite à une recherche rapide
     * @param Request $request
     * @return type
     */
    public function AfficherAccueilEtudiantRechercheNomOuPrenomAction(Request $request)
    {
        return $this->render('SUHGestionBundle:AffichageEtudiants:accueil.html.twig',array(
            'listeEtudiantsHandicapes'=>$this->getListeEtudiants($request->query->get('chaine'))
        ));
    }     
    
    /**
     * récupère liste d'étudiants
     * @param type $chaine
     * @return type
     */
    public function getListeEtudiants($chaine)
    {      
        //Si $chaine est null tous les étudiants sont récupérés
        if(empty($chaine))
        {
            $etudiantHandicapeRepository = $this->getDoctrine()
                ->getManager()
                ->getRepository('SUHGestionBundle:EtudiantHandicape');
            return $etudiantHandicapeRepository->getAllIdNameSurname();
        }
        //Si la $chaine n'est pas vide la recherche est faite avec cette chaine (WHERE)
        else
        {
            $etudiantRepository = $this->getDoctrine()
                ->getManager()
                ->getRepository('SUHGestionBundle:Etudiant');
            return $etudiantRepository->getListeEtudiantsParNomOuPrenom($chaine);
        }        
    }
    
    
    /**
     * Affiche l'importation et exportation
     * @param Request $request
     * @return type
     */
    public function afficheImportExportPageAction()
    {
        return $this->render('SUHGestionBundle:AffichageEtudiants:accueil.html.twig',array(
            'afficheExcelVue' => true,
        ));
    }  
    
    /**
     * Affiche l'importation et exportation
     * @param Request $request
     * @return type
     */
    public function afficheGestionUtilisateurPageAction()
    {
        return $this->render('SUHGestionBundle:AffichageEtudiants:accueil.html.twig',array(
            'userVue' => true,
        ));
    }  
    
    
    
}
