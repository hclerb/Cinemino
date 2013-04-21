<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appdevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appdevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        // _wdt
        if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::toolbarAction',)), array('_route' => '_wdt'));
        }

        if (0 === strpos($pathinfo, '/_profiler')) {
            // _profiler_search
            if ($pathinfo === '/_profiler/search') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchAction',  '_route' => '_profiler_search',);
            }

            // _profiler_purge
            if ($pathinfo === '/_profiler/purge') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::purgeAction',  '_route' => '_profiler_purge',);
            }

            // _profiler_info
            if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::infoAction',)), array('_route' => '_profiler_info'));
            }

            // _profiler_import
            if ($pathinfo === '/_profiler/import') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::importAction',  '_route' => '_profiler_import',);
            }

            // _profiler_export
            if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]+)\\.txt$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction',)), array('_route' => '_profiler_export'));
            }

            // _profiler_phpinfo
            if ($pathinfo === '/_profiler/phpinfo') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::phpinfoAction',  '_route' => '_profiler_phpinfo',);
            }

            // _profiler_search_results
            if (preg_match('#^/_profiler/(?P<token>[^/]+)/search/results$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction',)), array('_route' => '_profiler_search_results'));
            }

            // _profiler
            if (preg_match('#^/_profiler/(?P<token>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::panelAction',)), array('_route' => '_profiler'));
            }

            // _profiler_redirect
            if (rtrim($pathinfo, '/') === '/_profiler') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_profiler_redirect');
                }

                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => '_profiler_search_results',  'token' => 'empty',  'ip' => '',  'url' => '',  'method' => '',  'limit' => '10',  '_route' => '_profiler_redirect',);
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
            if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',)), array('_route' => '_configurator_step'));
            }

            // _configurator_final
            if ($pathinfo === '/_configurator/final') {
                return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
            }

        }

        // cineminoSite_front
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'cineminoSite_front');
            }

            return array (  '_controller' => 'Cinemino\\SiteBundle\\Controller\\FrontController::indexAction',  '_route' => 'cineminoSite_front',);
        }

        // cineminoSite_back
        if ($pathinfo === '/backoffice') {
            return array (  '_controller' => 'Cinemino\\SiteBundle\\Controller\\TestController::indexAction',  '_route' => 'cineminoSite_back',);
        }

        if (0 === strpos($pathinfo, '/cinema')) {
            // cinema
            if (rtrim($pathinfo, '/') === '/cinema') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'cinema');
                }

                return array (  '_controller' => 'Cinemino\\SiteBundle\\Controller\\CinemaController::indexAction',  '_route' => 'cinema',);
            }

            // cinema_show
            if (preg_match('#^/cinema/(?P<id>[^/]+)/show$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cinemino\\SiteBundle\\Controller\\CinemaController::showAction',)), array('_route' => 'cinema_show'));
            }

            // cinema_new
            if ($pathinfo === '/cinema/new') {
                return array (  '_controller' => 'Cinemino\\SiteBundle\\Controller\\CinemaController::newAction',  '_route' => 'cinema_new',);
            }

            // cinema_create
            if ($pathinfo === '/cinema/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_cinema_create;
                }

                return array (  '_controller' => 'Cinemino\\SiteBundle\\Controller\\CinemaController::createAction',  '_route' => 'cinema_create',);
            }
            not_cinema_create:

            // cinema_edit
            if (preg_match('#^/cinema/(?P<id>[^/]+)/edit$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cinemino\\SiteBundle\\Controller\\CinemaController::editAction',)), array('_route' => 'cinema_edit'));
            }

            // cinema_update
            if (preg_match('#^/cinema/(?P<id>[^/]+)/update$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_cinema_update;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cinemino\\SiteBundle\\Controller\\CinemaController::updateAction',)), array('_route' => 'cinema_update'));
            }
            not_cinema_update:

            // cinema_delete
            if (preg_match('#^/cinema/(?P<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_cinema_delete;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cinemino\\SiteBundle\\Controller\\CinemaController::deleteAction',)), array('_route' => 'cinema_delete'));
            }
            not_cinema_delete:

        }

        if (0 === strpos($pathinfo, '/utilisateurs')) {
            // cineminouser
            if (rtrim($pathinfo, '/') === '/utilisateurs') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'cineminouser');
                }

                return array (  '_controller' => 'CineminoSiteBundle:CineminoUser:index',  '_route' => 'cineminouser',);
            }

            // cineminouser_show
            if (preg_match('#^/utilisateurs/(?P<id>[^/]+)/show$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'CineminoSiteBundle:CineminoUser:show',)), array('_route' => 'cineminouser_show'));
            }

            // cineminouser_new
            if ($pathinfo === '/utilisateurs/new') {
                return array (  '_controller' => 'CineminoSiteBundle:CineminoUser:new',  '_route' => 'cineminouser_new',);
            }

            // cineminouser_create
            if ($pathinfo === '/utilisateurs/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_cineminouser_create;
                }

                return array (  '_controller' => 'CineminoSiteBundle:CineminoUser:create',  '_route' => 'cineminouser_create',);
            }
            not_cineminouser_create:

            // cineminouser_edit
            if (preg_match('#^/utilisateurs/(?P<id>[^/]+)/edit$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'CineminoSiteBundle:CineminoUser:edit',)), array('_route' => 'cineminouser_edit'));
            }

            // cineminouser_update
            if (preg_match('#^/utilisateurs/(?P<id>[^/]+)/update$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_cineminouser_update;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'CineminoSiteBundle:CineminoUser:update',)), array('_route' => 'cineminouser_update'));
            }
            not_cineminouser_update:

            // cineminouser_delete
            if (preg_match('#^/utilisateurs/(?P<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_cineminouser_delete;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'CineminoSiteBundle:CineminoUser:delete',)), array('_route' => 'cineminouser_delete'));
            }
            not_cineminouser_delete:

        }

        if (0 === strpos($pathinfo, '/intervenant')) {
            // intervenant
            if (rtrim($pathinfo, '/') === '/intervenant') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'intervenant');
                }

                return array (  '_controller' => 'Cinemino\\SiteBundle\\Controller\\IntervenantController::indexAction',  '_route' => 'intervenant',);
            }

            // intervenant_show
            if (preg_match('#^/intervenant/(?P<id>[^/]+)/show$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cinemino\\SiteBundle\\Controller\\IntervenantController::showAction',)), array('_route' => 'intervenant_show'));
            }

            // intervenant_new
            if ($pathinfo === '/intervenant/new') {
                return array (  '_controller' => 'Cinemino\\SiteBundle\\Controller\\IntervenantController::newAction',  '_route' => 'intervenant_new',);
            }

            // intervenant_create
            if ($pathinfo === '/intervenant/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_intervenant_create;
                }

                return array (  '_controller' => 'Cinemino\\SiteBundle\\Controller\\IntervenantController::createAction',  '_route' => 'intervenant_create',);
            }
            not_intervenant_create:

            // intervenant_edit
            if (preg_match('#^/intervenant/(?P<id>[^/]+)/edit$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cinemino\\SiteBundle\\Controller\\IntervenantController::editAction',)), array('_route' => 'intervenant_edit'));
            }

            // intervenant_update
            if (preg_match('#^/intervenant/(?P<id>[^/]+)/update$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_intervenant_update;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cinemino\\SiteBundle\\Controller\\IntervenantController::updateAction',)), array('_route' => 'intervenant_update'));
            }
            not_intervenant_update:

            // intervenant_delete
            if (preg_match('#^/intervenant/(?P<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_intervenant_delete;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cinemino\\SiteBundle\\Controller\\IntervenantController::deleteAction',)), array('_route' => 'intervenant_delete'));
            }
            not_intervenant_delete:

        }

        if (0 === strpos($pathinfo, '/seance')) {
            // seance
            if (rtrim($pathinfo, '/') === '/seance') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'seance');
                }

                return array (  '_controller' => 'Cinemino\\SiteBundle\\Controller\\SeanceController::indexAction',  '_route' => 'seance',);
            }

            // seance_show
            if (preg_match('#^/seance/(?P<id>[^/]+)/show$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cinemino\\SiteBundle\\Controller\\SeanceController::showAction',)), array('_route' => 'seance_show'));
            }

            // seance_new
            if ($pathinfo === '/seance/new') {
                return array (  '_controller' => 'Cinemino\\SiteBundle\\Controller\\SeanceController::newAction',  '_route' => 'seance_new',);
            }

            // seance_create
            if ($pathinfo === '/seance/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_seance_create;
                }

                return array (  '_controller' => 'Cinemino\\SiteBundle\\Controller\\SeanceController::createAction',  '_route' => 'seance_create',);
            }
            not_seance_create:

            // seance_edit
            if (preg_match('#^/seance/(?P<id>[^/]+)/edit$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cinemino\\SiteBundle\\Controller\\SeanceController::editAction',)), array('_route' => 'seance_edit'));
            }

            // seance_update
            if (preg_match('#^/seance/(?P<id>[^/]+)/update$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_seance_update;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cinemino\\SiteBundle\\Controller\\SeanceController::updateAction',)), array('_route' => 'seance_update'));
            }
            not_seance_update:

            // seance_delete
            if (preg_match('#^/seance/(?P<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_seance_delete;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cinemino\\SiteBundle\\Controller\\SeanceController::deleteAction',)), array('_route' => 'seance_delete'));
            }
            not_seance_delete:

        }

        if (0 === strpos($pathinfo, '/film')) {
            // film
            if (rtrim($pathinfo, '/') === '/film') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'film');
                }

                return array (  '_controller' => 'Cinemino\\SiteBundle\\Controller\\FilmController::indexAction',  '_route' => 'film',);
            }

            // film_show
            if (preg_match('#^/film/(?P<id>[^/]+)/show$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cinemino\\SiteBundle\\Controller\\FilmController::showAction',)), array('_route' => 'film_show'));
            }

            // film_new
            if ($pathinfo === '/film/new') {
                return array (  '_controller' => 'Cinemino\\SiteBundle\\Controller\\FilmController::newAction',  '_route' => 'film_new',);
            }

            // film_create
            if ($pathinfo === '/film/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_film_create;
                }

                return array (  '_controller' => 'Cinemino\\SiteBundle\\Controller\\FilmController::createAction',  '_route' => 'film_create',);
            }
            not_film_create:

            // film_edit
            if (preg_match('#^/film/(?P<id>[^/]+)/edit$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cinemino\\SiteBundle\\Controller\\FilmController::editAction',)), array('_route' => 'film_edit'));
            }

            // film_update
            if (preg_match('#^/film/(?P<id>[^/]+)/update$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_film_update;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cinemino\\SiteBundle\\Controller\\FilmController::updateAction',)), array('_route' => 'film_update'));
            }
            not_film_update:

            // film_delete
            if (preg_match('#^/film/(?P<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_film_delete;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cinemino\\SiteBundle\\Controller\\FilmController::deleteAction',)), array('_route' => 'film_delete'));
            }
            not_film_delete:

            // film_ajax
            if ($pathinfo === '/film/ajaxRea') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_film_ajax;
                }

                return array (  '_controller' => 'Cinemino\\SiteBundle\\Controller\\FilmController::ajaxAction',  '_route' => 'film_ajax',);
            }
            not_film_ajax:

            // film_rechercher
            if ($pathinfo === '/film/rechercher') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_film_rechercher;
                }

                return array (  '_controller' => 'Cinemino\\SiteBundle\\Controller\\FilmController::rechercherAction',  '_route' => 'film_rechercher',);
            }
            not_film_rechercher:

            // film_ajoutFormulaire
            if (0 === strpos($pathinfo, '/film/new') && preg_match('#^/film/new/(?P<code>[^/]+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_film_ajoutFormulaire;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cinemino\\SiteBundle\\Controller\\FilmController::ajoutFormulaireAction',)), array('_route' => 'film_ajoutFormulaire'));
            }
            not_film_ajoutFormulaire:

        }

        if (0 === strpos($pathinfo, '/media')) {
            // media
            if (rtrim($pathinfo, '/') === '/media') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'media');
                }

                return array (  '_controller' => 'Cinemino\\SiteBundle\\Controller\\MediaController::indexAction',  '_route' => 'media',);
            }

            // media_show
            if (preg_match('#^/media/(?P<id>[^/]+)/show$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cinemino\\SiteBundle\\Controller\\MediaController::showAction',)), array('_route' => 'media_show'));
            }

            // media_new
            if ($pathinfo === '/media/new') {
                return array (  '_controller' => 'Cinemino\\SiteBundle\\Controller\\MediaController::newAction',  '_route' => 'media_new',);
            }

            // media_create
            if ($pathinfo === '/media/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_media_create;
                }

                return array (  '_controller' => 'Cinemino\\SiteBundle\\Controller\\MediaController::createAction',  '_route' => 'media_create',);
            }
            not_media_create:

            // media_edit
            if (preg_match('#^/media/(?P<id>[^/]+)/edit$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cinemino\\SiteBundle\\Controller\\MediaController::editAction',)), array('_route' => 'media_edit'));
            }

            // media_update
            if (preg_match('#^/media/(?P<id>[^/]+)/update$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_media_update;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cinemino\\SiteBundle\\Controller\\MediaController::updateAction',)), array('_route' => 'media_update'));
            }
            not_media_update:

            // media_delete
            if (preg_match('#^/media/(?P<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_media_delete;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cinemino\\SiteBundle\\Controller\\MediaController::deleteAction',)), array('_route' => 'media_delete'));
            }
            not_media_delete:

        }

        if (0 === strpos($pathinfo, '/evenement')) {
            // evenement
            if (rtrim($pathinfo, '/') === '/evenement') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'evenement');
                }

                return array (  '_controller' => 'Cinemino\\SiteBundle\\Controller\\EvenementController::indexAction',  '_route' => 'evenement',);
            }

            // evenement_show
            if (preg_match('#^/evenement/(?P<id>[^/]+)/show$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cinemino\\SiteBundle\\Controller\\EvenementController::showAction',)), array('_route' => 'evenement_show'));
            }

            // evenement_new
            if ($pathinfo === '/evenement/new') {
                return array (  '_controller' => 'Cinemino\\SiteBundle\\Controller\\EvenementController::newAction',  '_route' => 'evenement_new',);
            }

            // evenement_create
            if ($pathinfo === '/evenement/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_evenement_create;
                }

                return array (  '_controller' => 'Cinemino\\SiteBundle\\Controller\\EvenementController::createAction',  '_route' => 'evenement_create',);
            }
            not_evenement_create:

            // evenement_edit
            if (preg_match('#^/evenement/(?P<id>[^/]+)/edit$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cinemino\\SiteBundle\\Controller\\EvenementController::editAction',)), array('_route' => 'evenement_edit'));
            }

            // evenement_update
            if (preg_match('#^/evenement/(?P<id>[^/]+)/update$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_evenement_update;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cinemino\\SiteBundle\\Controller\\EvenementController::updateAction',)), array('_route' => 'evenement_update'));
            }
            not_evenement_update:

            // evenement_delete
            if (preg_match('#^/evenement/(?P<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_evenement_delete;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cinemino\\SiteBundle\\Controller\\EvenementController::deleteAction',)), array('_route' => 'evenement_delete'));
            }
            not_evenement_delete:

        }

        if (0 === strpos($pathinfo, '/sponsor')) {
            // sponsor
            if (rtrim($pathinfo, '/') === '/sponsor') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'sponsor');
                }

                return array (  '_controller' => 'Cinemino\\SiteBundle\\Controller\\SponsorController::indexAction',  '_route' => 'sponsor',);
            }

            // sponsor_show
            if (preg_match('#^/sponsor/(?P<id>[^/]+)/show$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cinemino\\SiteBundle\\Controller\\SponsorController::showAction',)), array('_route' => 'sponsor_show'));
            }

            // sponsor_new
            if ($pathinfo === '/sponsor/new') {
                return array (  '_controller' => 'Cinemino\\SiteBundle\\Controller\\SponsorController::newAction',  '_route' => 'sponsor_new',);
            }

            // sponsor_create
            if ($pathinfo === '/sponsor/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_sponsor_create;
                }

                return array (  '_controller' => 'Cinemino\\SiteBundle\\Controller\\SponsorController::createAction',  '_route' => 'sponsor_create',);
            }
            not_sponsor_create:

            // sponsor_edit
            if (preg_match('#^/sponsor/(?P<id>[^/]+)/edit$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cinemino\\SiteBundle\\Controller\\SponsorController::editAction',)), array('_route' => 'sponsor_edit'));
            }

            // sponsor_update
            if (preg_match('#^/sponsor/(?P<id>[^/]+)/update$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_sponsor_update;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cinemino\\SiteBundle\\Controller\\SponsorController::updateAction',)), array('_route' => 'sponsor_update'));
            }
            not_sponsor_update:

            // sponsor_delete
            if (preg_match('#^/sponsor/(?P<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_sponsor_delete;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cinemino\\SiteBundle\\Controller\\SponsorController::deleteAction',)), array('_route' => 'sponsor_delete'));
            }
            not_sponsor_delete:

        }

        // cineminoSite_voir
        if (0 === strpos($pathinfo, '/Site/article') && preg_match('#^/Site/article/(?P<id>[^/\\.]+)\\.(?P<tag>[^\\.]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cinemino\\SiteBundle\\Controller\\TestController::voirAction',)), array('_route' => 'cineminoSite_voir'));
        }

        // cineminoSite_ajouter
        if ($pathinfo === '/Site/ajouter') {
            return array (  '_controller' => 'Cinemino\\SiteBundle\\Controller\\TestController::ajouterAction',  '_route' => 'cineminoSite_ajouter',);
        }

        // cineminoSite_template
        if ($pathinfo === '/Site/template') {
            return array (  '_controller' => 'Cinemino\\SiteBundle\\Controller\\TestController::templateAction',  '_route' => 'cineminoSite_template',);
        }

        if (0 === strpos($pathinfo, '/programmecourts')) {
            // programmecourts
            if (rtrim($pathinfo, '/') === '/programmecourts') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'programmecourts');
                }

                return array (  '_controller' => 'Cinemino\\SiteBundle\\Controller\\ProgrammeCourtsController::indexAction',  '_route' => 'programmecourts',);
            }

            // programmecourts_show
            if (preg_match('#^/programmecourts/(?P<id>[^/]+)/show$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cinemino\\SiteBundle\\Controller\\ProgrammeCourtsController::showAction',)), array('_route' => 'programmecourts_show'));
            }

            // programmecourts_new
            if ($pathinfo === '/programmecourts/new') {
                return array (  '_controller' => 'Cinemino\\SiteBundle\\Controller\\ProgrammeCourtsController::newAction',  '_route' => 'programmecourts_new',);
            }

            // programmecourts_create
            if ($pathinfo === '/programmecourts/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_programmecourts_create;
                }

                return array (  '_controller' => 'Cinemino\\SiteBundle\\Controller\\ProgrammeCourtsController::createAction',  '_route' => 'programmecourts_create',);
            }
            not_programmecourts_create:

            // programmecourts_edit
            if (preg_match('#^/programmecourts/(?P<id>[^/]+)/edit$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cinemino\\SiteBundle\\Controller\\ProgrammeCourtsController::editAction',)), array('_route' => 'programmecourts_edit'));
            }

            // programmecourts_update
            if (preg_match('#^/programmecourts/(?P<id>[^/]+)/update$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_programmecourts_update;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cinemino\\SiteBundle\\Controller\\ProgrammeCourtsController::updateAction',)), array('_route' => 'programmecourts_update'));
            }
            not_programmecourts_update:

            // programmecourts_delete
            if (preg_match('#^/programmecourts/(?P<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_programmecourts_delete;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cinemino\\SiteBundle\\Controller\\ProgrammeCourtsController::deleteAction',)), array('_route' => 'programmecourts_delete'));
            }
            not_programmecourts_delete:

        }

        // fos_user_security_login
        if ($pathinfo === '/login') {
            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
        }

        // fos_user_security_check
        if ($pathinfo === '/login_check') {
            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
        }

        // fos_user_security_logout
        if ($pathinfo === '/logout') {
            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }

        }

        if (0 === strpos($pathinfo, '/users')) {
            // user
            if (rtrim($pathinfo, '/') === '/users') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'user');
                }

                return array (  '_controller' => 'Cinemino\\UserBundle\\Controller\\UserController::indexAction',  '_route' => 'user',);
            }

            // user_show
            if (preg_match('#^/users/(?P<id>[^/]+)/show$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cinemino\\UserBundle\\Controller\\UserController::showAction',)), array('_route' => 'user_show'));
            }

            // user_new
            if ($pathinfo === '/users/new') {
                return array (  '_controller' => 'Cinemino\\UserBundle\\Controller\\UserController::newAction',  '_route' => 'user_new',);
            }

            // user_create
            if ($pathinfo === '/users/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_user_create;
                }

                return array (  '_controller' => 'Cinemino\\UserBundle\\Controller\\UserController::createAction',  '_route' => 'user_create',);
            }
            not_user_create:

            // user_edit
            if (preg_match('#^/users/(?P<id>[^/]+)/edit$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cinemino\\UserBundle\\Controller\\UserController::editAction',)), array('_route' => 'user_edit'));
            }

            // user_update
            if (preg_match('#^/users/(?P<id>[^/]+)/update$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_user_update;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cinemino\\UserBundle\\Controller\\UserController::updateAction',)), array('_route' => 'user_update'));
            }
            not_user_update:

            // user_delete
            if (preg_match('#^/users/(?P<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_user_delete;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Cinemino\\UserBundle\\Controller\\UserController::deleteAction',)), array('_route' => 'user_delete'));
            }
            not_user_delete:

        }

        if (0 === strpos($pathinfo, '/register')) {
            // fos_user_registration_register
            if (rtrim($pathinfo, '/') === '/register') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
            }

            // fos_user_registration_check_email
            if ($pathinfo === '/register/check-email') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_registration_check_email;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
            }
            not_fos_user_registration_check_email:

            // fos_user_registration_confirm
            if (0 === strpos($pathinfo, '/register/confirm') && preg_match('#^/register/confirm/(?P<token>[^/]+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_registration_confirm;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',)), array('_route' => 'fos_user_registration_confirm'));
            }
            not_fos_user_registration_confirm:

            // fos_user_registration_confirmed
            if ($pathinfo === '/register/confirmed') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_registration_confirmed;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
            }
            not_fos_user_registration_confirmed:

        }

        if (0 === strpos($pathinfo, '/resetting')) {
            // fos_user_resetting_request
            if ($pathinfo === '/resetting/request') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_resetting_request;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
            }
            not_fos_user_resetting_request:

            // fos_user_resetting_send_email
            if ($pathinfo === '/resetting/send-email') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_fos_user_resetting_send_email;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
            }
            not_fos_user_resetting_send_email:

            // fos_user_resetting_check_email
            if ($pathinfo === '/resetting/check-email') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_resetting_check_email;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
            }
            not_fos_user_resetting_check_email:

            // fos_user_resetting_reset
            if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_resetting_reset;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',)), array('_route' => 'fos_user_resetting_reset'));
            }
            not_fos_user_resetting_reset:

        }

        // fos_user_change_password
        if ($pathinfo === '/change-password/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
