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
    'di' => array(
        'instance'=>array(
            'Zend\Db\Adapter\PdoMysql' => array(
                'parameters' => array(
                    'config' => array(
                        'host' => 'localhost',
                        'username' => 'root',
                        'password' => 'root',
                        'dbname' => 'projectquery',
                    ),
                ),
            ),
        )
    )
);