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
    
    public function SpoilerAction($nomSpoiler,$texteBouton,$informations)
    {
        return $this->render('SUHGestionBundle:Default:spoiler.html.twig',
                array(
                    'nomSpoiler' => $nomSpoiler,
                    'texteBouton' => $texteBouton,
                    'informations' => $informations,
                ));
    }
    
    public function AfficherEtudiant()
    {
        
    }
}
