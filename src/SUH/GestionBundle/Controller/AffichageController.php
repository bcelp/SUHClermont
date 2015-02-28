<?php

namespace SUH\GestionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class AffichageController extends Controller
{
    public function AfficherAccueilAction()
    {
        
        return $this->render('SUHGestionBundle:Default:accueil.html.twig',array(
            'listeEtudiantsHandicapes'=>$this->getListeEtudiants(null)
        ));
    }  
    
    public function AfficherAccueilEtudiantAction($id)
    {
        $etudiantHandicapeRepository = $this->getDoctrine()
                ->getManager()
                ->getRepository('SUHGestionBundle:EtudiantHandicape');
        
        $informationsEtudiant = $etudiantHandicapeRepository->getInformationsStudent($id);
        
        return $this->render('SUHGestionBundle:Default:spoiler.html.twig',array(
            'informationsEtudiant'=>$informationsEtudiant
        ));
    }     
    
    public function AfficherAccueilEtudiantRechercheNomOuPrenomAction(Request $request)
    {
        return $this->render('SUHGestionBundle:Default:accueil.html.twig',array(
            'listeEtudiantsHandicapes'=>$this->getListeEtudiants($request->query->get('chaine'))
        ));
    }     
    
    public function getListeEtudiants($chaine)
    {        
        if(empty($chaine))
        {
            $etudiantHandicapeRepository = $this->getDoctrine()
                ->getManager()
                ->getRepository('SUHGestionBundle:EtudiantHandicape');
            return $etudiantHandicapeRepository->getAllIdNameSurname();
        }
        else
        {
            $etudiantRepository = $this->getDoctrine()
                ->getManager()
                ->getRepository('SUHGestionBundle:Etudiant');
            return $etudiantRepository->getListeEtudiantsParNomOuPrenom($chaine);
        }        
    }
    
}
