<?php
namespace ZeAuth\Event;

//GLOBAL REQUIREMENTS
use ArrayAccess,
    Zend\Mvc\MvcEvent,
    Zend\EventManager\EventCollection,
    Zend\EventManager\ListenerAggregate,
    Zend\Authentication\Storage\Session as AuthenticationSession,
    Zend\Authentication\Result as AuthenticationResult,
//CLOSED REQUIREMENTS
    ZeAuth\Module;

class Listener implements ListenerAggregate
{
    const PRIORITY_RESTRICT_ACCESS = 10000;
    protected $listeners = array();
    protected $staticListeners = array();

    /**
     * Attach events to the application and listen for the dispatch event
     * @param \Zend\EventManager\EventCollection $events
     * @return void
     */
    public function attach(EventCollection $events)
    {
        $this->listeners[] = $events->attach('dispatch', array($this, 'restrictAccess'), self::PRIORITY_RESTRICT_ACCESS);
    }

    /**
     * Detach all the event listeners from the event collection
     * @param \Zend\EventManager\EventCollection $events
     * @return void
     */
    public function detach(EventCollection $events)
    {
        foreach ($this->listeners as $key => $listener) {
            $events->detach($listener);
            unset($this->listeners[$key]);
            unset($listener);
        }
    }

    /**
     * Restrict access to all specified routes in the config file
     * @param \Zend\Mvc\MvcEvent $e
     * @return mixed
     */
    public function restrictAccess(MvcEvent $e)
    {
        $matchedRoute = $e->getRouteMatch();

        if ($matchedRoute){
            $routeName = $matchedRoute->getMatchedRouteName();
            $restrictedRoutes = Module::getOption('restricted_routes');
            $unrestrictedRoutes = Module::getOption('unrestricted_routes');
            // Flatten the list of restricted routes
            $_restricted = array();
            foreach($restrictedRoutes->toArray() as $routes){
                $_restricted = array_merge($_restricted, $routes);
            }
            // Flatten the list of unrestricted routes
            $_unrestricted = array();
            foreach($unrestrictedRoutes->toArray() as $routes){
                $_unrestricted = array_merge($_unrestricted, $routes);
            }
            // Skip unrestricted routes
            if (!in_array($routeName, $_restricted) || in_array($routeName, $_unrestricted)){
                return;
            }

            // If logged in then go to the requested url
            $storage = new AuthenticationSession();
            if (!$storage->isEmpty() && $storage->read() instanceof AuthenticationResult){
                return;
            }

            //@todo: Find a way to redirect based on the route name
            $matchedRoute->setParam('controller','auth');
            $matchedRoute->setParam('action','index');
            $e->setRouteMatch($matchedRoute);
        }

    }

}
