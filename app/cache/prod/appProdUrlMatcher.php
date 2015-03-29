<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // suh_gestion_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'suh_gestion_homepage');
            }

            return array (  '_controller' => 'SUH\\GestionBundle\\Controller\\AffichageController::AfficherAccueilAction',  '_route' => 'suh_gestion_homepage',);
        }

        // suh_get_etudiant
        if (0 === strpos($pathinfo, '/get') && preg_match('#^/get/(?P<id>[0-9]+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'suh_get_etudiant')), array (  '_controller' => 'SUH\\GestionBundle\\Controller\\AffichageController::AfficherAccueilEtudiantAction',));
        }

        // suh_get_etudiant_nomEtPrenom
        if ($pathinfo === '/by') {
            return array (  '_controller' => 'SUH\\GestionBundle\\Controller\\AffichageController::AfficherAccueilEtudiantRechercheNomOuPrenomAction',  '_route' => 'suh_get_etudiant_nomEtPrenom',);
        }

        if (0 === strpos($pathinfo, '/re')) {
            // suh_gestion_rechercheAvancee
            if ($pathinfo === '/rechercheAvancee') {
                return array (  '_controller' => 'SUH\\GestionBundle\\Controller\\AffichageController::AfficherRechercheAvanceeAction',  '_route' => 'suh_gestion_rechercheAvancee',);
            }

            // suh_gestion_resultatAvancee
            if ($pathinfo === '/resultatAvancee') {
                return array (  '_controller' => 'SUH\\GestionBundle\\Controller\\AffichageController::AfficherResultatRechercheAction',  '_route' => 'suh_gestion_resultatAvancee',);
            }

        }

        if (0 === strpos($pathinfo, '/importEx')) {
            // suh_import_export_page
            if ($pathinfo === '/importExportExcel') {
                return array (  '_controller' => 'SUH\\GestionBundle\\Controller\\AffichageController::afficheImportExportPageAction',  '_route' => 'suh_import_export_page',);
            }

            // suh_import_page
            if ($pathinfo === '/importExcel') {
                return array (  '_controller' => 'SUH\\GestionBundle\\Controller\\ExcelController::importExcelAction',  '_route' => 'suh_import_page',);
            }

        }

        // suh_export_page
        if ($pathinfo === '/exportExcel') {
            return array (  '_controller' => 'SUH\\GestionBundle\\Controller\\ExcelController::exportExcelAction',  '_route' => 'suh_export_page',);
        }

        // suh_ajout_etudiant
        if (0 === strpos($pathinfo, '/ajouter') && preg_match('#^/ajouter/(?P<id>[0-9]+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'suh_ajout_etudiant')), array (  '_controller' => 'SUH\\GestionBundle\\Controller\\GestionEtudiantController::ajoutEtudiantAction',));
        }

        // suh_modification_etudiant
        if (0 === strpos($pathinfo, '/modifier') && preg_match('#^/modifier/(?P<id>[0-9]+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'suh_modification_etudiant')), array (  '_controller' => 'SUH\\GestionBundle\\Controller\\GestionEtudiantController::modificationEtudiantAction',));
        }

        // suh_suppression_etudiant
        if (0 === strpos($pathinfo, '/supprimer') && preg_match('#^/supprimer/(?P<id>[0-9]+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'suh_suppression_etudiant')), array (  '_controller' => 'SUH\\GestionBundle\\Controller\\GestionEtudiantController::suppressionEtudiantAction',));
        }

        // suh_gestion_utilisateur_page
        if ($pathinfo === '/gestionUtilisateurs') {
            return array (  '_controller' => 'SUH\\GestionBundle\\Controller\\AffichageController::afficheGestionUtilisateurPageAction',  '_route' => 'suh_gestion_utilisateur_page',);
        }

        // suh_ajouter_utilisateur
        if ($pathinfo === '/ajouterCompteUtilisateur') {
            return array (  '_controller' => 'SUH\\GestionBundle\\Controller\\GestionCompteUtilisateurController::ajouterCompteUtilisateurAction',  '_route' => 'suh_ajouter_utilisateur',);
        }

        // suh_supprimer_utilisateur
        if ($pathinfo === '/supprimerCompteUtilisateur') {
            return array (  '_controller' => 'SUH\\GestionBundle\\Controller\\GestionCompteUtilisateurController::supprimerCompteUtilisateurAction',  '_route' => 'suh_supprimer_utilisateur',);
        }

        if (0 === strpos($pathinfo, '/add')) {
            // suh_gestion_addEtudiant
            if ($pathinfo === '/add') {
                return array (  '_controller' => 'SUH\\GestionBundle\\Controller\\GestionEtudiantController::addInfosEtudiantAction',  '_route' => 'suh_gestion_addEtudiant',);
            }

            if (0 === strpos($pathinfo, '/add2')) {
                // suh_gestion_addEtudiant_Etape2
                if ($pathinfo === '/add2') {
                    return array (  '_controller' => 'SUH\\GestionBundle\\Controller\\GestionEtudiantController::addInfosEtudiantEtape2Action',  '_route' => 'suh_gestion_addEtudiant_Etape2',);
                }

                // suh_gestion_addEtudiant_Etape2bis
                if ($pathinfo === '/add2bis') {
                    return array (  '_controller' => 'SUH\\GestionBundle\\Controller\\GestionEtudiantController::addInfosEtudiantEtape2bisAction',  '_route' => 'suh_gestion_addEtudiant_Etape2bis',);
                }

            }

            // suh_gestion_addEtudiant_Etape3
            if ($pathinfo === '/add3') {
                return array (  '_controller' => 'SUH\\GestionBundle\\Controller\\GestionEtudiantController::addInfosEtudiantEtape3Action',  '_route' => 'suh_gestion_addEtudiant_Etape3',);
            }

            if (0 === strpos($pathinfo, '/add4')) {
                // suh_gestion_addEtudiant_Etape4
                if ($pathinfo === '/add4') {
                    return array (  '_controller' => 'SUH\\GestionBundle\\Controller\\GestionEtudiantController::addInfosEtudiantEtape4Action',  '_route' => 'suh_gestion_addEtudiant_Etape4',);
                }

                // suh_gestion_addEtudiant_Etape4bis
                if ($pathinfo === '/add4bis') {
                    return array (  '_controller' => 'SUH\\GestionBundle\\Controller\\GestionEtudiantController::addInfosEtudiantEtape4bisAction',  '_route' => 'suh_gestion_addEtudiant_Etape4bis',);
                }

            }

            // suh_gestion_addEtudiant_addInfosEtudiantIntermediaire
            if ($pathinfo === '/addIntermediaire') {
                return array (  '_controller' => 'SUH\\GestionBundle\\Controller\\GestionEtudiantController::addInfosEtudiantIntermediaireAction',  '_route' => 'suh_gestion_addEtudiant_addInfosEtudiantIntermediaire',);
            }

            // suh_gestion_addEtudiant_Etape5
            if ($pathinfo === '/add5') {
                return array (  '_controller' => 'SUH\\GestionBundle\\Controller\\GestionEtudiantController::addInfosEtudiantEtape5Action',  '_route' => 'suh_gestion_addEtudiant_Etape5',);
            }

            if (0 === strpos($pathinfo, '/add6')) {
                // suh_gestion_addEtudiant_Etape6
                if ($pathinfo === '/add6') {
                    return array (  '_controller' => 'SUH\\GestionBundle\\Controller\\GestionEtudiantController::addInfosEtudiantEtape6Action',  '_route' => 'suh_gestion_addEtudiant_Etape6',);
                }

                // suh_gestion_addEtudiant_Etape6bis
                if ($pathinfo === '/add6bis') {
                    return array (  '_controller' => 'SUH\\GestionBundle\\Controller\\GestionEtudiantController::addInfosEtudiantEtape6bisAction',  '_route' => 'suh_gestion_addEtudiant_Etape6bis',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/backStep')) {
            // suh_gestion_BackStep1
            if ($pathinfo === '/backStep1') {
                return array (  '_controller' => 'SUH\\GestionBundle\\Controller\\GestionEtudiantController::BackStep1Action',  '_route' => 'suh_gestion_BackStep1',);
            }

            // suh_gestion_BackStep2
            if ($pathinfo === '/backStep2') {
                return array (  '_controller' => 'SUH\\GestionBundle\\Controller\\GestionEtudiantController::BackStep2Action',  '_route' => 'suh_gestion_BackStep2',);
            }

        }

        // suh_gestion_modifEtudiant_infos
        if ($pathinfo === '/modifInfos') {
            return array (  '_controller' => 'SUH\\GestionBundle\\Controller\\GestionEtudiantController::modifInfosAction',  '_route' => 'suh_gestion_modifEtudiant_infos',);
        }

        // suh_gestion_modifEtudiant_anneeScolaire
        if ($pathinfo === '/anneeScolaire') {
            return array (  '_controller' => 'SUH\\GestionBundle\\Controller\\GestionEtudiantController::modifAnneeScolaireAction',  '_route' => 'suh_gestion_modifEtudiant_anneeScolaire',);
        }

        // suh_gestion_modifEtudiant_formation
        if ($pathinfo === '/formation') {
            return array (  '_controller' => 'SUH\\GestionBundle\\Controller\\GestionEtudiantController::modifFormationAction',  '_route' => 'suh_gestion_modifEtudiant_formation',);
        }

        // suh_gestion_modifEtudiant_DatesAideExamen
        if ($pathinfo === '/DatesAideExamen') {
            return array (  '_controller' => 'SUH\\GestionBundle\\Controller\\GestionEtudiantController::modifDatesAideExamenAction',  '_route' => 'suh_gestion_modifEtudiant_DatesAideExamen',);
        }

        // suh_gestion_modifEtudiant_AideExamen
        if ($pathinfo === '/AideExamen') {
            return array (  '_controller' => 'SUH\\GestionBundle\\Controller\\GestionEtudiantController::modifAideExamenAction',  '_route' => 'suh_gestion_modifEtudiant_AideExamen',);
        }

        // suh_gestion_modifEtudiant_mdph
        if ($pathinfo === '/mdph') {
            return array (  '_controller' => 'SUH\\GestionBundle\\Controller\\GestionEtudiantController::modifmdphAction',  '_route' => 'suh_gestion_modifEtudiant_mdph',);
        }

        // suh_gestion_modifEtudiant_handicap
        if ($pathinfo === '/handicap') {
            return array (  '_controller' => 'SUH\\GestionBundle\\Controller\\GestionEtudiantController::modifhandicapAction',  '_route' => 'suh_gestion_modifEtudiant_handicap',);
        }

        // suh_gestion_modifEtudiant_NomHandicap
        if ($pathinfo === '/NomHandicap') {
            return array (  '_controller' => 'SUH\\GestionBundle\\Controller\\GestionEtudiantController::modifNomHandicapAction',  '_route' => 'suh_gestion_modifEtudiant_NomHandicap',);
        }

        if (0 === strpos($pathinfo, '/AddNew')) {
            // suh_gestion_modifEtudiant_AddNewhandicap
            if ($pathinfo === '/AddNewHandicap') {
                return array (  '_controller' => 'SUH\\GestionBundle\\Controller\\GestionEtudiantController::addNewHandicapAction',  '_route' => 'suh_gestion_modifEtudiant_AddNewhandicap',);
            }

            if (0 === strpos($pathinfo, '/AddNewFormation')) {
                // suh_gestion_modifEtudiant_AddNewFormation
                if ($pathinfo === '/AddNewFormation') {
                    return array (  '_controller' => 'SUH\\GestionBundle\\Controller\\GestionEtudiantController::addNewFormationAction',  '_route' => 'suh_gestion_modifEtudiant_AddNewFormation',);
                }

                // suh_gestion_addNewFormation_Etape2
                if ($pathinfo === '/AddNewFormation2') {
                    return array (  '_controller' => 'SUH\\GestionBundle\\Controller\\GestionEtudiantController::addNewFormationEtape2Action',  '_route' => 'suh_gestion_addNewFormation_Etape2',);
                }

            }

            if (0 === strpos($pathinfo, '/AddNewAideExamen')) {
                // suh_gestion_modifEtudiant_AddNewAideExamen
                if ($pathinfo === '/AddNewAideExamen') {
                    return array (  '_controller' => 'SUH\\GestionBundle\\Controller\\GestionEtudiantController::addNewAideExamenAction',  '_route' => 'suh_gestion_modifEtudiant_AddNewAideExamen',);
                }

                // suh_gestion_modifEtudiant_AddNewAideExamenEtape2
                if ($pathinfo === '/AddNewAideExamen2') {
                    return array (  '_controller' => 'SUH\\GestionBundle\\Controller\\GestionEtudiantController::addNewAideExamenEtape2Action',  '_route' => 'suh_gestion_modifEtudiant_AddNewAideExamenEtape2',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/supprimer')) {
            // suh_suppression_handicap
            if (0 === strpos($pathinfo, '/supprimerHandicap') && preg_match('#^/supprimerHandicap/(?P<id>[0-9]+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'suh_suppression_handicap')), array (  '_controller' => 'SUH\\GestionBundle\\Controller\\GestionEtudiantController::supprimerHandicapAction',));
            }

            // suh_suppression_etudiantFormation
            if (0 === strpos($pathinfo, '/supprimerFormation') && preg_match('#^/supprimerFormation/(?P<id>[0-9]+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'suh_suppression_etudiantFormation')), array (  '_controller' => 'SUH\\GestionBundle\\Controller\\GestionEtudiantController::supprimerFormationAction',));
            }

            // suh_suppression_datesAideExamen
            if (0 === strpos($pathinfo, '/supprimerAideExamen') && preg_match('#^/supprimerAideExamen/(?P<id>[0-9]+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'suh_suppression_datesAideExamen')), array (  '_controller' => 'SUH\\GestionBundle\\Controller\\GestionEtudiantController::supprimerAideExamenAction',));
            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'SUH\\ConnexionBundle\\Controller\\ConnexionController::loginAction',  '_route' => 'login',);
                }

                // login_check
                if ($pathinfo === '/login_check') {
                    return array('_route' => 'login_check');
                }

            }

            // logout
            if ($pathinfo === '/logout') {
                return array('_route' => 'logout');
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
