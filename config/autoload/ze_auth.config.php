<?php
/**
 * @author: Cosmin Harangus <cosmin@around25.com>
 * Date: 2012-01-09
 * Time: 11:28 PM
 */
return array(
    'ze_auth' => array(
        'restricted_routes'         => array(
            'core'  =>  array('default')
        ),
    ),
    'routes' => array(
        'ze_auth' => array(
            'type' => 'Literal',
            'priority' => 1000,
            'options' => array(
                'route' => '/auth',
                'defaults' => array(
                    'controller' => 'ze_auth',
                ),
            ),
            'may_terminate' => true,
            'child_routes' => array(
                'logout' => array(
                    'type' => 'Literal',
                    'options' => array(
                        'route' => '/logout',
                        'defaults' => array(
                            'controller' => 'ze_auth',
                            'action'     => 'logout',
                        ),
                    ),
                ),
                'register' => array(
                    'type' => 'Literal',
                    'options' => array(
                        'route' => '/register',
                        'defaults' => array(
                            'controller' => 'ze_auth',
                            'action'     => 'register',
                        ),
                    ),
                ),
            ),
        ),
    ),
);