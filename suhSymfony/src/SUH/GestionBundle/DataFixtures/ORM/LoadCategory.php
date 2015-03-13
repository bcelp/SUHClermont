<?php
// src/OC/PlatformBundle/DataFixtures/ORM/LoadCategory.php

namespace SUH\GestionBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use SUH\GestionBundle\Entity;

class LoadCategory implements FixtureInterface
{
  public function load(ObjectManager $manager)
  {
      
    /* ====================================================================== */
    /* Tables sans jointure */
    
    $arrayEtudiant = array();
    $arrayFormation = array();
    $arrayMdph = array();
    $arrayHandicap = array();
    $arrayAideExamen = array();
    
    for($i=0;$i<40;$i++)
    {
        $etudiant=new Entity\Etudiant('nom'.$i,'prenom'.$i,'01/01/2015','mail'.$i,
                'adresseFamiliale'.$i,'adresseEtudiante'.$i,'0606060606');
        $arrayEtudiant[]=$etudiant;
        $manager->persist($etudiant);
    }
    for($i=0;$i<40;$i++)
    {
        $mdph=new Entity\Formation('diplome'.$i,'composante'.$i,'filiere'.$i,
                1,'etablissement'.$i);
        $arrayFormation[]=$mdph;
        $manager->persist($mdph);
    }
    for($i=0;$i<40;$i++)
    {
        $mdph=new Entity\Mdph($i%2,$i+2);
        $arrayMdph[]=$mdph;
        $manager->persist($mdph);
    }
    for($i=0;$i<40;$i++)
    {
        $handicap=new Entity\Handicap('handicap '.$i);
        $arrayHandicap[]=$handicap;
        $manager->persist($handicap);
    }
    for($i=0;$i<40;$i++)
    {
        $aideExamen=new Entity\AideExamen('$amenagement examen '.$i, $i%2, ($i.$i)%2,
                'delocalisaiton examen '.$i,'01/01/2012','duree avis medical '.$i);
        $arrayAideExamen[]=$aideExamen;
        $manager->persist($aideExamen);
    }
    $manager->flush();
    
    /* ====================================================================== */
    /* Tables avec jointures */
    $arrayEtudiantHandicape = array();
    $arrayEtudiantHandicapeHandicap = array();
    $arrayDatesAideExamen = array();
    $arrayEtudiantFormation = array();
   
    for($i=0;$i<40;$i++)
    {
        $etudiantHandicape=new Entity\EtudiantHandicape($arrayEtudiant[$i],'qhandi '.$i,($i*3)%2,$i%2,
                'amenagement etude '.$i,'taux invalidite '.$i,'suivi '.$i,'01/01/2016',
                'descriptif complementaire '.$i,$arrayMdph[$i]);
        $arrayEtudiantHandicape[]=$etudiantHandicape;
        $manager->persist($etudiantHandicape);
    }
    
    $manager->flush();
    
    for($i=0;$i<40;$i++)
    {
        $etudiantHandicapeHandicap=new Entity\EtudiantHandicapeHandicap(
                $arrayEtudiantHandicape[$i],$arrayHandicap[$i]);
        $arrayEtudiantHandicapeHandicap[]=$etudiantHandicapeHandicap;
        $manager->persist($etudiantHandicapeHandicap);
    }
    
    for($i=0;$i<40;$i++)
    {
        $datesAideExamen=new Entity\DatesAideExamen(
        $arrayEtudiantHandicape[$i],$arrayAideExamen[$i],null,null);
        $arrayDatesAideExamen[]=$datesAideExamen;
        $manager->persist($datesAideExamen);
    }
    
    for($i=0;$i<40;$i++)
    {
        $etudiantFormation=new Entity\EtudiantFormation(
                $arrayEtudiant[$i],'2015',$arrayFormation[$i]);
        $arrayEtudiantFormation[]=$etudiantFormation;
        $manager->persist($etudiantFormation);
    }
    
    $manager->flush();
  
    }
}