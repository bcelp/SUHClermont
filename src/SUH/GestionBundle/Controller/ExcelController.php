<?php

namespace SUH\GestionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class ExcelController extends Controller
{    
    
    
    /**
     * Permet l'exportation de fichiers excel
     * @return type
     */
        public function exportExcelAction()
    { 
        //nombre d'étudiants
        $j=1;
        //vérifie si l'étudiant a plus d'une formation/handicap/aideExamen (si la boucle foreach de chaque a déjà eu lieu
        //à la fin de la première itération le boolean passe à true
        //si une nouvelle boucle a lieu, une condition vérifiant le booleen à true incrémente j
        $bool=false;   
        
        //Récupération de tous les étudiants et de leurs informations
        $etudiantHandicapeRepository = $this->getDoctrine()
                ->getManager()
                ->getRepository('SUHGestionBundle:EtudiantHandicape');
        
        
        $listeEtudiants = $etudiantHandicapeRepository->getAllStudentsInformations();
        
        
        //Création objet excel
        $phpExcelObject = $this->get('phpexcel')->createPHPExcelObject();

        $phpExcelObject->getProperties()->setCreator("SUH")
                ->setLastModifiedBy("SUH membre")
                ->setTitle("Office 2005 XLSX Test Document")
                ->setSubject("Office 2005 XLSX Test Document")
                ->setDescription("Test document for Office 2005 XLSX, generated using PHP classes.")
                ->setKeywords("office 2005 openxml php")
                ->setCategory("Test result file");
        
        
        
        for($indexEtudiantCourant=0;$indexEtudiantCourant<count($listeEtudiants);$indexEtudiantCourant++)
        {
            //Informations étudiant
            $phpExcelObject
                ->setActiveSheetIndex(0)
                ->setCellValue('A'.$j, $listeEtudiants[$indexEtudiantCourant]->getEtudiant()->getNomEtudiant())
                ->setCellValue('B'.$j, $listeEtudiants[$indexEtudiantCourant]->getEtudiant()->getPrenomEtudiant())
                ->setCellValue('C'.$j, $listeEtudiants[$indexEtudiantCourant]->getEtudiant()->getId())
                ->setCellValue('D'.$j, $listeEtudiants[$indexEtudiantCourant]->getEtudiant()->getDateNaissance()->format('d/m/Y'))
                ->setCellValue('E'.$j, $listeEtudiants[$indexEtudiantCourant]->getEtudiant()->getAge())                      
                ->setCellValue('G'.$j, $listeEtudiants[$indexEtudiantCourant]->getEtudiant()->getMail())
                ->setCellValue('H'.$j, 'n°'.$listeEtudiants[$indexEtudiantCourant]->getEtudiant()->getTelephone())
                ->setCellValue('I'.$j, $listeEtudiants[$indexEtudiantCourant]->getEtudiant()->getAdresseFamiliale())
                ->setCellValue('J'.$j, $listeEtudiants[$indexEtudiantCourant]->getEtudiant()->getAdresseEtudiante());
            
            //informations étudiant en situation de handicap
            $phpExcelObject
                ->setActiveSheetIndex(0)
                ->setCellValue('K'.$j, $listeEtudiants[$indexEtudiantCourant]->getQhandi())
                ->setCellValue('L'.$j, $listeEtudiants[$indexEtudiantCourant]->getRqth())
                ->setCellValue('M'.$j, $listeEtudiants[$indexEtudiantCourant]->getNotificationSavs())
                ->setCellValue('N'.$j, $listeEtudiants[$indexEtudiantCourant]->getAmenagementEtude())
                ->setCellValue('O'.$j, $listeEtudiants[$indexEtudiantCourant]->getTauxInvalidite())
                ->setCellValue('P'.$j, $listeEtudiants[$indexEtudiantCourant]->getSuivi())
                ->setCellValue('Q'.$j, $listeEtudiants[$indexEtudiantCourant]->getDateMaj()->format('d/m/Y'))
                ->setCellValue('R'.$j, $listeEtudiants[$indexEtudiantCourant]->getDescriptifComplementaire());
            
            //informations mdph
            $phpExcelObject
                ->setActiveSheetIndex(0)
                ->setCellValue('S'.$j, $listeEtudiants[$indexEtudiantCourant]->getMdph()->getReconnaissanceMdph())
                ->setCellValue('T'.$j, $listeEtudiants[$indexEtudiantCourant]->getMdph()->getDepartementMdph());
            
            //informations formation étudiant        
            foreach($listeEtudiants[$indexEtudiantCourant]->getEtudiant()->getListEtudiantFormation() as $etudiantFormation)
            {
                //est ce que la boucle a déjà eu lieu ? si oui il faut écrire une ligne plus bas pour ne pas effacer
                //les informations déjà présentes
                if($bool==true){ $j++; }
                else{ $bool=true;}
                   
                    $phpExcelObject
                        ->setActiveSheetIndex(0)
                        ->setCellValue('U'.$j, $etudiantFormation->getAnneeScolaire())
                        ->setCellValue('V'.$j, $etudiantFormation->getFormation()->getEtablissement())
                        ->setCellValue('W'.$j, $etudiantFormation->getFormation()->getComposante())
                        ->setCellValue('X'.$j, $etudiantFormation->getFormation()->getDiplome())
                        ->setCellValue('Y'.$j, $etudiantFormation->getFormation()->getAnneeEtude())
                        ->setCellValue('Z'.$j, $etudiantFormation->getFormation()->getFiliere())  
                        ->setCellValue('AA'.$j, $etudiantFormation->getFormation()->getCycle());
                   
            }
            $bool=false;
            
            //informations handicap   
            foreach($listeEtudiants[$indexEtudiantCourant]->getHandicap() as $handicap)
            {
                //est ce que la boucle a déjà eu lieu ? si oui il faut écrire une ligne plus bas pour ne pas effacer
                //les informations déjà présentes
                if($bool==true){ $j++; }
                else{ $bool=true;}
                   
                    $phpExcelObject
                        ->setActiveSheetIndex(0)
                        ->setCellValue('AB'.$j, $handicap->getNomHandicap());
            }
            $bool=false;
            
            //informations aide examen
            foreach($listeEtudiants[$indexEtudiantCourant]->getDatesAideExamen() as $datesAideExamen)
            {
                //est ce que la boucle a déjà eu lieu ? si oui il faut écrire une ligne plus bas pour ne pas effacer
                //les informations déjà présentes
                if($bool==true){ $j++; }
                else{ $bool=true;}
                   
                if(!empty($datesAideExamen->getDateFin()))
                {
                    $dateFin = $datesAideExamen->getDateFin()->format('d/m/Y');
                }
                else
                {
                    $dateFin = "";
                }
                    $phpExcelObject
                        ->setActiveSheetIndex(0)
                        ->setCellValue('AC'.$j, $datesAideExamen->getDateDebut()->format('d/m/Y'))
                        ->setCellValue('AD'.$j, $dateFin)
                        ->setCellValue('AE'.$j, $datesAideExamen->getAideExamen()->getAmenagementExamens())
                        ->setCellValue('AF'.$j, $datesAideExamen->getAideExamen()->getTempsMajore())
                        ->setCellValue('AG'.$j, $datesAideExamen->getAideExamen()->getAutresMesures())
                        ->setCellValue('AH'.$j, $datesAideExamen->getAideExamen()->getDelocalisationExamen())
                        ->setCellValue('AI'.$j, $datesAideExamen->getAideExamen()->getDateValidite()->format('d/m/Y'))
                        ->setCellValue('AJ'.$j, $datesAideExamen->getAideExamen()->getDureeAvisMedical());
                   
            }
            $bool=false;
            
            $j++;
            $i = $j;
        }
        
        $phpExcelObject->getActiveSheet()->setTitle('Simple');
            // Set active sheet index to the first sheet, so Excel opens this as the first sheet
        $phpExcelObject->setActiveSheetIndex(0);
               // create the writer
        $writer = $this->get('phpexcel')->createWriter($phpExcelObject, 'Excel5');
        // create the response
        $response = $this->get('phpexcel')->createStreamedResponse($writer);
        // adding headers
        $response->headers->set('Content-Type', 'text/vnd.ms-excel; charset=utf-8');
        $response->headers->set('Content-Disposition', 'attachment;filename=bdd.xls');
        $response->headers->set('Pragma', 'public');
        $response->headers->set('Cache-Control', 'maxage=1');
        
        return $response;
        
    }
    
    
    
    /* =======================================================================*/
    /* =======================================================================*/
    /* =======================================================================*/
    
    
    /**
     * Permet l'importation de fichiers excel
     * @return Response
     */
    public function importExcelAction() {
        $request = Request::createFromGlobals();

        $uploadedFile = $request->files->get('fichierExcel');
        $sizeMax = $request->get('MAX_FILE_SIZE');
        $nbLignes = $request->get('nbLignes');
        $extension_upload = null;
        $extensions_valides = array('xls');
        //Si l'utilisateur est bien connecté
        if (!empty($uploadedFile) && !empty($sizeMax) && !empty($nbLignes)) {
            //Si le fichier existe
            //Si la taille du fichier est inférieur à 1Mo
            if ($uploadedFile->getClientSize() < $sizeMax) {
                //Si l'extension du fichier est bien valide                
                $extension_upload = $uploadedFile->guessExtension();                
                if (in_array($extension_upload, $extensions_valides)) {
                    //Génération d'un nom aléatoire et on déplace le fichier dans
                    //le répertoire local excel
                    $nom = md5(uniqid(rand(), true));
                    $dest = "./Excel/" . $nom . '.' . $extension_upload;
                    $resultat = move_uploaded_file($uploadedFile, $dest);
                    
                    if ($resultat) {                        
                        $content = $this->lireDonneesExcel($dest,$nbLignes);                        
                        unlink($dest);
                        return $content;
                    } else {
                        return new Response('Erreur chargement fichier');
                    }
                }
                else {
                    return new Response('Fichier d\'extension .xls nécessaire');
                }
            }
            else {
                return new Response('Taille maximale du fichier à 1Mo');
            }            
        }
        return new Response('Le fichier ou le nombre de ligne n\'a pas été renseigné');
    }

    
    /**
     * Lit les donnees d'un fichier excel passé en argument
     * @param type $fichier
     * @param type $nbLignesReel
     * @return Response
     */
    private function lireDonneesExcel($fichier, $nbLignesReel) {
        $objPHPExcel = \PHPExcel_IOFactory::load($fichier);

        //On récupère les dimensions du fichier excel
        $sheet = $objPHPExcel->getSheet(0);
        $highestRow = $sheet->getHighestRow();
        $highestColumn = $sheet->getHighestColumn();
        //nombre de colonnes réellement présentes
        $nbColonnesReelles= "AF";
        
        $tabExcel = array();
        
        //On vérifie si les données sont possibles (pas trop de lignes / colonnes)
        if ($this->verifierLignes($nbLignesReel, $highestRow) && $this->verifierColonnes($nbColonnesReelles, $highestColumn)) {
            //Lecture de la feuille excel
            for ($row = 2; $row <= $nbLignesReel; $row++) {
                $rowData = $sheet->rangeToArray('A' . $row . ':' . $nbColonnesReelles . $row, NULL, TRUE, FALSE);
                $this->ajouterLigne($rowData);
            }            
        } else {
            return new Response("fichier excel non conforme : nombre de lignes ou colonnes incorrect<br/>"
                    . "Nb lignes max = " . $highestRow . " // nb lignes indiquées = " . $nbLignesReel . "<br/>"
                    . "Nb colonnes max = " . $highestColumn . " // nb colonnes indiquées = " . $nbColonnesReelles . "<br/>");
        }
        return $this->render('SUHGestionBundle:AffichageEtudiants:accueil.html.twig',array(
            'afficheExcelVue' => true,
        ));
    }

    /**
     * Se charge d'ajouter un tableau représentant une ligne du fichier Excel, dans la BDD
     * @param type $ligne
     */
    private function ajouterLigne($rowData)
    {
        $manager = $this->getDoctrine()->getManager();
        $dateCourante = new \DateTime('now'); 
        
        $dateNaissance = null;        
        if(!empty($rowData[0][3]))
        {
            $dateNaissance = $rowData[0][3];            
            $dateNaissanceString = \PHPExcel_Style_NumberFormat::toFormattedString($dateNaissance, "DD-MM-YYYY");
            $dateNaissance = \DateTime::createFromFormat('d-m-Y',$dateNaissanceString);
            if($dateNaissance==false)
            {
                $dateNaissance = \DateTime::createFromFormat('d/m/Y',$dateNaissanceString);
                if($dateNaissance==false)
                {
                    $dateNaissance=null;
                }                
            }
        }
        
        $dateValidite = null;     
        if(!empty($rowData[0][22]))
        {
            $dateValidite = $rowData[0][22];
            $dateValiditeString = \PHPExcel_Style_NumberFormat::toFormattedString($dateValidite, "DD-MM-YYYY");
            $dateValidite = \DateTime::createFromFormat('d-m-Y',$dateValiditeString);
            if($dateValidite==false)
            {
                $dateValidite = \DateTime::createFromFormat('d/m/Y',$dateNaissanceString);
                if($dateValidite==false)
                {
                    $dateValidite=null;
                }  
            }
        }
        
        $dateMiseAJour = null;
        if(!empty($rowData[0][31]))
        {
            $dateMiseAJour = $rowData[0][31];
            $dateMiseAJourString = \PHPExcel_Style_NumberFormat::toFormattedString($dateMiseAJour, "DD-MM-YYYY");
            $dateMiseAJour = \DateTime::createFromFormat('d-m-Y',$dateMiseAJourString);
            if($dateMiseAJour==false)
            {
                $dateMiseAJour = \DateTime::createFromFormat('d/m/Y',$dateNaissanceString);
                if($dateMiseAJour==false)
                {
                    $dateMiseAJour=null;
                }
            }
        }
        
         // ===== ETUDIANT 
        
        $etudiant= new \SUH\GestionBundle\Entity\Etudiant(                
                $rowData[0][0], //nom
                $rowData[0][1], //prenom
                $dateNaissance, //dateNaissance
                $rowData[0][6], //mail
                $rowData[0][8], //adresse familiale
                $rowData[0][9], //adresse étudiante
                $rowData[0][7] //téléphone
            );
        //return new Response(var_dump($dateNaissance->format('Y-m-d')));
        $manager->persist($etudiant);
        
         // ===== FORMATION
        $formation=new \SUH\GestionBundle\Entity\Formation(
                $rowData[0][12], //diplome
                $rowData[0][11], //composante
                $rowData[0][14], //filiere
                $rowData[0][15], //cycle
                $rowData[0][10], //etablissement
                $rowData[0][13] //annee d'étude
            );
        $manager->persist($formation);
        
         // ===== MDPH
        if(empty($rowData[0][25])){$reconnaissanceMdph=false;}else{$reconnaissanceMdph=true;}
        $mdph=new \SUH\GestionBundle\Entity\Mdph(
                $reconnaissanceMdph, //reconnaissance mdph
                $rowData[0][26] //département mdph
            );
        $manager->persist($mdph);
        
         // ===== HANDICAP
        $handicap=new \SUH\GestionBundle\Entity\Handicap(
                $rowData[0][16] //nom handicap
            );
        $manager->persist($handicap);
        
         // ===== AIDE EXAMEN
        if(empty($rowData[0][18])){$tempsMajore=false;}else{$tempsMajore=true;}
        if(empty($rowData[0][19])){$autresMesures=false;}else{$autresMesures=true;}
        $aideExamen=new \SUH\GestionBundle\Entity\AideExamen(
                $rowData[0][20], //amenagement examen (aménagement épreuve dans le fichier, ce n'est pas le booléen)
                $tempsMajore, //temps majoré
                $autresMesures, //autres mesures
                $rowData[0][21], //delocalisation examen
                $dateValidite, //date validité
                $rowData[0][23] //durée avis médical
            );
        $manager->persist($aideExamen);
        
    $manager->flush();
    
    /* ====================================================================== */
    /* Tables avec jointures */
   
     // ===== ETUDIANT HANDICAPE
    if(empty($rowData[0][28])){$rqth=false;}else{$rqth=true;}
    if(empty($rowData[0][29])){$notificationSavs=false;}else{$notificationSavs=true;}
        $etudiantHandicape=new \SUH\GestionBundle\Entity\EtudiantHandicape(
                $etudiant,
                $rowData[0][5], //qhandi
                $rqth, //rqth
                $notificationSavs, //notificationSavs
                $rowData[0][24], //amenagementEtude
                $rowData[0][27], //tauxInvalidite
                $rowData[0][30], //suivi
                $dateMiseAJour, //dateMaj
                "",
                $mdph, //mdph
                $handicap //handicap
            );    
            $manager->persist($etudiantHandicape);
    
    $manager->flush();
    
     // ===== DATES AIDE EXAMEN
              
        $datesAideExamen=new \SUH\GestionBundle\Entity\DatesAideExamen(
                $etudiantHandicape,
                $aideExamen,
                $dateCourante,
                null
        );
        $manager->persist($datesAideExamen);
        
        // ===== ETUDIANT FORMATION
        $etudiantFormation=new \SUH\GestionBundle\Entity\EtudiantFormation(
                $etudiant,
                $dateCourante->format('Y'), //annee scolaire
                $formation
                );
        $manager->persist($etudiantFormation);
        
    $manager->flush();
    }
    
    /**
     * Vérifie si le nombre de lignes indiquées n'est pas plus important que la ligne la plus grande
     * @param type $nbLignes
     * @param type $highestRow
     * @return boolean
     */
    private function verifierLignes($nbLignes, $highestRow)
    {
        if($nbLignes > $highestRow )
        {
            return false;
        }        
        return true;
    }
    
    /**
     * Vérifie si le nombre de colonnes indiquées n'est pas plus important que la colonne la plus grande
     * @param type $nbColonnes
     * @param type $highestColumn
     * @return boolean
     */
    private function verifierColonnes($nbColonnes, $highestColumn)
    {
        if(strlen($nbColonnes) > strlen($highestColumn))
        {
            return false;
        }
        elseif(strlen($nbColonnes) == strlen($highestColumn))
        {
            if(strcmp($nbColonnes,$highestColumn) > 0)
            {
                return false;
            }   
        }
        return true;
    }
    
}
