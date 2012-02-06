<?php
return array(
    'display_exceptions'    => true,
    'di'                    => array(
        'instance' => array(
            'alias' => array(
                'view'  => 'ZeTwig\View\Renderer',
            ),
            'ZeTwig\View\Renderer' => array(
                'parameters' => array(
                    'environment'=>'ZeTwig\View\Environment',
                ),
            ),
            'ZeTwig\View\Environment'=>array(
                'parameters' => array(
                    'loader' => 'ZeTwig\View\Loader',
                    'broker' => 'Zend\View\HelperBroker',
                    'options' => array(
                        'cache' => BASE_PATH . '/data/cache/twig',
                        'auto_reload' => true,
                        'debug' => true
                    ),
                ),
            ),
            'ZeTwig\View\Loader'=>array(
                'parameters' => array(
                    'paths'=> array()
                )
            ),
        ),
    ),
);
