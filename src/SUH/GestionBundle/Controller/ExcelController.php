<?php

namespace SUH\GestionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use PHPExcelClasses\PHPExcel;

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
        
        $phpExcelObject->setActiveSheetIndex(0);
        //nombre d'étudiants
        $i=1;
        //compteur formation/mdph/autres par étudiant
        $j=1;
        for($nbEtudiants=0;$nbEtudiants<count($listeEtudiants);$nbEtudiants++)
        {
            //Informations étudiant
            $phpExcelObject
                ->setCellValue('A'+$i, $listeEtudiants[$i]->getNomEtudiant())
                ->setCellValue('B'+$i, $listeEtudiants[$i]->getPrenomEtudiant())
                ->setCellValue('C'+$i, $listeEtudiants[$i]->getId())
                ->setCellValue('D'+$i, $listeEtudiants[$i]->getEtudiant()->getDateNaissance())
                ->setCellValue('E'+$i, $listeEtudiants[$i]->getEtudiant()->getAge())                      
                ->setCellValue('G'+$i, $listeEtudiants[$i]->getEtudiant()->getAdresseMail())
                ->setCellValue('H'+$i, $listeEtudiants[$i]->getEtudiant()->getTelephone())
                ->setCellValue('I'+$i, $listeEtudiants[$i]->getEtudiant()->getAdresseFamiliale())
                ->setCellValue('J'+$i, $listeEtudiants[$i]->getEtudiant()->getAdresseEtudiante());
            
            //informations étudiant en situation de handicap
            $phpExcelObject
                ->setCellValue('K'+$i, $listeEtudiants[$i]->getNomEtudiant())
                ->setCellValue('L'+$i, $listeEtudiants[$i]->getPrenomEtudiant())
                ->setCellValue('M'+$i, $listeEtudiants[$i]->getId())
                ->setCellValue('N'+$i, $listeEtudiants[$i]->getEtudiant()->getDateNaissance())
                ->setCellValue('O'+$i, $listeEtudiants[$i]->getEtudiant()->getAge())                      
                ->setCellValue('P'+$i, $listeEtudiants[$i]->getEtudiant()->getAdresseMail())
                ->setCellValue('Q'+$i, $listeEtudiants[$i]->getEtudiant()->getTelephone())
                ->setCellValue('R'+$i, $listeEtudiants[$i]->getEtudiant()->getAdresseFamiliale())
                ->setCellValue('S'+$i, $listeEtudiants[$i]->getEtudiant()->getAdresseEtudiante());
            
                $j = $i;
                foreach($listeEtudiants[$i]->getEtudiant()->getListEtudiant() as $etudiantFormation)
                {
                    $phpExcelObject
                        ->setCellValue('K'+$j, $etudiantFormation->getFormation()->getEtablissement())
                        ->setCellValue('L'+$j, $etudiantFormation->getFormation()->getComposante())
                        ->setCellValue('M'+$j, $etudiantFormation->getFormation()->getDiplome())
                        ->setCellValue('N'+$j, $etudiantFormation->getFormation()->getAnneeEtude())
                        ->setCellValue('O'+$j, $etudiantFormation->getFormation()->getFiliere())  
                        ->setCellValue('O'+$j, $etudiantFormation->getFormation()->getCycle());
                    $j++;
                }
                foreach($listeEtudiants[$i]->getHandicap() as $handicap)
                {
                    $phpExcelObject
                        ->setCellValue('K'+$j, $handicap->getNom());
                    $j++;
                }
                foreach($listeEtudiants[$i]->getHandicap() as $handicap)
                {
                    $phpExcelObject
                        ->setCellValue('K'+$j, $handicap->getNom());
                    $j++;
                }
                
                
                
                $i = $j;
        }
        
        
        /*for($i=0;$i<count($listeEtudiants);$i++)
        {
            $phpExcelObject
                ->setCellValue('A'+$i, $listeEtudiants[$i]->getNomEtudiant())
                ->setCellValue('B'+$i, $listeEtudiants[$i]->getPrenomEtudiant())
                ->setCellValue('C'+$i, $listeEtudiants[$i]->getId())
                ->setCellValue('D'+$i, $listeEtudiants[$i]->getEtudiant()->getDateNaissance())
                ->setCellValue('E'+$i, $listeEtudiants[$i]->getEtudiant()->getAge())
                ->setCellValue('F'+$i, $listeEtudiants[$i]->getMdph()->getQhandi())      
                ->setCellValue('G'+$i, $listeEtudiants[$i]->getEtudiant()->getAdresseMail())
                ->setCellValue('H'+$i, $listeEtudiants[$i]->getEtudiant()->getTelephone())
                ->setCellValue('I'+$i, $listeEtudiants[$i]->getEtudiant()->getAdresseFamiliale())
                ->setCellValue('J'+$i, $listeEtudiants[$i]->getEtudiant()->getAdresseEtudiante());
                for($j=0;$j<count($listeEtudiants[$i]->getEtudiant()->getListEtudiant());$j++)
                {
                    
                }
                $phpExcelObject->setCellValue('K'+$i, $listeEtudiants[$i]->getEtudiant()->getListEtudiant())
                ->setCellValue('L'+$i, $listeEtudiants[$i]->)
                ->setCellValue('M'+$i, $listeEtudiants[$i]->)
                ->setCellValue('N'+$i, $listeEtudiants[$i]->)
                ->setCellValue('O'+$i, $listeEtudiants[$i]->)    
                ->setCellValue('P'+$i, $listeEtudiants[$i]->)
                ->setCellValue('Q'+$i, $listeEtudiants[$i]->)
                ->setCellValue('R'+$i, $listeEtudiants[$i]->)
                ->setCellValue('S'+$i, $listeEtudiants[$i]->)
                ->setCellValue('T'+$i, $listeEtudiants[$i]->)
                ->setCellValue('U'+$i, $listeEtudiants[$i]->)
                ->setCellValue('V'+$i, $listeEtudiants[$i]->)
                ->setCellValue('W'+$i, $listeEtudiants[$i]->)
                ->setCellValue('X'+$i, $listeEtudiants[$i]->)        
                ->setCellValue('Y'+$i, $listeEtudiants[$i]->)
                ->setCellValue('Z'+$i, $listeEtudiants[$i]->)
                ->setCellValue('AA'+$i, $listeEtudiants[$i]->)       
                ->setCellValue('AB'+$i, $listeEtudiants[$i]->)
                ->setCellValue('AC'+$i, $listeEtudiants[$i]->)       
                ->setCellValue('AD'+$i, $listeEtudiants[$i]->)        
                ->setCellValue('AE'+$i, $listeEtudiants[$i]->)      
                ->setCellValue('AF'+$i, $listeEtudiants[$i]->);      
        }  */
        
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
        
        
        $affichageController = new AffichageController();
        $affichageController->afficheImportExportPageAction();
        /*return $this->render('SUHGestionBundle:AffichageEtudiants:accueil.html.twig',array(
            'listeEtudiantsHandicapes'=>null,
            'afficheExcelVue' => true,
            'tab'=>$listeEtudiants,
        ));*/
    }
}
