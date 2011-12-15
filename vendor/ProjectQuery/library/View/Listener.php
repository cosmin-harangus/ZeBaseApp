<?php
/*
 * ProjectQuery
 * All rights reserved.
 * This file is part of the ProjectQuery application.
 *
 * Pq\View\Listener
 *
 * @author Cosmin Harangus <cosmin@around25.com>
 */
namespace Pq\View;

use ArrayAccess,
    Zend\Di\Locator,
    Zend\EventManager\Event,
    Zend\EventManager\EventCollection,
    Zend\EventManager\ListenerAggregate,
    Zend\EventManager\StaticEventCollection,
    Zend\Http\PhpEnvironment\Response,
    Zend\Mvc\Application,
    Zend\Mvc\MvcEvent,
    Zend\Debug;

class Listener implements ListenerAggregate
{
    protected $layout;
    protected $listeners = array();
    protected $staticListeners = array();
    protected $view;
    protected $displayExceptions = false;
    protected $script = null;

    public function __construct(Renderer $renderer, $layout = 'layout.phtml')
    {
        $this->view   = $renderer;
        $this->layout = $layout;
    }

    public function setDisplayExceptionsFlag($flag)
    {
        $this->displayExceptions = (bool) $flag;
        return $this;
    }

    public function displayExceptions()
    {
        return $this->displayExceptions;
    }

    public function attach(EventCollection $events)
    {
        $this->listeners[] = $events->attach('dispatch.error', array($this, 'renderError'));
        $this->listeners[] = $events->attach('dispatch', array($this, 'render404'), -80);
        $this->listeners[] = $events->attach('dispatch', array($this, 'renderLayout'), -1000);
    }

    public function detach(EventCollection $events)
    {
        foreach ($this->listeners as $key => $listener) {
            $events->detach($listener);
            unset($this->listeners[$key]);
            unset($listener);
        }
    }

    public function registerStaticListeners(StaticEventCollection $events, $locator)
    {
        $ident   = 'Pq\Controller\ActionController';
        $handler = $events->attach($ident, 'dispatch', array($this, 'renderView'), -50);
        $this->staticListeners[] = array($ident, $handler);
        
        $ident   = 'Pq\Controller\ActionController';
        $handler = $events->attach($ident, 'display.change', array($this, 'changeLayout'));
        $this->staticListeners[] = array($ident, $handler);
    }

    public function detachStaticListeners(StaticEventCollection $events)
    {
        foreach ($this->staticListeners as $i => $info) {
            list($id, $handler) = $info;
            $events->detach($id, $handler);
            unset($this->staticListeners[$i]);
        }
    }

    public function renderPageController(MvcEvent $e)
    {
        $page = $e->getResult();
        if ($page instanceof Response) {
            return;
        }

        $response = $e->getResponse();
        if ($response->isNotFound()) {
            return;
        } 

        $routeMatch = $e->getRouteMatch();

        if (!$routeMatch) {
            $page = '404';
        } else {
            $page = $routeMatch->getParam('action', '404');
        }

        if ($page == '404') {
            $response->setStatusCode(404);
        }

        $script     = 'error/' . $page . '.phtml';

        // Action content
        $content    = $this->view->render($script);
        $e->setResult($content);

        return $this->renderLayout($e);
    }
    
    public function changeLayout(Event $e)
    {
        $layout = $e->getParam('layout');
        $view = $e->getParam('view');
        if ($layout !== null ){
            if ($layout){
                $this->layout = 'layouts/' . $layout . '.phtml';
            }else{
                $this->layout = false;
            }
        }
        if ($view !== null){
            $this->script = $view;
        }
    }

    public function renderView(MvcEvent $e)
    {
        if ($this->script===false){
            $content = '';
            $e->setResult($content);
            return $content;
        }
        
        $response = $e->getResponse();
        if (!$response->isSuccess()) {
            return;
        }

        $routeMatch = $e->getRouteMatch();
        $controller = $routeMatch->getParam('controller', 'index');
        $action     = $routeMatch->getParam('action', 'index');
        if ($this->script){
            if (strpos($this->script, '/')===false){
                $script = $controller . '/' . $this->script . '.phtml';
            }else{
                $script = $this->script . '.phtml';
            }
        }else{
            $script     = $controller . '/' . $action . '.phtml';
        }
        
        $vars       = $e->getResult();
        if (is_scalar($vars)) {
            $vars = array('content' => $vars);
        } elseif (is_object($vars) && !$vars instanceof ArrayAccess) {
            $vars = (array) $vars;
        }
        
        $this->view->setVars($vars);
        $content    = $this->view->render($script, $vars);
        
        $e->setResult($content);
        return $content;
    }

    public function renderLayout(MvcEvent $e)
    {
        $response = $e->getResponse();
        if (!$response) {
            $response = new Response();
            $e->setResponse($response);
        }
        if ($response->isRedirect()) {
            return $response;
        }
        
        $footer   = $e->getParam('footer', false);
        $vars = $this->view->vars()->getRawValues();
        $vars     = $vars + array('footer' => $footer);

        if (false !== ($contentParam = $e->getParam('content', false))) {
            $vars['content'] = $contentParam;
        } else {
            $vars['content'] = $e->getResult();
        }
        
        if ($this->layout === false){
            $response->setContent($vars['content']);
            return $response;
        }
        
        $layout   = $this->view->render($this->layout, $vars);
        $response->setContent($layout);
        return $response;
    }

    public function render404(MvcEvent $e)
    {
        $vars = $e->getResult();
        if ($vars instanceof Response) {
            return;
        }

        $response = $e->getResponse();
        if ($response->getStatusCode() != 404) {
            // Only handle 404's
            return;
        }

        $vars = array(
            'message'            => 'Page not found.',
            'exception'          => $e->getParam('exception'),
            'display_exceptions' => $this->displayExceptions(),
        );

        $content = $this->view->render('error/404.phtml', $vars);

        $e->setResult($content);

        return $this->renderLayout($e);
    }

    public function renderError(MvcEvent $e)
    {
        $error    = $e->getError();
        $app      = $e->getTarget();
        $response = $e->getResponse();
        if (!$response) {
            $response = new Response();
            $e->setResponse($response);
        }

        switch ($error) {
            case Application::ERROR_CONTROLLER_NOT_FOUND:
            case Application::ERROR_CONTROLLER_INVALID:
                $vars = array(
                    'message'            => 'Page not found.',
                    'exception'          => $e->getParam('exception'),
                    'display_exceptions' => $this->displayExceptions(),
                );
                $response->setStatusCode(404);
                break;

            case Application::ERROR_EXCEPTION:
            default:
                $exception = $e->getParam('exception');
                $vars = array(
                    'message'            => 'An error occurred during execution; please try again later.',
                    'exception'          => $e->getParam('exception'),
                    'display_exceptions' => $this->displayExceptions(),
                );
                $response->setStatusCode(500);
                break;
        }

        $content = $this->view->render('error/index.phtml', $vars);

        $e->setResult($content);

        return $this->renderLayout($e);
    }
}
