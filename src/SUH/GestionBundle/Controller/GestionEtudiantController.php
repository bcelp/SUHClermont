<?php

namespace SUH\GestionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use SUH\GestionBundle\Entity\Etudiant;
use SUH\GestionBundle\Entity\Formation;
use SUH\GestionBundle\Entity\EtudiantFormation;
use SUH\GestionBundle\Entity\AideExamen;
use SUH\GestionBundle\Entity\Mdph;
use SUH\GestionBundle\Entity\EtudiantHandicape;
use SUH\GestionBundle\Entity\Handicap;
class GestionEtudiantController extends Controller
{    
    
    public function ajoutEtudiantAction($id)
    {
        
    }
    
    //======================================================================================
    
    public function addInfosEtudiantAction(Request $request){
        
        //$em = $this->getDoctrine()->getManager();
        
        $etudiant = new Etudiant();
        $session = $this->get('session');

        //$session->set('filter', array(
          //      'etape' => '1'
            //));
        
        $form = $this->createFormBuilder($etudiant)
                ->add('nomEtudiant','text') 
                ->add('prenomEtudiant','text')
                ->add('dateNaissance','date')
                ->add('mail','text')
                ->add('adresseEtudiante','text')
                ->add('adresseFamiliale','text')
                ->add('telephone','text')
                ->add('Valider','submit')
                ->getForm();
        
        $form->handleRequest($request);
        
        if($form->isValid()){
            
            $em=$this->getDoctrine()->getManager();
            $em->persist($etudiant);
            $em->flush();
            
            
            $_SESSION['id'] = $etudiant->getId();
            $session->set('id', array(
                'idEtudiant' => $etudiant->getId()
            ));
            
            return $this->redirect($this->generateUrl('suh_gestion_addEtudiant_Etape2'));         
        }
       
        return $this->render('SUHGestionBundle:AffichageEtudiants:addEtudiant.html.twig', array(
            'f' => $form->createView(),
            'etape' => '1'
        )); 
                
    }
    
    public function addInfosEtudiantEtape2Action(Request $request){
        
       // $session = $this->get('session');
        
        
       // $product = $this->getDoctrine()
         //   ->getRepository('GestionBundle:Etudiant')
           // ->find(1);
        
        $id = $_SESSION['id'];
        
        $etudiant = $this->getDoctrine()
        ->getRepository('SUHGestionBundle:Etudiant')
        ->find($id);

        if (!$etudiant) {
            throw $this->createNotFoundException(
                'Il y a un problème avec la création de l\'étudiant'
            );
        }
        
        $formation = new Formation();
        
    
        $date = Date('Y')-2;
        $date .= "-";
        $date .= Date('Y')-1;
        
        $date2 = Date('Y')-1;
        $date2 .= "-";
        $date2 .= Date('Y');
        
        $date3 = Date('Y');
        $date3 .= "-";
        $date3 .= Date('Y')+1;

        $form = $this->createFormBuilder($formation)
                ->add('etablissement', 'choice', array(
                        'choices' => array(
                            'Blaise Pascal' => 'Blaise Pascal',
                            'Université d\'Auvergne' => 'Université d\'Auvergne',
                            'IFMA' => 'IFMA',
                            'Vet Agro SUP' => 'Vet Agro SUP',
                            'ENSCCF' => 'ENSCCF'
                        )))
                
                ->add('anneeEtude', 'choice', array(
                    'choices' => array(
                            $date => $date,
                            $date2 => $date2,
                            $date3 => $date3
                )))
             
                ->add('diplome','choice', array(
                        
                        'choices' => array(
                            'Licence' => 'Licence',
                            'DEUST' => 'DEUST',
                            'BTS' => 'BTS',
                            'Licence Professionnelle' => 'Licence Professionnelle',
                            'Master' => 'Master',
                            'Doctorat' => 'Doctorat',
                            'Thèse' => 'Thèse',
                            'Ingénieur' => 'Ingénieur',
                            'PACES' => 'PACES',
                            'APEMK' => 'APEMK',
                            'Autre concours' => 'Autre concours',
                            'Préparation concours' => 'Préparation concours',
                            'Professionnels de santé' => 'Professionnels de santé',
                            'DU' => 'DU',
                            'DUT' => 'DUT',
                            'Capacité' => 'Capacité',
                            'Remise à niveau / équivalence' => 'Remise à niveau / équivalence',
                            'Formation permanente' => 'Formation permanente'
                             )
                ))
                ->add('composante','text')
                ->add('filiere','text')
                ->add('cycle', 'choice', array(
                        'choices' => array(
                            '1' => '1er cycle ',
                            '2' => '2ème cycle',
                            '3' => '3ème cycle'
                        ),
                        'empty_value' => 'Choisissez le cycle',
                        'empty_data'  => null))
                ->add('anneeEtude','choice', array(
                        'choices' => array(
                            '1' => '1ère année',
                            '2' => '2ème année',
                            '3' => '3ème année',
                            '4' => '4ème année',
                            '5' => '5ème année',
                            '6' => '6ème année',
                            '7' => '7ème année',
                            '8' => '8ème année',
                            '9' => '9ème année',
                )))
                ->add('Valider','submit')
                
                ->getForm();
                
                
        
        $form->handleRequest($request);
        
        if($form->isValid()){
            
            
            
            $em=$this->getDoctrine()->getManager();
            $em->persist($formation);
            $em->flush();

            $etudiant = $this->getDoctrine()->getManager()->getRepository('SUHGestionBundle:Etudiant')->findOneById($_SESSION['id']);
            $formation = $this->getDoctrine()->getManager()->getRepository('SUHGestionBundle:Formation')->findOneById($formation->getId());

            $_SESSION['formation'] = $formation;
            $_SESSION['etudiant'] = $etudiant;
            $_SESSION['annee'] = $formation->getAnneeEtude();
            
            $ez=$this->getDoctrine()->getManager();
           
            $ef = new EtudiantFormation($etudiant, $_SESSION['annee'], $formation);
            $ez->persist($ef);
            
            $ez->flush();
            
            return $this->redirect($this->generateUrl('suh_gestion_addEtudiant_Etape3'));
            
        }

        
        return $this->render('SUHGestionBundle:AffichageEtudiants:addEtudiant.html.twig', array(
            
            'f' => $form->createView(),
            'nom' => $etudiant->getNomEtudiant(),
            'prenom' => $etudiant->getPrenomEtudiant(),
            'etape' => '2'     
            
        ));
    }
    
    public function BackStep1Action(){
        
        $id = $_SESSION['id'];
        
        $etudiant = $this->getDoctrine()
        ->getRepository('SUHGestionBundle:Etudiant')
        ->find($id);
         
        $em=$this->getDoctrine()->getManager();
        
        $em->remove($etudiant);
        $em->flush();
        
        return $this->redirect($this->generateUrl('suh_gestion_addEtudiant'));
    }
    
    public function BackStep2Action(){
        
      $deleteQuery = $this->getDoctrine()
        ->getManager()
        ->createQueryBuilder('d')
        ->delete('SUHGestionBundle:EtudiantFormation', 'ef')
        ->where('ef.etudiant = ' . $_SESSION['id'])->getQuery();
        
        $deleted = $deleteQuery->getResult();

        return $this->redirect($this->generateUrl('suh_gestion_addEtudiant_Etape2'));
    }
    
    public function addInfosEtudiantEtape3Action(Request $request){
        
        //$em = $this->getDoctrine()->getManager();
        
        $etudiant = new Etudiant();
        $session = $this->get('session');

        $AideExamen = new AideExamen();
        //$session->set('filter', array(
          //      'etape' => '1'
            //));
        
        $form = $this->createFormBuilder($AideExamen)
                ->add('amenagementExamens','text') 
                
                ->add('tempsMajore','choice', array(
                        'choices' => array(
                            '0' => 'Non',
                            '1' => 'Oui',
                        )
                    ))
                ->add('autresMesures','choice', array(
                        'choices' => array(
                            '0' => 'Non',
                            '1' => 'Oui',
                        )
                    ))
                ->add('delocalisationExamen','text')
                ->add('dateValidite','date')
                ->add('dureeAvisMedical','text')
                ->add('Valider','submit')
                ->getForm();
        
        $form->handleRequest($request);
        
        if($form->isValid()){
            
            $_SESSION['idExamen'] = $AideExamen->getId();
            $em=$this->getDoctrine()->getManager();
            $em->persist($AideExamen);
            $em->flush();
            
            
            $_SESSION['id'] = $etudiant->getId();
            $session->set('id', array(
                'idEtudiant' => $etudiant->getId()
            ));
            
            return $this->redirect($this->generateUrl('suh_gestion_addEtudiant_Etape4'));         
        }
       
        return $this->render('SUHGestionBundle:AffichageEtudiants:addEtudiant.html.twig', array(
            'f' => $form->createView(),
            'nom' => $etudiant->getNomEtudiant(),
            'prenom' => $etudiant->getPrenomEtudiant(),
            'etape' => '3'
        )); 
                
    }
    
    public function addInfosEtudiantEtape4Action(){
        return $this->render('SUHGestionBundle:AffichageEtudiants:addEtudiant.html.twig', array(
            'etape' => '4'
        )); 
    }
    
    public function addInfosEtudiantEtape5Action(Request $request){
        
        //$em = $this->getDoctrine()->getManager();
        
        $etudiant = new Etudiant();
        $session = $this->get('session');

        $Mdph = new Mdph();
        //$session->set('filter', array(
          //      'etape' => '1'
            //));
        
        $form = $this->createFormBuilder($Mdph)
                ->add('reconnaissanceMdph','choice', array(
                        'choices' => array(
                            '0' => 'Non',
                            '1' => 'Oui',
                        )
                    )) 
                ->add('departementMdph','integer')
                
                ->add('Valider','submit')
                ->getForm();

        $form->handleRequest($request);
        
        if($form->isValid()){
            $_SESSION['idMdph'] = $Mdph->getId();
            $em=$this->getDoctrine()->getManager();
            $em->persist($Mdph);
            $em->flush();
            
            return $this->redirect($this->generateUrl('suh_gestion_addEtudiant_Etape6'));         
        }
       
        return $this->render('SUHGestionBundle:AffichageEtudiants:addEtudiant.html.twig', array(
            'f' => $form->createView(),
            'nom' => $etudiant->getNomEtudiant(),
            'prenom' => $etudiant->getPrenomEtudiant(),
            'etape' => '5'
        )); 
                
    }
    
    public function addInfosEtudiantEtape6Action(Request $request){
        
        //$em = $this->getDoctrine()->getManager();
        
        $Handicap = new Handicap();
        //$session->set('filter', array(
          //      'etape' => '1'
            //));
        
        $form = $this->createFormBuilder($Handicap)
                ->add('nomHandicap','text') 
                ->add('Valider','submit')
                ->getForm();
        
        $form->handleRequest($request);
        
        if($form->isValid()){
            
            $_SESSION['Handicap'] = $Handicap->getId();           
            $em=$this->getDoctrine()->getManager();
            $em->persist($Handicap);
            $em->flush();
          
            return $this->redirect($this->generateUrl('suh_gestion_addEtudiant_Etape7'));         
        }
       
        return $this->render('SUHGestionBundle:AffichageEtudiants:addEtudiant.html.twig', array(
            'f' => $form->createView(),
            
            'etape' => '6'
        )); 
                
    }
    
    public function addInfosEtudiantEtape7Action(Request $request){
        
        $etudiantRepository = $this->getDoctrine()->getManager()->getRepository('SUHGestionBundle:Etudiant');
        return new Response(var_dump($_SESSION['id']));
        $etudiant = $etudiantRepository->find($_SESSION['id']);
        
        $EtudiantHandicape = new EtudiantHandicape($etudiant,$_SESSION['idMdph'],$_SESSION['Handicap'], $_SESSION['idExamen']);
        //$session->set('filter', array(
          //      'etape' => '1'
            //));      
        
        echo $_SESSION['id'];        
        echo $_SESSION['idMdph'];        
        echo $_SESSION['Handicap'];        
        echo $_SESSION['idExamen'];  
        
        $form = $this->createFormBuilder($EtudiantHandicape)
                
                ->add('rqth','choice',
                        array(
                        'choices' => array(
                            '0' => 'Oui',
                            '1' => 'Non',
                        )))
                ->add('notificationSavs','choice',
                        array(
                        'choices' => array(
                            '0' => 'Oui',
                            '1' => 'Non',
                        )))
                ->add('amenagementEtude','text')
                ->add('tauxInvalidite','text')
                ->add('suivi','text')
                ->add('dateMaj','date')
                ->add('descriptifComplementaire','text')
                ->add('Valider','submit')
                ->getForm();
        
        $form->handleRequest($request);
        
        if($form->isValid()){
            
            $em=$this->getDoctrine()->getManager();
            $em->persist($EtudiantHandicape);
            $em->flush();
          
            return $this->redirect($this->generateUrl('suh_gestion_addEtudiant'));         
        }
       
        return $this->render('SUHGestionBundle:AffichageEtudiants:addEtudiant.html.twig', array(
            'f' => $form->createView(),
            'etape' => '7'
        )); 
          
        
        //return null;
        //return $this->render('SUHGestionBundle:AffichageEtudiants:addEtudiant.html.twig', array(
        //    'etape' => '4'));
    }
    
    //======================================================================================
    
    
    public function modificationEtudiantAction($id)
    {
        
    }
    
    /**
     * supprime un étudiant de la base de données (identifié par son $id) 
     * et toutes les informations qui lui sont reliées
     * @param type $id
     * @return type
     */
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
