<?php
return array(
    'ze_auth' => array(
        'user_model_class'          => 'ZeAuth\Model\User',
        'identity_type'             => 'username', //username, email_address, both
        'remember_me'               => false,//60*60*24*2,
        'enable_display_name'       => false,
        'require_activation'        => true,
        'login_after_registration'  => true,
        'registration_form_captcha' => true,
        'password_hash_algorithm'   => 'sha1', // sha1, md5, blowfish, sha512, sha256
    ),
    'routes' => array(
        'ze_auth' => array(
            'type' => 'Literal',
            'priority' => 1000,
            'options' => array(
                'route' => '/auth',
                'defaults' => array(
                    'controller' => 'auth',
                ),
            ),
            'may_terminate' => true,
            'child_routes' => array(
                'logout' => array(
                    'type' => 'Literal',
                    'options' => array(
                        'route' => '/logout',
                        'defaults' => array(
                            'controller' => 'auth',
                            'action'     => 'logout',
                        ),
                    ),
                ),
                'register' => array(
                    'type' => 'Literal',
                    'options' => array(
                        'route' => '/register',
                        'defaults' => array(
                            'controller' => 'auth',
                            'action'     => 'register',
                        ),
                    ),
                ),
            ),
        ),
    ),
    'di' => array(
        'instance' => array(
            'alias' => array(
                'auth'                  => 'ZeAuth\Controller\AuthController',
                'ze_auth_form_login'    => 'ZeAuth\Form\Login',
                'ze_auth_service_auth'  => 'ZeAuth\Service\Auth',

                'ze_auth_mapper_user'   => 'ZeAuth\Db\Mapper\User',
                'ze_auth_model_user'    => 'ZeAuth\Db\Model\User',
                'ze_auth_crypt'         => 'ZeAuth\Crypt',
                'ze_auth_db'            => 'Zend\Db\Adapter\PdoMysql',
            ),
            'Zend\Db\Adapter\PdoMysql' => array(
                'parameters' => array(
                    'config' => array(
                        'host' => 'localhost',
                        'username' => 'root',
                        'password' => '',
                        'dbname' => 'projectquery',
                    ),
                ),
            ),
            'Zend\View\PhpRenderer' => array(
                'parameters' => array(
                    'options'  => array(
                        'script_paths' => array(
                            'ze_auth' => __DIR__ . '/../views',
                        ),
                    ),
//                    'broker' => 'Zend\View\HelperBroker',
                ),
            ),
//            'Zend\View\HelperBroker' => array(
//                'parameters' => array(
//                    'loader' => 'Zend\View\HelperLoader',
//                ),
//            ),
//            'Zend\View\HelperLoader' => array(
//                'parameters' => array(
//                    'map' => array(
//                        'user'        => 'ZeAuth\View\Helper\User',
//                    ),
//                ),
//            ),
//            'ZeAuth\View\Helper\User' => array(
//                'parameters' => array(
//
//                ),
//            ),
        ),
    ),
);