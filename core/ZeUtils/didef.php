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
    $classes = $diCompiler->toArrayDefinition()->toArray();
    $definitions = array();
    foreach($classes as $kclass =>$class){
        $definition = array(
//            'supertypes' => $class['supertypes'],
//            'instantiator' => $class['instantiator'],
//            'methods' => $class['methods'],
        );
        $parameters = array();
        foreach( $class['parameters'] as $kparams => $params){
            $param = array();
            foreach ($params as $k=>$v) {
                $param[$v[0]] = array(
                    'type'=> $v[1],
                    'required'=> $v[2],
                );
            }
            $parameters[$kparams] = $param;
        }
//        $definition['parameters'] = $parameters;
        $definitions[$kclass] = $parameters;
    }
    file_put_contents(
        __DIR__ . '/../'.$module.'/config/' . 'module.di.config.php',
        '<?php return ' . var_export(array(
                'di'=>array(
                    'definition'=>array(
                        'class'=> $definitions
                    )
                )
            ), true
        ) . ';'
    );
}