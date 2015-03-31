<?php

namespace SUH\GestionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use SUH\GestionBundle\Entity\Etudiant;
use SUH\GestionBundle\Entity\Formation;
use SUH\GestionBundle\Entity\EtudiantFormation;
use SUH\GestionBundle\Entity\DatesAideExamen;
use SUH\GestionBundle\Entity\AideExamen;
use SUH\GestionBundle\Entity\Mdph;
use SUH\GestionBundle\Entity\EtudiantHandicape;
use SUH\GestionBundle\Entity\Handicap;

class GestionEtudiantController extends Controller
{    
    
    /**
     * Permet la suppression d'un handicap de l'étudiant (suppression avec la croix rouge à gauche de l'handicap)
     * @param type $id
     * @return type
     */
    public function supprimerHandicapAction($id)
    {
        $manager = $this->getDoctrine()->getManager();
        $handicapRepository = $manager->getRepository('SUHGestionBundle:Handicap');
                
        $handicap = $handicapRepository->find($id);
        
        $manager->remove($handicap);
        $manager->flush();
        
         return $this->render('SUHGestionBundle:AffichageEtudiants:accueil.html.twig');
    }
    
    /**
     * Permet la suppression d'une formation de l'étudiant (suppression avec la croix rouge à gauche de la formation)
     * @param type $id
     * @return type
     */
    public function supprimerFormationAction($id)
    {
        $manager = $this->getDoctrine()->getManager();
        $formationRepository = $manager->getRepository('SUHGestionBundle:Formation');
                
        $formation = $formationRepository->find($id);
        
        $manager->remove($formation);
        $manager->flush();
        
         return $this->render('SUHGestionBundle:AffichageEtudiants:accueil.html.twig');
    }
    
    /**
     * Permet la suppression d'une aide examen de l'étudiant (suppression avec la croix rouge à gauche de l'aide examen)
     * @param type $id
     * @return type
     */
    public function supprimerAideExamenAction($id)
    {
        $manager = $this->getDoctrine()->getManager();
        $aideExamenRepository = $manager->getRepository('SUHGestionBundle:AideExamen');
                
        $aideExamen = $aideExamenRepository->find($id);
        
        $manager->remove($aideExamen);
        $manager->flush();
        
         return $this->render('SUHGestionBundle:AffichageEtudiants:accueil.html.twig');
    }

    //======================================================================================

    // addxxx concerve les fonctions d'ajout d'informations lors de la création d'un étudiant
    // modifxxx concerne les fonctions de modifications des informations des étudiants
    // backxxx concerne les fonctions permettant en retour en arrière d'une étape d'ajout d'une information
    //======================================================================================
    
    public function addInfosEtudiantAction(Request $request){
        
        $etudiant = new Etudiant(null,null,null,null,null,null,null);
                
        $form = $this->createFormBuilder($etudiant)
                ->add('nomEtudiant','text') 
                ->add('prenomEtudiant','text')
                ->add('dateNaissance','date', array(
    'years' => range(date('Y-m-d') -80, date('Y-m-d'))))
                ->add('mail','email')
                ->add('adresseEtudiante','text')
                ->add('adresseFamiliale','text')
                ->add('telephone','integer')
                ->add('Valider','submit')
                ->getForm();
        
        $form->handleRequest($request);
        
        if($form->isValid()){
            
            $em=$this->getDoctrine()->getManager();
            $em->persist($etudiant);
            $em->flush();
            
            
            $_SESSION['id'] = $etudiant->getId();
                        
            return $this->redirect($this->generateUrl('suh_gestion_addEtudiant_Etape2'));         
        }
       
        return $this->render('SUHGestionBundle:AffichageEtudiants:addEtudiant.html.twig', array(
            'f' => $form->createView(),
            'etape' => '1'
        )); 
                
    }
    
    public function addInfosEtudiantEtape2Action(Request $request){
        
             
        $id = $_SESSION['id'];
        
        $etudiant = $this->getDoctrine()
        ->getRepository('SUHGestionBundle:Etudiant')
        ->find($id);

        $formation = new Formation(null,null,null,null,null,null);

        $form = $this->createFormBuilder($formation)
                ->add('etablissement', 'text')
                ->add('diplome','text')
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
            $_SESSION['idFormation'] = $formation->getId();
            $_SESSION['etudiant'] = $etudiant;
            $_SESSION['annee'] = $formation->getAnneeEtude();

            return $this->redirect($this->generateUrl('suh_gestion_addEtudiant_Etape2bis'));
            
        }

        
        return $this->render('SUHGestionBundle:AffichageEtudiants:addEtudiant.html.twig', array(
            
            'f' => $form->createView(),
            'etape' => '2'     
            
        ));
    }
    
    public function addInfosEtudiantEtape2BisAction(Request $request){
        
        $entityManager = $this->getDoctrine()->getManager();
        $EtudiantRepository = $entityManager->getRepository('SUHGestionBundle:Etudiant');
        $FormationRepository = $entityManager->getRepository('SUHGestionBundle:Formation');
        
        $etudiant = $EtudiantRepository->find($_SESSION['id']);
        $formation = $FormationRepository->find($_SESSION['idFormation']);
        
        $ef = new EtudiantFormation($etudiant, null, $formation);
                
        $form = $this->createFormBuilder($ef)
        ->add('anneeScolaire', 'text')
        ->add('Valider','submit')
        ->getForm();   
        
        $form->handleRequest($request);
        
        if($form->isValid()){
            
            $ez=$this->getDoctrine()->getManager();
           
            $ez->persist($ef);
            
            $ez->flush();
            
            return $this->redirect($this->generateUrl('suh_gestion_addEtudiant_Etape3'));
        }
        
        return $this->render('SUHGestionBundle:AffichageEtudiants:addEtudiant.html.twig', array(
            
            'f' => $form->createView(),
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
   

        $AideExamen = new AideExamen(null,null,null,null,null,null);
   
        $form = $this->createFormBuilder($AideExamen)
                ->add('amenagementExamens','textarea') 
                
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
                ->add('dateValidite','date', array(
    'years' => range(date('Y-m-d') -10, date('Y-m-d') + 20)))
                ->add('dureeAvisMedical','text')
                ->add('Valider','submit')
                ->getForm();
        
        $form->handleRequest($request);
        
        if($form->isValid()){
                        
            $em=$this->getDoctrine()->getManager();
            $em->persist($AideExamen);
            $em->flush();
            
            
            $_SESSION['idExamen'] = $AideExamen->getId();
            $_SESSION['examen'] = $AideExamen; 
               
            return $this->redirect($this->generateUrl('suh_gestion_addEtudiant_Etape4'));         
        }
       
        return $this->render('SUHGestionBundle:AffichageEtudiants:addEtudiant.html.twig', array(
            'f' => $form->createView(),
            'etape' => '3'
        )); 
                
    }
    
    public function addInfosEtudiantEtape4Action(){
        return $this->render('SUHGestionBundle:AffichageEtudiants:addEtudiant.html.twig', array(
            'etape' => '4'
        )); 
    }
    
    public function addInfosEtudiantEtape4bisAction(Request $request){

        $Mdph = new Mdph(1,null);

        $form = $this->createFormBuilder($Mdph)
                
                ->add('departementMdph','integer')
                
                ->add('Valider','submit')
                ->getForm();

        $form->handleRequest($request);
        
        if($form->isValid()){
            
            
            $em=$this->getDoctrine()->getManager();
            $em->persist($Mdph);
            $em->flush();
            $_SESSION['idMdph'] = $Mdph;
            return $this->redirect($this->generateUrl('suh_gestion_addEtudiant_Etape5'));         
        }
       
        return $this->render('SUHGestionBundle:AffichageEtudiants:addEtudiant.html.twig', array(
            'f' => $form->createView(),
            'etape' => '5'
        )); 
                
    }
    
    public function addInfosEtudiantIntermediaireAction(Request $request){
    
        $mdph = new Mdph(0,null);
        
        $em=$this->getDoctrine()->getManager();
            $em->persist($mdph);
            $em->flush();
        $_SESSION['idMdph'] = $mdph;
        return $this->redirect($this->generateUrl('suh_gestion_addEtudiant_Etape5')); 
    }
    
    public function addInfosEtudiantEtape5Action(Request $request){

        $Handicap = new Handicap(null);
        
        
        $form = $this->createFormBuilder($Handicap)
                ->add('nomHandicap','text') 
                ->add('Valider','submit')
                ->getForm();
        
        
        $form->handleRequest($request);
        
        if($form->isValid()){
            
                     
            $em=$this->getDoctrine()->getManager();
            $em->persist($Handicap);
            $em->flush();
            
            $_SESSION['Handicap'] = $Handicap;  
           
            $ez=$this->getDoctrine()->getManager();
            $ez->flush();
            
            return $this->redirect($this->generateUrl('suh_gestion_addEtudiant_Etape6'));         
        }
       
        return $this->render('SUHGestionBundle:AffichageEtudiants:addEtudiant.html.twig', array(
            'f' => $form->createView(),            
            'etape' => '6'
        )); 
                
    }
    
    
    
    public function addInfosEtudiantEtape6Action(Request $request){
        
                
        $etudiantRepository = $this->getDoctrine()->getManager()->getRepository('SUHGestionBundle:Etudiant');
        $etudiant = $etudiantRepository->find($_SESSION['id']);
             
        $EtudiantHandicape = new EtudiantHandicape($etudiant, null, null, null, null, null, null, null, null, $_SESSION['idMdph'],$_SESSION['Handicap']);

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
                ->add('amenagementEtude','textarea')
                ->add('tauxInvalidite','textarea')
                ->add('suivi','text')
                ->add('qhandi','text')
                ->add('descriptifComplementaire','textarea')
                ->add('Valider','submit')
                ->getForm();
        
        $form->handleRequest($request);
       
        if($form->isValid()){   
            
            
           $em=$this->getDoctrine()->getManager();
           $em->persist($EtudiantHandicape);
           $em->flush();
           
           $entityManager = $this->getDoctrine()->getManager();
           $AideExamenRepository = $entityManager->getRepository('SUHGestionBundle:AideExamen');
          
           $aideExamen = $AideExamenRepository->find($_SESSION['idExamen']);
      
           $em2=$this->getDoctrine()->getManager();
           $DatesAideExamen = new DatesAideExamen($EtudiantHandicape, $aideExamen,null,null);
           $em2->persist($DatesAideExamen);
           $em2->flush();
            
           $_SESSION['DatesAideExamen'] = $DatesAideExamen;
            return $this->redirect($this->generateUrl('suh_gestion_addEtudiant_Etape6bis'));         
        }
       

        
        return $this->render('SUHGestionBundle:AffichageEtudiants:addEtudiant.html.twig', array(
            'f' => $form->createView(),
            'etape' => '6'
        )); 
        
    }
    
    public function addInfosEtudiantEtape6bisAction(Request $request) {
        
        $DatesAideExamen = $_SESSION['DatesAideExamen'];
        
        $form = $this->createFormBuilder($DatesAideExamen)
                ->add('dateDebut','date', array(
    'years' => range(date('Y-m-d') -20, date('Y-m-d')+5)))
                ->add('Valider','submit')
                ->getForm();
                
        $form->handleRequest($request);
        
        if($form->isValid()){
           $em=$this->getDoctrine()->getManager();
           $em->flush();
           
           return $this->redirect($this->generateUrl('suh_gestion_homepage'));  
        }        
        
        return $this->render('SUHGestionBundle:AffichageEtudiants:addEtudiant.html.twig', array(
            'f' => $form->createView(),
            'etape' => '6'
        )); 
    }
    
   
    //======================================================================================
    
    
    public function modificationEtudiantAction($id)
    {
        $_SESSION['idModif'] = $id ;
        
        return $this->render('SUHGestionBundle:AffichageEtudiants:modifEtudiant.html.twig');
    }
    
    public function modifInfosAction(Request $request){
             
        $etudiant = $this->getDoctrine()
        ->getRepository('SUHGestionBundle:Etudiant')
        ->find($_SESSION['idModif']);
        

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
            
            $em = $this->getDoctrine()->getManager();
            $em->flush();
            
            return $this->render('SUHGestionBundle:AffichageEtudiants:modifEtudiant.html.twig');
        }
        
        
         return $this->render('SUHGestionBundle:AffichageEtudiants:modifEtudiant.html.twig', array(
            'f' => $form->createView(),
            'modif' => 'on'
            
        )); 
        
    }

    
    public function modifFormationAction(Request $request){
        
        
        $repository = $this->getDoctrine()
        ->getRepository('SUHGestionBundle:EtudiantFormation');
               
        
        $Etudiantformation = $repository->findOneBy(array('etudiant' => $_SESSION['idModif']));
        $idFormation = $Etudiantformation->getFormation();
        
        $formation = $this->getDoctrine()
        ->getRepository('SUHGestionBundle:Formation')
        ->find($idFormation);
        
        
        $form = $this->createFormBuilder($formation)
                ->add('etablissement', 'text')
                ->add('diplome','text')
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
            
            $em = $this->getDoctrine()->getManager();
            $em->flush();
            
            return $this->render('SUHGestionBundle:AffichageEtudiants:modifEtudiant.html.twig');
        }
        
        
         return $this->render('SUHGestionBundle:AffichageEtudiants:modifEtudiant.html.twig', array(
            'f' => $form->createView(),
            'modif' => '2'
            
        )); 
    }
    
    
    public function modifAnneeScolaireAction(Request $request){
        $repository = $this->getDoctrine()
        ->getRepository('SUHGestionBundle:EtudiantFormation');
               
        
        $Etudiantformation = $repository->findOneBy(array('etudiant' => $_SESSION['idModif']));
        
        $form = $this->createFormBuilder($Etudiantformation)
                ->add('anneeScolaire','text')
                ->add('Valider','submit')
                ->getForm();
        
        $form->handleRequest($request);
        
        if($form->isValid()){
            
            $em = $this->getDoctrine()->getManager();
            $em->flush();
            
            return $this->render('SUHGestionBundle:AffichageEtudiants:modifEtudiant.html.twig');
        }
        
        
        return $this->render('SUHGestionBundle:AffichageEtudiants:modifEtudiant.html.twig', array(
            'f' => $form->createView(),
            'modif' => 'on'
            
        )); 
    }
    
    public function modifhandicapAction(Request $request){
    $repository = $this->getDoctrine()
        ->getRepository('SUHGestionBundle:EtudiantHandicape');
    
    
    $EtudiantHandicape = $repository->findOneBy(array('etudiant' => $_SESSION['idModif']));
    
    $form = $this->createFormBuilder($EtudiantHandicape)
                ->add('rqth','choice', array(
                        'choices' => array(
                            '0' => 'Non',
                            '1' => 'Oui',
                        )
                    ))
                ->add('notificationSavs','choice', array(
                        'choices' => array(
                            '0' => 'Non',
                            '1' => 'Oui',
                        )
                    ))
                ->add('amenagementEtude','textarea')
                ->add('tauxInvalidite','text')
                ->add('suivi','text')
                ->add('qhandi','text')
                ->add('dateMaj','date')
                ->add('descriptifComplementaire','textarea')
                ->add('Valider','submit')
                ->getForm();
               
        
    $form->handleRequest($request);
        
    if($form->isValid()){
            
        $em = $this->getDoctrine()->getManager();
        $em->flush();
            
        return $this->render('SUHGestionBundle:AffichageEtudiants:modifEtudiant.html.twig');
    }
    return $this->render('SUHGestionBundle:AffichageEtudiants:modifEtudiant.html.twig', array(
            'f' => $form->createView(),
            'modif' => 'on'
            
        ));     
        
    }
    
    public function modifDatesAideExamenAction(Request $request){
    $repository = $this->getDoctrine()
        ->getRepository('SUHGestionBundle:DatesAideExamen');
    
    
    $DatesAideExamen = $repository->findOneBy(array('etudiantHandicape' => $_SESSION['idModif']));
   

    $form = $this->createFormBuilder($DatesAideExamen)
                ->add('dateDebut','date', array(
    'years' => range(date('Y-m-d') -20, date('Y-m-d')+5)))
                ->add('dateFin','date',array(
    'years' => range(date('Y-m-d') -20, date('Y-m-d')+20)))
                ->add('Valider','submit')
                ->getForm();
               
        
    $form->handleRequest($request);
        
    if($form->isValid()){
            
        $em = $this->getDoctrine()->getManager();
        $em->flush();
            
        return $this->render('SUHGestionBundle:AffichageEtudiants:modifEtudiant.html.twig');
    }
    return $this->render('SUHGestionBundle:AffichageEtudiants:modifEtudiant.html.twig', array(
            'f' => $form->createView(),
            'modif' => '3'
            
        ));     
        
    }
    
    public function modifAideExamenAction(Request $request){
        
    $repository = $this->getDoctrine()
        ->getRepository('SUHGestionBundle:DatesAideExamen');
    
    
    $DatesAideExamen = $repository->findOneBy(array('etudiantHandicape' => $_SESSION['idModif']));
   
    $AideExamen = $DatesAideExamen->getAideExamen();
    
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
                ->add('dateValidite','date', array(
    'years' => range(date('Y-m-d') -10, date('Y-m-d') + 20)))
                ->add('dureeAvisMedical','text')
                ->add('Valider','submit')
                ->getForm();
        
        $form->handleRequest($request);
        
        if($form->isValid()){
                        
            $em=$this->getDoctrine()->getManager();
            $em->flush();
            return $this->render('SUHGestionBundle:AffichageEtudiants:modifEtudiant.html.twig');
        }
        
    return $this->render('SUHGestionBundle:AffichageEtudiants:modifEtudiant.html.twig', array(
            'f' => $form->createView(),
            'modif' => '3'
        ));   
    }
    
    public function modifmdphAction(Request $request){
    $repository = $this->getDoctrine()
        ->getRepository('SUHGestionBundle:EtudiantHandicape');
    
    
    $EtudiantHandicape = $repository->findOneBy(array('etudiant' => $_SESSION['idModif']));
    
    $mdph = $EtudiantHandicape->getMdph();
    
    $form = $this->createFormBuilder($mdph)
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
            
        $em = $this->getDoctrine()->getManager();
        $em->flush();
            
        return $this->render('SUHGestionBundle:AffichageEtudiants:modifEtudiant.html.twig');
    }
    
        return $this->render('SUHGestionBundle:AffichageEtudiants:modifEtudiant.html.twig', array(
            'f' => $form->createView(),
            'modif' => 'on'
            
        ));  
    }

    public function modifNomHandicapAction(Request $request){
    
        $repository = $this->getDoctrine()
            ->getRepository('SUHGestionBundle:EtudiantHandicape');

        $EtudiantHandicape = $repository->findOneBy(array('etudiant' => $_SESSION['idModif']));
        $handicap = $EtudiantHandicape->getHandicap();


        $form = $this->createFormBuilder($handicap[count($handicap)-1])
            ->add('nomHandicap','text')
            ->add('Valider','submit')
            ->getForm();
        
        $form->handleRequest($request);

        if($form->isValid()){

            $em = $this->getDoctrine()->getManager();
            $em->flush();

        return $this->render('SUHGestionBundle:AffichageEtudiants:modifEtudiant.html.twig');
        }
    
    
    return $this->render('SUHGestionBundle:AffichageEtudiants:modifEtudiant.html.twig', array(
           'f' => $form->createView(),
           'modif' => '1'
            
    )); 
        
    }
    
    public function addNewHandicapAction(Request $request){
        $repository = $this->getDoctrine()
        ->getRepository('SUHGestionBundle:EtudiantHandicape');
    
        $EtudiantHandicape = $repository->findOneBy(array('etudiant' => $_SESSION['idModif']));
        $handicap = $EtudiantHandicape->getHandicap();
        
        $Handicap2 = new Handicap(null);
        
        $nbAreaArray = count($handicap); 
                
        $form = $this->createFormBuilder($Handicap2)
                ->add('nomHandicap','text') 
                ->add('Valider','submit')
                ->getForm();
        
        
        $form->handleRequest($request);
        
        if($form->isValid()){
            
                     
            $em=$this->getDoctrine()->getManager();
            $em->persist($Handicap2);
            $em->flush();
            
            $handicap->add($Handicap2);
            $ez=$this->getDoctrine()->getManager();
            $ez->flush();
            
            return $this->render('SUHGestionBundle:AffichageEtudiants:modifEtudiant.html.twig');
        }
        
        return $this->render('SUHGestionBundle:AffichageEtudiants:modifEtudiant.html.twig', array(
            'f' => $form->createView(),
            'modif' => 'on'
            
        )); 
    }
    
    
    public function addNewFormationAction(Request $request){
        
        $formation = new Formation(null,null,null,null,null,null);

        $form = $this->createFormBuilder($formation)
                ->add('etablissement', 'text'   )
                ->add('diplome','text')
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
                        
            $_SESSION['formation'] = $formation;
            
            return $this->redirect($this->generateUrl('suh_gestion_addNewFormation_Etape2'));   
        }
        
        return $this->render('SUHGestionBundle:AffichageEtudiants:modifEtudiant.html.twig', array(
            'f' => $form->createView(),
            'modif' => 'on'
            
        )); 
    }
    
    
    public function addNewFormationEtape2Action(Request $request){
   
        $etudiant = $this->getDoctrine()
        ->getRepository('SUHGestionBundle:Etudiant')
        ->find($_SESSION['idModif']);
        
        $EtudiantFormation = new EtudiantFormation($etudiant,null,$_SESSION['formation']);
        
        $form = $this->createFormBuilder($EtudiantFormation)
        ->add('anneeScolaire', 'text')
        ->add('Valider','submit')
        ->getForm();   
        
        $form->handleRequest($request);
        
        if($form->isValid()){
            
            $ez=$this->getDoctrine()->getManager();
            $ez->persist($EtudiantFormation);
            $ez->flush();
            
            return $this->render('SUHGestionBundle:AffichageEtudiants:modifEtudiant.html.twig');
        }
        
        return $this->render('SUHGestionBundle:AffichageEtudiants:modifEtudiant.html.twig', array(
            'f' => $form->createView(),
            'modif' => 'on'
            
        )); 
    }
        
    public function addNewAideExamenAction(Request $request){
        
        $AideExamen = new AideExamen(null,null,null,null,null,null);
        
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
                ->add('dateValidite','date', array(
    'years' => range(date('Y-m-d') -10, date('Y-m-d') + 20)))
                ->add('dureeAvisMedical','text')
                ->add('Valider','submit')
                ->getForm();
        
        $form->handleRequest($request);
        
        if($form->isValid()){
                        
            $em=$this->getDoctrine()->getManager();
            $em->persist($AideExamen);
            $em->flush();
            
            $_SESSION['examen'] = $AideExamen->getId(); 
               
            return $this->redirect($this->generateUrl('suh_gestion_modifEtudiant_AddNewAideExamenEtape2'));         
        }
        
        return $this->render('SUHGestionBundle:AffichageEtudiants:modifEtudiant.html.twig', array(
            'f' => $form->createView(),
            'modif' => 'on'
            
        )); 
    }
    
    public function addNewAideExamenEtape2Action(Request $request){
        
        $repository = $this->getDoctrine()
        ->getRepository('SUHGestionBundle:EtudiantHandicape');

        $EtudiantHandicape = $repository->findOneBy(array('etudiant' => $_SESSION['idModif']));

        $aideExamen = $this->getDoctrine()
        ->getRepository('SUHGestionBundle:AideExamen')
        ->find($_SESSION['examen']);
        
        $datesExamen = new DatesAideExamen($EtudiantHandicape, $aideExamen,null,null);

        $form = $this->createFormBuilder($datesExamen)
                ->add('dateDebut','date',array(
    'years' => range(date('Y-m-d') -20, date('Y-m-d')+5)))
                ->add('Valider','submit')
                ->getForm();
                
        $form->handleRequest($request);
        
        if($form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $em->persist($datesExamen);
            $em->flush();
            
            return $this->render('SUHGestionBundle:AffichageEtudiants:modifEtudiant.html.twig');
        }
        
        return $this->render('SUHGestionBundle:AffichageEtudiants:modifEtudiant.html.twig', array(
            'f' => $form->createView(),
            'modif' => 'on'
            
        )); 
    }    
    
    public function suppressionEtudiantAction($id)
    {
        $entityManager = $this->getDoctrine()->getManager();
        
        $etudiantRepository = $entityManager->getRepository('SUHGestionBundle:Etudiant');
        
        $etudiant = $etudiantRepository->find($id);
        
        $entityManager->remove($etudiant);
        $entityManager->flush();
        
        return $this->render('SUHGestionBundle:AffichageEtudiants:accueil.html.twig',array(
              'listeEtudiantsHandicapes'=>$etudiantRepository->getAllIdNameSurname()
        ));
    }
    
    
}

