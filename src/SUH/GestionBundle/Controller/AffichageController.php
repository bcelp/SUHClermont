<?php

namespace SUH\GestionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class AffichageController extends Controller
{
    public function AfficherAccueilAction()
    {
        return $this->render('SUHGestionBundle:Default:accueil.html.twig',array());
    }
    
    public function AfficherAccueilEtudiantAction($id)
    {
        $etudiantHandicapeRepository = $this->getDoctrine()
                ->getManager()
                ->getRepository('SUHGestionBundle:EtudiantHandicape');
        
        $informationsEtudiant = $etudiantHandicapeRepository->getInformationsStudent($id);
        
        return $this->render('SUHGestionBundle:Default:accueil.html.twig',array(
            'informationsEtudiant'=>$informationsEtudiant
        ));
    }
    
    
    
    public function getListeAction()
    {
        $etudiantHandicapeRepository = $this->getDoctrine()
                ->getManager()
                ->getRepository('SUHGestionBundle:EtudiantHandicape');
        
        $listeEtudiantsHandicapes = $etudiantHandicapeRepository->getAllIdNameSurname();
  
        return $this->render('SUHGestionBundle:Default:liste.html.twig',array(
            'listeEtudiantsHandicapes'=>$listeEtudiantsHandicapes
        ));
    }
    
}
