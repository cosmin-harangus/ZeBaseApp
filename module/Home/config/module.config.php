<?php
return array(
    'layout'                => 'layouts/layout.phtml',
    'display_exceptions'    => true,
    'di'                    => array(
        'instance' => array(
            'alias' => array(
                'index' => 'Home\Controller\IndexController',
                'auth' => 'Home\Controller\AuthController',
                'error' => 'Home\Controller\ErrorController',
                '_view'  => 'Pq\View\Renderer\DefaultRenderer',
                '_db'  => 'Zend\Db\Adapter\Mysqli',
            ),
            'Zend\Db\Adapter\Mysqli' => array(
                'parameters' => array(
                    'config' => array(
                        'host' => 'localhost',
                        'username' => 'root',
                        'password' => '',
                        'dbname' => 'projectquery',
                    ),
                ),
            ),
            'Pq\View\Renderer\DefaultRenderer' => array(
                'parameters' => array(
                    'resolver' => 'Zend\View\TemplatePathStack',
                    'options'  => array(
                        'script_paths' => array(
                            'application' => __DIR__ . '/../views',
                        ),
                    ),
                ),
            ),
        ),
    ),
    'routes' => array(
        'default' => array(
            'type'    => 'Zend\Mvc\Router\Http\Segment',
            'options' => array(
                'route'    => '/[:controller[/][:action][/]]',
                'constraints' => array(
                    'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                    'action'     => '[a-zA-Z][a-zA-Z0-9_-]*',
                ),
                'defaults' => array(
                    'controller' => 'index',
                    'action'     => 'index',
                ),
            ),
        ),
        'home' => array(
            'type' => 'Zend\Mvc\Router\Http\Literal',
            'options' => array(
                'route'    => '/',
                'defaults' => array(
                    'controller' => 'index',
                    'action'     => 'index',
                ),
            ),
        ),
    ),
);
