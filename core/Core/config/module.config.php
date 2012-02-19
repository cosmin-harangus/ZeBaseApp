<?php
return array(
    'layout'                => 'layouts/layout',
    'display_exceptions'    => true,
    'di'                    => array(
        'instance' => array(
            'alias' => array(
                'core-index' => 'Core\Controller\IndexController',
                'core-error' => 'Core\Controller\ErrorController',
            ),
            'ZeTwig\View\Loader'=>array(
                'parameters' => array(
                    'paths'=> array(
                        'core'=>__DIR__.'/../views/'
                    )
                )
            ),
            'Zend\Mvc\Router\RouteStack' => array(
                'parameters' => array(
                    'routes' => array(
                        'default' => array(
                            'type'    => 'Zend\Mvc\Router\Http\Segment',
                            'options' => array(
                                'route'    => '/[:controller[/:action]]',
                                'constraints' => array(
                                    'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                    'action'     => '[a-zA-Z][a-zA-Z0-9_-]*',
                                ),
                                'defaults' => array(
                                    'controller' => 'core-index',
                                    'action'     => 'index',
                                ),
                            ),
                        ),
                        'home' => array(
                            'type' => 'Zend\Mvc\Router\Http\Literal',
                            'options' => array(
                                'route'    => '/',
                                'defaults' => array(
                                    'controller' => 'core-index',
                                    'action'     => 'index',
                                ),
                            ),
                        ),
                    ),
                ),
            ),
        ),
    ),
);
