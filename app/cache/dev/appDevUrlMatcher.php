<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

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

            // suh_gestion_addEtudiant_Etape2
            if ($pathinfo === '/add2') {
                return array (  '_controller' => 'SUH\\GestionBundle\\Controller\\GestionEtudiantController::addInfosEtudiantEtape2Action',  '_route' => 'suh_gestion_addEtudiant_Etape2',);
            }

            // suh_gestion_addEtudiant_Etape3
            if ($pathinfo === '/add3') {
                return array (  '_controller' => 'SUH\\GestionBundle\\Controller\\GestionEtudiantController::addInfosEtudiantEtape3Action',  '_route' => 'suh_gestion_addEtudiant_Etape3',);
            }

            // suh_gestion_addEtudiant_Etape4
            if ($pathinfo === '/add4') {
                return array (  '_controller' => 'SUH\\GestionBundle\\Controller\\GestionEtudiantController::addInfosEtudiantEtape4Action',  '_route' => 'suh_gestion_addEtudiant_Etape4',);
            }

            // suh_gestion_addEtudiant_Etape5
            if ($pathinfo === '/add5') {
                return array (  '_controller' => 'SUH\\GestionBundle\\Controller\\GestionEtudiantController::addInfosEtudiantEtape5Action',  '_route' => 'suh_gestion_addEtudiant_Etape5',);
            }

            // suh_gestion_addEtudiant_Etape6
            if ($pathinfo === '/add6') {
                return array (  '_controller' => 'SUH\\GestionBundle\\Controller\\GestionEtudiantController::addInfosEtudiantEtape6Action',  '_route' => 'suh_gestion_addEtudiant_Etape6',);
            }

            // suh_gestion_addEtudiant_Etape7
            if ($pathinfo === '/add7') {
                return array (  '_controller' => 'SUH\\GestionBundle\\Controller\\GestionEtudiantController::addInfosEtudiantEtape7Action',  '_route' => 'suh_gestion_addEtudiant_Etape7',);
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
