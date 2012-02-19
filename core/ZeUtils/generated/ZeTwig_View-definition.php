<?php return array (
  'ZeTwig\\View\\HelperFunction' => 
  array (
    'supertypes' => 
    array (
    ),
    'instantiator' => '__construct',
    'methods' => 
    array (
      '__construct' => true,
      'setArguments' => false,
    ),
    'parameters' => 
    array (
      '__construct' => 
      array (
        'ZeTwig\\View\\HelperFunction::__construct:0' => 
        array (
          0 => 'name',
          1 => NULL,
          2 => true,
        ),
        'ZeTwig\\View\\HelperFunction::__construct:1' => 
        array (
          0 => 'options',
          1 => NULL,
          2 => false,
        ),
      ),
      'setArguments' => 
      array (
        'ZeTwig\\View\\HelperFunction::setArguments:0' => 
        array (
          0 => 'arguments',
          1 => NULL,
          2 => true,
        ),
      ),
    ),
  ),
  'ZeTwig\\View\\Environment' => 
  array (
    'supertypes' => 
    array (
    ),
    'instantiator' => '__construct',
    'methods' => 
    array (
      '__construct' => true,
      'setEnvironmentOptions' => false,
      'setBroker' => false,
      'setBaseTemplateClass' => false,
      'setCache' => false,
      'setLexer' => false,
      'setParser' => false,
      'setCompiler' => false,
      'setLoader' => false,
      'setCharset' => false,
      'setExtensions' => false,
    ),
    'parameters' => 
    array (
      '__construct' => 
      array (
        'ZeTwig\\View\\Environment::__construct:0' => 
        array (
          0 => 'loader',
          1 => 'ZeTwig\\View\\Loader',
          2 => false,
        ),
        'ZeTwig\\View\\Environment::__construct:1' => 
        array (
          0 => 'broker',
          1 => 'Zend\\View\\HelperBroker',
          2 => false,
        ),
        'ZeTwig\\View\\Environment::__construct:2' => 
        array (
          0 => 'options',
          1 => NULL,
          2 => false,
        ),
      ),
      'setEnvironmentOptions' => 
      array (
        'ZeTwig\\View\\Environment::setEnvironmentOptions:0' => 
        array (
          0 => 'environment_options',
          1 => NULL,
          2 => true,
        ),
      ),
      'setBroker' => 
      array (
        'ZeTwig\\View\\Environment::setBroker:0' => 
        array (
          0 => 'broker',
          1 => NULL,
          2 => true,
        ),
      ),
      'setBaseTemplateClass' => 
      array (
        'ZeTwig\\View\\Environment::setBaseTemplateClass:0' => 
        array (
          0 => 'class',
          1 => NULL,
          2 => true,
        ),
      ),
      'setCache' => 
      array (
        'ZeTwig\\View\\Environment::setCache:0' => 
        array (
          0 => 'cache',
          1 => NULL,
          2 => true,
        ),
      ),
      'setLexer' => 
      array (
        'ZeTwig\\View\\Environment::setLexer:0' => 
        array (
          0 => 'lexer',
          1 => 'Twig_LexerInterface',
          2 => true,
        ),
      ),
      'setParser' => 
      array (
        'ZeTwig\\View\\Environment::setParser:0' => 
        array (
          0 => 'parser',
          1 => 'Twig_ParserInterface',
          2 => true,
        ),
      ),
      'setCompiler' => 
      array (
        'ZeTwig\\View\\Environment::setCompiler:0' => 
        array (
          0 => 'compiler',
          1 => 'Twig_CompilerInterface',
          2 => true,
        ),
      ),
      'setLoader' => 
      array (
        'ZeTwig\\View\\Environment::setLoader:0' => 
        array (
          0 => 'loader',
          1 => 'Twig_LoaderInterface',
          2 => true,
        ),
      ),
      'setCharset' => 
      array (
        'ZeTwig\\View\\Environment::setCharset:0' => 
        array (
          0 => 'charset',
          1 => NULL,
          2 => true,
        ),
      ),
      'setExtensions' => 
      array (
        'ZeTwig\\View\\Environment::setExtensions:0' => 
        array (
          0 => 'extensions',
          1 => NULL,
          2 => true,
        ),
      ),
    ),
  ),
  'ZeTwig\\View\\Listener' => 
  array (
    'supertypes' => 
    array (
    ),
    'instantiator' => '__construct',
    'methods' => 
    array (
      '__construct' => true,
      'setDisplayExceptionsFlag' => false,
    ),
    'parameters' => 
    array (
      '__construct' => 
      array (
        'ZeTwig\\View\\Listener::__construct:0' => 
        array (
          0 => 'renderer',
          1 => 'Zend\\View\\Renderer',
          2 => true,
        ),
        'ZeTwig\\View\\Listener::__construct:1' => 
        array (
          0 => 'layout',
          1 => NULL,
          2 => false,
        ),
      ),
      'setDisplayExceptionsFlag' => 
      array (
        'ZeTwig\\View\\Listener::setDisplayExceptionsFlag:0' => 
        array (
          0 => 'flag',
          1 => NULL,
          2 => true,
        ),
      ),
    ),
  ),
  'ZeTwig\\View\\Renderer' => 
  array (
    'supertypes' => 
    array (
    ),
    'instantiator' => '__construct',
    'methods' => 
    array (
      '__construct' => true,
      'setEnvironmentOptions' => false,
      'setBroker' => false,
      'setFilterChain' => false,
    ),
    'parameters' => 
    array (
      '__construct' => 
      array (
        'ZeTwig\\View\\Renderer::__construct:0' => 
        array (
          0 => 'environment',
          1 => 'ZeTwig\\View\\Environment',
          2 => true,
        ),
        'ZeTwig\\View\\Renderer::__construct:1' => 
        array (
          0 => 'config',
          1 => NULL,
          2 => false,
        ),
      ),
      'setEnvironmentOptions' => 
      array (
        'ZeTwig\\View\\Renderer::setEnvironmentOptions:0' => 
        array (
          0 => 'options',
          1 => NULL,
          2 => true,
        ),
      ),
      'setBroker' => 
      array (
        'ZeTwig\\View\\Renderer::setBroker:0' => 
        array (
          0 => 'broker',
          1 => NULL,
          2 => true,
        ),
      ),
      'setFilterChain' => 
      array (
        'ZeTwig\\View\\Renderer::setFilterChain:0' => 
        array (
          0 => 'filters',
          1 => 'Zend\\Filter\\FilterChain',
          2 => true,
        ),
      ),
    ),
  ),
  'ZeTwig\\View\\Loader' => 
  array (
    'supertypes' => 
    array (
    ),
    'instantiator' => '__construct',
    'methods' => 
    array (
      '__construct' => true,
      'setConfig' => false,
      'setOptions' => false,
      'setPaths' => false,
      'setLfiProtection' => false,
      'setUseStreamWrapper' => false,
    ),
    'parameters' => 
    array (
      '__construct' => 
      array (
        'ZeTwig\\View\\Loader::__construct:0' => 
        array (
          0 => 'options',
          1 => NULL,
          2 => false,
        ),
      ),
      'setConfig' => 
      array (
        'ZeTwig\\View\\Loader::setConfig:0' => 
        array (
          0 => 'config',
          1 => NULL,
          2 => true,
        ),
      ),
      'setOptions' => 
      array (
        'ZeTwig\\View\\Loader::setOptions:0' => 
        array (
          0 => 'options',
          1 => NULL,
          2 => true,
        ),
      ),
      'setPaths' => 
      array (
        'ZeTwig\\View\\Loader::setPaths:0' => 
        array (
          0 => 'paths',
          1 => NULL,
          2 => true,
        ),
      ),
      'setLfiProtection' => 
      array (
        'ZeTwig\\View\\Loader::setLfiProtection:0' => 
        array (
          0 => 'flag',
          1 => NULL,
          2 => true,
        ),
      ),
      'setUseStreamWrapper' => 
      array (
        'ZeTwig\\View\\Loader::setUseStreamWrapper:0' => 
        array (
          0 => 'flag',
          1 => NULL,
          2 => true,
        ),
      ),
    ),
  ),
);