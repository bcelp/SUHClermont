<?php

namespace SUH\GestionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class GestionEtudiantController extends Controller
{    
    public function ajoutEtudiantAction($id)
    {
        
    }
    
    
    public function modificationEtudiantAction($id)
    {
        
    }
    
    
    public function suppressionEtudiantAction($id)
    {
        $entityManager = $this->getDoctrine()->getManager();
        
        $etudiantRepository = $entityManager->getRepository('SUHGestionBundle:Etudiant');
        $etudiantHandicapeRepository = $entityManager->getRepository('SUHGestionBundle:EtudiantHandicape');
        
        $etudiant = $etudiantRepository->find($id);
        
        $entityManager->remove($etudiant);
        $entityManager->flush();
        
        return $this->render('SUHGestionBundle:AffichageEtudiants:accueil.html.twig',array(
              'listeEtudiantsHandicapes'=>$etudiantHandicapeRepository->getAllIdNameSurname()
        ));
    }
}
