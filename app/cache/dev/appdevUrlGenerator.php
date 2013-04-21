<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Symfony\Component\HttpKernel\Log\LoggerInterface;

/**
 * appdevUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appdevUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRoutes = array(
        '_wdt' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::toolbarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_wdt',    ),  ),),
        '_profiler_search' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search',    ),  ),),
        '_profiler_purge' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::purgeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/purge',    ),  ),),
        '_profiler_info' => array (  0 =>   array (    0 => 'about',  ),  1 =>   array (    '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::infoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'about',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler/info',    ),  ),),
        '_profiler_import' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::importAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/import',    ),  ),),
        '_profiler_export' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '.txt',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/\\.]+',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler/export',    ),  ),),
        '_profiler_phpinfo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::phpinfoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/phpinfo',    ),  ),),
        '_profiler_search_results' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/search/results',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),),
        '_profiler' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),),
        '_profiler_redirect' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',    'route' => '_profiler_search_results',    'token' => 'empty',    'ip' => '',    'url' => '',    'method' => '',    'limit' => '10',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/',    ),  ),),
        '_configurator_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_configurator/',    ),  ),),
        '_configurator_step' => array (  0 =>   array (    0 => 'index',  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'index',    ),    1 =>     array (      0 => 'text',      1 => '/_configurator/step',    ),  ),),
        '_configurator_final' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_configurator/final',    ),  ),),
        'cineminoSite_front' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Cinemino\\SiteBundle\\Controller\\FrontController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),),
        'cineminoSite_back' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Cinemino\\SiteBundle\\Controller\\TestController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/backoffice',    ),  ),),
        'cinema' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Cinemino\\SiteBundle\\Controller\\CinemaController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/cinema/',    ),  ),),
        'cinema_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Cinemino\\SiteBundle\\Controller\\CinemaController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/cinema',    ),  ),),
        'cinema_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Cinemino\\SiteBundle\\Controller\\CinemaController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/cinema/new',    ),  ),),
        'cinema_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Cinemino\\SiteBundle\\Controller\\CinemaController::createAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/cinema/create',    ),  ),),
        'cinema_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Cinemino\\SiteBundle\\Controller\\CinemaController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/cinema',    ),  ),),
        'cinema_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Cinemino\\SiteBundle\\Controller\\CinemaController::updateAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/update',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/cinema',    ),  ),),
        'cinema_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Cinemino\\SiteBundle\\Controller\\CinemaController::deleteAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/cinema',    ),  ),),
        'cineminouser' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CineminoSiteBundle:CineminoUser:index',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/utilisateurs/',    ),  ),),
        'cineminouser_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'CineminoSiteBundle:CineminoUser:show',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/utilisateurs',    ),  ),),
        'cineminouser_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CineminoSiteBundle:CineminoUser:new',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/utilisateurs/new',    ),  ),),
        'cineminouser_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CineminoSiteBundle:CineminoUser:create',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/utilisateurs/create',    ),  ),),
        'cineminouser_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'CineminoSiteBundle:CineminoUser:edit',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/utilisateurs',    ),  ),),
        'cineminouser_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'CineminoSiteBundle:CineminoUser:update',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/update',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/utilisateurs',    ),  ),),
        'cineminouser_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'CineminoSiteBundle:CineminoUser:delete',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/utilisateurs',    ),  ),),
        'intervenant' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Cinemino\\SiteBundle\\Controller\\IntervenantController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/intervenant/',    ),  ),),
        'intervenant_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Cinemino\\SiteBundle\\Controller\\IntervenantController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/intervenant',    ),  ),),
        'intervenant_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Cinemino\\SiteBundle\\Controller\\IntervenantController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/intervenant/new',    ),  ),),
        'intervenant_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Cinemino\\SiteBundle\\Controller\\IntervenantController::createAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/intervenant/create',    ),  ),),
        'intervenant_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Cinemino\\SiteBundle\\Controller\\IntervenantController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/intervenant',    ),  ),),
        'intervenant_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Cinemino\\SiteBundle\\Controller\\IntervenantController::updateAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/update',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/intervenant',    ),  ),),
        'intervenant_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Cinemino\\SiteBundle\\Controller\\IntervenantController::deleteAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/intervenant',    ),  ),),
        'seance' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Cinemino\\SiteBundle\\Controller\\SeanceController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/seance/',    ),  ),),
        'seance_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Cinemino\\SiteBundle\\Controller\\SeanceController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/seance',    ),  ),),
        'seance_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Cinemino\\SiteBundle\\Controller\\SeanceController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/seance/new',    ),  ),),
        'seance_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Cinemino\\SiteBundle\\Controller\\SeanceController::createAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/seance/create',    ),  ),),
        'seance_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Cinemino\\SiteBundle\\Controller\\SeanceController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/seance',    ),  ),),
        'seance_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Cinemino\\SiteBundle\\Controller\\SeanceController::updateAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/update',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/seance',    ),  ),),
        'seance_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Cinemino\\SiteBundle\\Controller\\SeanceController::deleteAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/seance',    ),  ),),
        'film' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Cinemino\\SiteBundle\\Controller\\FilmController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/film/',    ),  ),),
        'film_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Cinemino\\SiteBundle\\Controller\\FilmController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/film',    ),  ),),
        'film_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Cinemino\\SiteBundle\\Controller\\FilmController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/film/new',    ),  ),),
        'film_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Cinemino\\SiteBundle\\Controller\\FilmController::createAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/film/create',    ),  ),),
        'film_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Cinemino\\SiteBundle\\Controller\\FilmController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/film',    ),  ),),
        'film_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Cinemino\\SiteBundle\\Controller\\FilmController::updateAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/update',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/film',    ),  ),),
        'film_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Cinemino\\SiteBundle\\Controller\\FilmController::deleteAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/film',    ),  ),),
        'film_ajax' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Cinemino\\SiteBundle\\Controller\\FilmController::ajaxAction',  ),  2 =>   array (    '_method' => 'get',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/film/ajaxRea',    ),  ),),
        'film_rechercher' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Cinemino\\SiteBundle\\Controller\\FilmController::rechercherAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/film/rechercher',    ),  ),),
        'film_ajoutFormulaire' => array (  0 =>   array (    0 => 'code',  ),  1 =>   array (    '_controller' => 'Cinemino\\SiteBundle\\Controller\\FilmController::ajoutFormulaireAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'code',    ),    1 =>     array (      0 => 'text',      1 => '/film/new',    ),  ),),
        'media' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Cinemino\\SiteBundle\\Controller\\MediaController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/media/',    ),  ),),
        'media_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Cinemino\\SiteBundle\\Controller\\MediaController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/media',    ),  ),),
        'media_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Cinemino\\SiteBundle\\Controller\\MediaController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/media/new',    ),  ),),
        'media_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Cinemino\\SiteBundle\\Controller\\MediaController::createAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/media/create',    ),  ),),
        'media_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Cinemino\\SiteBundle\\Controller\\MediaController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/media',    ),  ),),
        'media_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Cinemino\\SiteBundle\\Controller\\MediaController::updateAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/update',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/media',    ),  ),),
        'media_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Cinemino\\SiteBundle\\Controller\\MediaController::deleteAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/media',    ),  ),),
        'evenement' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Cinemino\\SiteBundle\\Controller\\EvenementController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/evenement/',    ),  ),),
        'evenement_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Cinemino\\SiteBundle\\Controller\\EvenementController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/evenement',    ),  ),),
        'evenement_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Cinemino\\SiteBundle\\Controller\\EvenementController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/evenement/new',    ),  ),),
        'evenement_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Cinemino\\SiteBundle\\Controller\\EvenementController::createAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/evenement/create',    ),  ),),
        'evenement_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Cinemino\\SiteBundle\\Controller\\EvenementController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/evenement',    ),  ),),
        'evenement_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Cinemino\\SiteBundle\\Controller\\EvenementController::updateAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/update',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/evenement',    ),  ),),
        'evenement_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Cinemino\\SiteBundle\\Controller\\EvenementController::deleteAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/evenement',    ),  ),),
        'sponsor' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Cinemino\\SiteBundle\\Controller\\SponsorController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/sponsor/',    ),  ),),
        'sponsor_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Cinemino\\SiteBundle\\Controller\\SponsorController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/sponsor',    ),  ),),
        'sponsor_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Cinemino\\SiteBundle\\Controller\\SponsorController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/sponsor/new',    ),  ),),
        'sponsor_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Cinemino\\SiteBundle\\Controller\\SponsorController::createAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/sponsor/create',    ),  ),),
        'sponsor_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Cinemino\\SiteBundle\\Controller\\SponsorController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/sponsor',    ),  ),),
        'sponsor_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Cinemino\\SiteBundle\\Controller\\SponsorController::updateAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/update',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/sponsor',    ),  ),),
        'sponsor_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Cinemino\\SiteBundle\\Controller\\SponsorController::deleteAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/sponsor',    ),  ),),
        'cineminoSite_voir' => array (  0 =>   array (    0 => 'id',    1 => 'tag',  ),  1 =>   array (    '_controller' => 'Cinemino\\SiteBundle\\Controller\\TestController::voirAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => '[^\\.]+',      3 => 'tag',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/\\.]+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/Site/article',    ),  ),),
        'cineminoSite_ajouter' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Cinemino\\SiteBundle\\Controller\\TestController::ajouterAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Site/ajouter',    ),  ),),
        'cineminoSite_template' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Cinemino\\SiteBundle\\Controller\\TestController::templateAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Site/template',    ),  ),),
        'programmecourts' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Cinemino\\SiteBundle\\Controller\\ProgrammeCourtsController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/programmecourts/',    ),  ),),
        'programmecourts_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Cinemino\\SiteBundle\\Controller\\ProgrammeCourtsController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/programmecourts',    ),  ),),
        'programmecourts_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Cinemino\\SiteBundle\\Controller\\ProgrammeCourtsController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/programmecourts/new',    ),  ),),
        'programmecourts_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Cinemino\\SiteBundle\\Controller\\ProgrammeCourtsController::createAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/programmecourts/create',    ),  ),),
        'programmecourts_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Cinemino\\SiteBundle\\Controller\\ProgrammeCourtsController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/programmecourts',    ),  ),),
        'programmecourts_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Cinemino\\SiteBundle\\Controller\\ProgrammeCourtsController::updateAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/update',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/programmecourts',    ),  ),),
        'programmecourts_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Cinemino\\SiteBundle\\Controller\\ProgrammeCourtsController::deleteAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/programmecourts',    ),  ),),
        'fos_user_security_login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),  ),),
        'fos_user_security_check' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login_check',    ),  ),),
        'fos_user_security_logout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),),
        'fos_user_profile_show' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/',    ),  ),),
        'fos_user_profile_edit' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/edit',    ),  ),),
        'user' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Cinemino\\UserBundle\\Controller\\UserController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/users/',    ),  ),),
        'user_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Cinemino\\UserBundle\\Controller\\UserController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/users',    ),  ),),
        'user_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Cinemino\\UserBundle\\Controller\\UserController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/users/new',    ),  ),),
        'user_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Cinemino\\UserBundle\\Controller\\UserController::createAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/users/create',    ),  ),),
        'user_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Cinemino\\UserBundle\\Controller\\UserController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/users',    ),  ),),
        'user_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Cinemino\\UserBundle\\Controller\\UserController::updateAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/update',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/users',    ),  ),),
        'user_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Cinemino\\UserBundle\\Controller\\UserController::deleteAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/users',    ),  ),),
        'fos_user_registration_register' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/',    ),  ),),
        'fos_user_registration_check_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/check-email',    ),  ),),
        'fos_user_registration_confirm' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/register/confirm',    ),  ),),
        'fos_user_registration_confirmed' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/confirmed',    ),  ),),
        'fos_user_resetting_request' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/request',    ),  ),),
        'fos_user_resetting_send_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/send-email',    ),  ),),
        'fos_user_resetting_check_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/check-email',    ),  ),),
        'fos_user_resetting_reset' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/resetting/reset',    ),  ),),
        'fos_user_change_password' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/change-password/change-password',    ),  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $absolute = false)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Route "%s" does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $absolute);
    }
}