<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes = array(
        'suh_gestion_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SUH\\GestionBundle\\Controller\\AffichageController::AfficherAccueilAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'suh_get_etudiant' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'SUH\\GestionBundle\\Controller\\AffichageController::AfficherAccueilEtudiantAction',  ),  2 =>   array (    'id' => '[0-9]+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[0-9]+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/get',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'suh_get_etudiant_nomEtPrenom' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SUH\\GestionBundle\\Controller\\AffichageController::AfficherAccueilEtudiantRechercheNomOuPrenomAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/by',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'suh_gestion_rechercheAvancee' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SUH\\GestionBundle\\Controller\\AffichageController::AfficherRechercheAvanceeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/rechercheAvancee',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'suh_gestion_resultatAvancee' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SUH\\GestionBundle\\Controller\\AffichageController::AfficherResultatRechercheAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resultatAvancee',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'suh_import_export_page' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SUH\\GestionBundle\\Controller\\AffichageController::afficheImportExportPageAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/importExportExcel',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'suh_import_page' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SUH\\GestionBundle\\Controller\\ExcelController::importExcelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/importExcel',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'suh_export_page' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SUH\\GestionBundle\\Controller\\ExcelController::exportExcelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exportExcel',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'suh_ajout_etudiant' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'SUH\\GestionBundle\\Controller\\GestionEtudiantController::ajoutEtudiantAction',  ),  2 =>   array (    'id' => '[0-9]+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[0-9]+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/ajouter',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'suh_modification_etudiant' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'SUH\\GestionBundle\\Controller\\GestionEtudiantController::modificationEtudiantAction',  ),  2 =>   array (    'id' => '[0-9]+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[0-9]+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/modifier',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'suh_suppression_etudiant' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'SUH\\GestionBundle\\Controller\\GestionEtudiantController::suppressionEtudiantAction',  ),  2 =>   array (    'id' => '[0-9]+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[0-9]+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/supprimer',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'suh_gestion_utilisateur_page' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SUH\\GestionBundle\\Controller\\AffichageController::afficheGestionUtilisateurPageAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/gestionUtilisateurs',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'suh_ajouter_utilisateur' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SUH\\GestionBundle\\Controller\\GestionCompteUtilisateurController::ajouterCompteUtilisateurAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ajouterCompteUtilisateur',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'suh_supprimer_utilisateur' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SUH\\GestionBundle\\Controller\\GestionCompteUtilisateurController::supprimerCompteUtilisateurAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/supprimerCompteUtilisateur',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'suh_gestion_addEtudiant' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SUH\\GestionBundle\\Controller\\GestionEtudiantController::addInfosEtudiantAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/add',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'suh_gestion_addEtudiant_Etape2' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SUH\\GestionBundle\\Controller\\GestionEtudiantController::addInfosEtudiantEtape2Action',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/add2',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'suh_gestion_addEtudiant_Etape2bis' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SUH\\GestionBundle\\Controller\\GestionEtudiantController::addInfosEtudiantEtape2bisAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/add2bis',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'suh_gestion_addEtudiant_Etape3' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SUH\\GestionBundle\\Controller\\GestionEtudiantController::addInfosEtudiantEtape3Action',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/add3',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'suh_gestion_addEtudiant_Etape4' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SUH\\GestionBundle\\Controller\\GestionEtudiantController::addInfosEtudiantEtape4Action',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/add4',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'suh_gestion_addEtudiant_Etape4bis' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SUH\\GestionBundle\\Controller\\GestionEtudiantController::addInfosEtudiantEtape4bisAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/add4bis',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'suh_gestion_addEtudiant_addInfosEtudiantIntermediaire' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SUH\\GestionBundle\\Controller\\GestionEtudiantController::addInfosEtudiantIntermediaireAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/addIntermediaire',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'suh_gestion_addEtudiant_Etape5' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SUH\\GestionBundle\\Controller\\GestionEtudiantController::addInfosEtudiantEtape5Action',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/add5',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'suh_gestion_addEtudiant_Etape6' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SUH\\GestionBundle\\Controller\\GestionEtudiantController::addInfosEtudiantEtape6Action',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/add6',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'suh_gestion_addEtudiant_Etape6bis' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SUH\\GestionBundle\\Controller\\GestionEtudiantController::addInfosEtudiantEtape6bisAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/add6bis',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'suh_gestion_BackStep1' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SUH\\GestionBundle\\Controller\\GestionEtudiantController::BackStep1Action',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/backStep1',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'suh_gestion_BackStep2' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SUH\\GestionBundle\\Controller\\GestionEtudiantController::BackStep2Action',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/backStep2',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'suh_gestion_modifEtudiant_infos' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SUH\\GestionBundle\\Controller\\GestionEtudiantController::modifInfosAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/modifInfos',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'suh_gestion_modifEtudiant_anneeScolaire' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SUH\\GestionBundle\\Controller\\GestionEtudiantController::modifAnneeScolaireAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/anneeScolaire',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'suh_gestion_modifEtudiant_formation' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SUH\\GestionBundle\\Controller\\GestionEtudiantController::modifFormationAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/formation',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'suh_gestion_modifEtudiant_DatesAideExamen' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SUH\\GestionBundle\\Controller\\GestionEtudiantController::modifDatesAideExamenAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/DatesAideExamen',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'suh_gestion_modifEtudiant_AideExamen' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SUH\\GestionBundle\\Controller\\GestionEtudiantController::modifAideExamenAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/AideExamen',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'suh_gestion_modifEtudiant_mdph' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SUH\\GestionBundle\\Controller\\GestionEtudiantController::modifmdphAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/mdph',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'suh_gestion_modifEtudiant_handicap' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SUH\\GestionBundle\\Controller\\GestionEtudiantController::modifhandicapAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/handicap',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'suh_gestion_modifEtudiant_NomHandicap' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SUH\\GestionBundle\\Controller\\GestionEtudiantController::modifNomHandicapAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/NomHandicap',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'suh_gestion_modifEtudiant_AddNewhandicap' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SUH\\GestionBundle\\Controller\\GestionEtudiantController::addNewHandicapAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/AddNewHandicap',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'suh_gestion_modifEtudiant_AddNewFormation' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SUH\\GestionBundle\\Controller\\GestionEtudiantController::addNewFormationAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/AddNewFormation',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'suh_gestion_addNewFormation_Etape2' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SUH\\GestionBundle\\Controller\\GestionEtudiantController::addNewFormationEtape2Action',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/AddNewFormation2',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'suh_gestion_modifEtudiant_AddNewAideExamen' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SUH\\GestionBundle\\Controller\\GestionEtudiantController::addNewAideExamenAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/AddNewAideExamen',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'suh_gestion_modifEtudiant_AddNewAideExamenEtape2' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SUH\\GestionBundle\\Controller\\GestionEtudiantController::addNewAideExamenEtape2Action',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/AddNewAideExamen2',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'suh_suppression_handicap' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'SUH\\GestionBundle\\Controller\\GestionEtudiantController::supprimerHandicapAction',  ),  2 =>   array (    'id' => '[0-9]+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[0-9]+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/supprimerHandicap',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'suh_suppression_etudiantFormation' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'SUH\\GestionBundle\\Controller\\GestionEtudiantController::supprimerFormationAction',  ),  2 =>   array (    'id' => '[0-9]+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[0-9]+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/supprimerFormation',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'suh_suppression_datesAideExamen' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'SUH\\GestionBundle\\Controller\\GestionEtudiantController::supprimerAideExamenAction',  ),  2 =>   array (    'id' => '[0-9]+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[0-9]+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/supprimerAideExamen',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SUH\\ConnexionBundle\\Controller\\ConnexionController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'login_check' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login_check',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'logout' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
