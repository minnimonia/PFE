<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
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

        if (0 === strpos($pathinfo, '/competence')) {
            // competence_index
            if (rtrim($pathinfo, '/') === '/competence') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_competence_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'competence_index');
                }

                return array (  '_controller' => 'UserBundle\\Controller\\CompetenceController::indexAction',  '_route' => 'competence_index',);
            }
            not_competence_index:

            // competence_new
            if ($pathinfo === '/competence/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_competence_new;
                }

                return array (  '_controller' => 'UserBundle\\Controller\\CompetenceController::newAction',  '_route' => 'competence_new',);
            }
            not_competence_new:

            // competence_show
            if (preg_match('#^/competence/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_competence_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'competence_show')), array (  '_controller' => 'UserBundle\\Controller\\CompetenceController::showAction',));
            }
            not_competence_show:

            // competence_edit
            if (preg_match('#^/competence/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_competence_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'competence_edit')), array (  '_controller' => 'UserBundle\\Controller\\CompetenceController::editAction',));
            }
            not_competence_edit:

            // competence_delete
            if (preg_match('#^/competence/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_competence_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'competence_delete')), array (  '_controller' => 'UserBundle\\Controller\\CompetenceController::deleteAction',));
            }
            not_competence_delete:

        }

        // user_default_index
        if ($pathinfo === '/index') {
            return array (  '_controller' => 'UserBundle\\Controller\\DefaultController::indexAction',  '_route' => 'user_default_index',);
        }

        // login
        if ($pathinfo === '/login') {
            return array (  '_controller' => 'UserBundle\\Controller\\LoginController::loginAction',  '_route' => 'login',);
        }

        if (0 === strpos($pathinfo, '/utilisateur')) {
            // utilisateur_index
            if (rtrim($pathinfo, '/') === '/utilisateur') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_utilisateur_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'utilisateur_index');
                }

                return array (  '_controller' => 'UserBundle\\Controller\\UtilisateurController::indexAction',  '_route' => 'utilisateur_index',);
            }
            not_utilisateur_index:

            // user_utilisateur_recherche
            if ($pathinfo === '/utilisateur/recherche') {
                return array (  '_controller' => 'UserBundle\\Controller\\UtilisateurController::rechercheAction',  '_route' => 'user_utilisateur_recherche',);
            }

            // utilisateur_new
            if ($pathinfo === '/utilisateur/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_utilisateur_new;
                }

                return array (  '_controller' => 'UserBundle\\Controller\\UtilisateurController::newAction',  '_route' => 'utilisateur_new',);
            }
            not_utilisateur_new:

            // utilisateur_show
            if (preg_match('#^/utilisateur/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_utilisateur_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'utilisateur_show')), array (  '_controller' => 'UserBundle\\Controller\\UtilisateurController::showAction',));
            }
            not_utilisateur_show:

            // utilisateur_edit
            if (preg_match('#^/utilisateur/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_utilisateur_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'utilisateur_edit')), array (  '_controller' => 'UserBundle\\Controller\\UtilisateurController::editAction',));
            }
            not_utilisateur_edit:

            // utilisateur_delete
            if (preg_match('#^/utilisateur/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_utilisateur_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'utilisateur_delete')), array (  '_controller' => 'UserBundle\\Controller\\UtilisateurController::deleteAction',));
            }
            not_utilisateur_delete:

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        // logout
        if ($pathinfo === '/logout') {
            return array('_route' => 'logout');
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
