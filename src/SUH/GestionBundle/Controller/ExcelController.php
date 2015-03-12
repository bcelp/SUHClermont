<?php

namespace SUH\GestionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class ExcelController extends Controller
{    
    public function importExcelAction()
    {
        /* IMPORTATION */
        
         /*$success = fopen("../../../../../Excel/file.xls", "w");
        if($success)
        {
            $objet = \PHPExcel_IOFactory::createReader('Excel5');

            $excel = $objet->load('../../../../../Excel/file.xls');

            $sheet = $excel->getSheet(0);

            $sheet->setCellValue('A50', 'MaitrePylos');

            $writer = \PHPExcel_IOFactory::createWriter($excel);
            
            $writer->save('../../../../../Excel/file.xls');
        }*/
        
        
        return new Response();
    }
    
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
                if($bool==true)
                   {
                       $j++;
                   }
                   else
                   {
                       $bool=true;
                   }
                   
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
                if($bool==true)
                   {
                       $j++;
                   }
                   else
                   {
                       $bool=true;
                   }
                   
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
                if($bool==true)
                   {
                       $j++;
                   }
                   else
                   {
                       $bool=true;
                   }
                   
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
}
