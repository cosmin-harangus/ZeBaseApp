<?php
return array(
    'layout'                => '@tpl.root',
    'ze_twig' => array(
        'alias'=>array(
            '@tpl.root'             => 'layouts/main',
            '@tpl.root_one_column'  => 'layouts/main_one_column',
            '@tpl.root_two_columns' => 'layouts/main_two_columns',
        ),
    ),
    'di'                    => array(
        'instance' => array(
            'ZeTwig\View\Loader'=>array(
                'parameters' => array(
                    'paths'=> array(
                        'default_tpl'=>__DIR__.'/../views/'
                    )
                )
            ),
        ),
    ),
);
