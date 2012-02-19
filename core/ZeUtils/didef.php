<?php
require_once __DIR__ . '/../../public/bootstrap.php';
$DIR = __DIR__;

// in "package name" format
unset($argv[0]);
$components = $argv;

foreach ($components as $component) {
    $namespaces = explode('\\', $component);
    $module = $namespaces[0];
    $diCompiler = new Zend\Di\Definition\CompilerDefinition;
    $diCompiler->addDirectory($DIR .'/../'.$module.'/src/' . str_replace('\\', '/', $component));

    $diCompiler->compile();
    file_put_contents(
        __DIR__ . '/../'.$module.'/config/' . 'module.di.config.php',
        '<?php return ' . var_export(array(
                'di'=>array(
                    'definition'=>array(
                        'class'=> $diCompiler->toArrayDefinition()->toArray()
                    )
                )
            ), true
        ) . ';'
    );
}