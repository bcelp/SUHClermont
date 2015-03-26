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
        $etudiantRepository = $this->getDoctrine()
                ->getManager()
                ->getRepository('SUHGestionBundle:Etudiant');
        //Si $chaine est null tous les étudiants sont récupérés
        
        if(empty($chaine))
        {
            return $etudiantRepository->getAllIdNameSurname();
        }
        //Si la $chaine n'est pas vide la recherche est faite avec cette chaine (WHERE)
        else
        {
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
    
    /**
     * Affiche la page de recherche avancée
     * @return type
     */
    public function AfficherRechercheAvanceeAction()
    {
        return $this->render('SUHGestionBundle:AffichageEtudiants:accueil.html.twig',array(
            'listeEtudiantsHandicapes'=>$this->getListeEtudiants(null),
            'rechercheAvancee'=>true
        ));
    }
    
    /**
     * Récupère les données du formulaire de recherche avancée et appelle une requête DQL
     * Transforme la liste récupérée lors d'une recherche avancée en liste d'étudiants
     * @return type
     */
    public function AfficherResultatRechercheAction(){
        $array = [];
        for($i=0;$i<32;$i++){
            if(!empty($_POST['InfoEcrite'.$i]) && isset($_POST['InfoEcrite'.$i])){
                if(!empty($_POST['InfoSelect'.$i]) && isset($_POST['InfoSelect'.$i])){ 
                    $array[$_POST['InfoSelect'.$i]] = $_POST['InfoEcrite'.$i];
                }
            }
        }
        $etudiantHandicapeRepository = $this->getDoctrine()
                ->getManager()
                ->getRepository('SUHGestionBundle:EtudiantHandicape');
        $resultat=$etudiantHandicapeRepository->getEtudiantwithCondition($array);
        
        $i=0;
        foreach($resultat as $key => $value){
            $listFiltreeEtudiant[$i]["id"] = $resultat[$key]->getId();
            $listFiltreeEtudiant[$i]["nomEtudiant"] = $resultat[$key]->getEtudiant()->getNomEtudiant();
            $listFiltreeEtudiant[$i]["prenomEtudiant"] = $resultat[$key]->getEtudiant()->getPrenomEtudiant();
            $i=$i+1;
        }
        if($i>=1){
            return $this->render('SUHGestionBundle:AffichageEtudiants:accueil.html.twig',array(
                'listeEtudiantsHandicapes'=>$listFiltreeEtudiant
            ));
        }
        else{
            $listFiltreeEtudiant[$i]["id"] = 0;
            $listFiltreeEtudiant[$i]["nomEtudiant"] = "Pas de résultat";
            $listFiltreeEtudiant[$i]["prenomEtudiant"] = " ";
               return $this->render('SUHGestionBundle:AffichageEtudiants:accueil.html.twig',array(
                'listeEtudiantsHandicapes'=>$listFiltreeEtudiant
            ));
        }
    }
    
    
}
