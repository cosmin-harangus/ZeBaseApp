<?php return array (
  'di' => 
  array (
    'definition' => 
    array (
      'class' => 
      array (
        'ZeTwig\\View\\HelperFunction' => 
        array (
          '__construct' => 
          array (
            'name' => 
            array (
              'type' => NULL,
              'required' => true,
            ),
            'options' => 
            array (
              'type' => NULL,
              'required' => false,
            ),
          ),
          'setArguments' => 
          array (
            'arguments' => 
            array (
              'type' => NULL,
              'required' => true,
            ),
          ),
        ),
        'ZeTwig\\View\\Environment' => 
        array (
          '__construct' => 
          array (
            'loader' => 
            array (
              'type' => 'ZeTwig\\View\\Loader',
              'required' => false,
            ),
            'broker' => 
            array (
              'type' => 'Zend\\View\\HelperBroker',
              'required' => false,
            ),
            'options' => 
            array (
              'type' => NULL,
              'required' => false,
            ),
          ),
          'setEnvironmentOptions' => 
          array (
            'environment_options' => 
            array (
              'type' => NULL,
              'required' => true,
            ),
          ),
          'setBroker' => 
          array (
            'broker' => 
            array (
              'type' => NULL,
              'required' => true,
            ),
          ),
          'setBaseTemplateClass' => 
          array (
            'class' => 
            array (
              'type' => NULL,
              'required' => true,
            ),
          ),
          'setCache' => 
          array (
            'cache' => 
            array (
              'type' => NULL,
              'required' => true,
            ),
          ),
          'setLexer' => 
          array (
            'lexer' => 
            array (
              'type' => 'Twig_LexerInterface',
              'required' => true,
            ),
          ),
          'setParser' => 
          array (
            'parser' => 
            array (
              'type' => 'Twig_ParserInterface',
              'required' => true,
            ),
          ),
          'setCompiler' => 
          array (
            'compiler' => 
            array (
              'type' => 'Twig_CompilerInterface',
              'required' => true,
            ),
          ),
          'setLoader' => 
          array (
            'loader' => 
            array (
              'type' => 'Twig_LoaderInterface',
              'required' => true,
            ),
          ),
          'setCharset' => 
          array (
            'charset' => 
            array (
              'type' => NULL,
              'required' => true,
            ),
          ),
          'setExtensions' => 
          array (
            'extensions' => 
            array (
              'type' => NULL,
              'required' => true,
            ),
          ),
        ),
        'ZeTwig\\View\\Listener' => 
        array (
          '__construct' => 
          array (
            'renderer' => 
            array (
              'type' => 'Zend\\View\\Renderer',
              'required' => true,
            ),
            'layout' => 
            array (
              'type' => NULL,
              'required' => false,
            ),
          ),
          'setDisplayExceptionsFlag' => 
          array (
            'flag' => 
            array (
              'type' => NULL,
              'required' => true,
            ),
          ),
        ),
        'ZeTwig\\View\\Renderer' => 
        array (
          '__construct' => 
          array (
            'environment' => 
            array (
              'type' => 'ZeTwig\\View\\Environment',
              'required' => true,
            ),
            'config' => 
            array (
              'type' => NULL,
              'required' => false,
            ),
          ),
          'setEnvironmentOptions' => 
          array (
            'options' => 
            array (
              'type' => NULL,
              'required' => true,
            ),
          ),
          'setBroker' => 
          array (
            'broker' => 
            array (
              'type' => NULL,
              'required' => true,
            ),
          ),
          'setFilterChain' => 
          array (
            'filters' => 
            array (
              'type' => 'Zend\\Filter\\FilterChain',
              'required' => true,
            ),
          ),
        ),
        'ZeTwig\\View\\Loader' => 
        array (
          '__construct' => 
          array (
            'options' => 
            array (
              'type' => NULL,
              'required' => false,
            ),
          ),
          'setConfig' => 
          array (
            'config' => 
            array (
              'type' => NULL,
              'required' => true,
            ),
          ),
          'setOptions' => 
          array (
            'options' => 
            array (
              'type' => NULL,
              'required' => true,
            ),
          ),
          'setPaths' => 
          array (
            'paths' => 
            array (
              'type' => NULL,
              'required' => true,
            ),
          ),
          'setLfiProtection' => 
          array (
            'flag' => 
            array (
              'type' => NULL,
              'required' => true,
            ),
          ),
          'setUseStreamWrapper' => 
          array (
            'flag' => 
            array (
              'type' => NULL,
              'required' => true,
            ),
          ),
        ),
      ),
    ),
  ),
);