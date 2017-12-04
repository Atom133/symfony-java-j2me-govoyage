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

        if (0 === strpos($pathinfo, '/pi')) {
            // pi_general_home
            if (0 === strpos($pathinfo, '/pi/home') && preg_match('#^/pi/home(?:\\.(?P<_format>html))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pi_general_home')), array (  '_controller' => 'Pi\\GeneralBundle\\Controller\\DefaultController::indexAction',  '_format' => 'html',));
            }

            // pi_general_hotels
            if (preg_match('#^/pi/(?P<id>\\d+)/hotels(?:\\.(?P<_format>html))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pi_general_hotels')), array (  '_controller' => 'Pi\\GeneralBundle\\Controller\\DefaultController::hotelsAction',  '_format' => 'html',));
            }

            // pi_general_billets
            if (0 === strpos($pathinfo, '/pi/billets') && preg_match('#^/pi/billets(?:\\.(?P<_format>html))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pi_general_billets')), array (  '_controller' => 'Pi\\GeneralBundle\\Controller\\DefaultController::flightsAction',  '_format' => 'html',));
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
