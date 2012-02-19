<?php return array (
  'ZeAuth\\Crypt' => 
  array (
    'supertypes' => 
    array (
    ),
    'instantiator' => '__construct',
    'methods' => 
    array (
    ),
    'parameters' => 
    array (
    ),
  ),
  'ZeAuth\\Exception' => 
  array (
    'supertypes' => 
    array (
    ),
    'instantiator' => '__construct',
    'methods' => 
    array (
      '__construct' => true,
    ),
    'parameters' => 
    array (
      '__construct' => 
      array (
        'ZeAuth\\Exception::__construct:0' => 
        array (
          0 => 'message',
          1 => NULL,
          2 => false,
        ),
        'ZeAuth\\Exception::__construct:1' => 
        array (
          0 => 'code',
          1 => NULL,
          2 => false,
        ),
        'ZeAuth\\Exception::__construct:2' => 
        array (
          0 => 'previous',
          1 => NULL,
          2 => false,
        ),
      ),
    ),
  ),
  'ZeAuth\\Event\\Listener' => 
  array (
    'supertypes' => 
    array (
    ),
    'instantiator' => '__construct',
    'methods' => 
    array (
    ),
    'parameters' => 
    array (
    ),
  ),
  'ZeAuth\\Db\\Model' => 
  array (
    'supertypes' => 
    array (
    ),
    'instantiator' => NULL,
    'methods' => 
    array (
    ),
    'parameters' => 
    array (
    ),
  ),
  'ZeAuth\\Db\\Mapper\\User' => 
  array (
    'supertypes' => 
    array (
    ),
    'instantiator' => '__construct',
    'methods' => 
    array (
      '__construct' => true,
      'setLastLogin' => false,
    ),
    'parameters' => 
    array (
      '__construct' => 
      array (
        'ZeAuth\\Db\\Mapper\\User::__construct:0' => 
        array (
          0 => 'config',
          1 => NULL,
          2 => true,
        ),
      ),
      'setLastLogin' => 
      array (
        'ZeAuth\\Db\\Mapper\\User::setLastLogin:0' => 
        array (
          0 => 'date',
          1 => NULL,
          2 => false,
        ),
      ),
    ),
  ),
  'ZeAuth\\Db\\Model\\User' => 
  array (
    'supertypes' => 
    array (
    ),
    'instantiator' => '__construct',
    'methods' => 
    array (
    ),
    'parameters' => 
    array (
    ),
  ),
  'ZeAuth\\Db\\Mapper' => 
  array (
    'supertypes' => 
    array (
    ),
    'instantiator' => NULL,
    'methods' => 
    array (
      'setLastLogin' => false,
    ),
    'parameters' => 
    array (
      'setLastLogin' => 
      array (
        'ZeAuth\\Db\\Mapper::setLastLogin:0' => 
        array (
          0 => 'date',
          1 => NULL,
          2 => true,
        ),
      ),
    ),
  ),
  'ZeAuth\\Service\\Auth' => 
  array (
    'supertypes' => 
    array (
    ),
    'instantiator' => '__construct',
    'methods' => 
    array (
      'setEventManager' => false,
    ),
    'parameters' => 
    array (
      'setEventManager' => 
      array (
        'ZeAuth\\Service\\Auth::setEventManager:0' => 
        array (
          0 => 'events',
          1 => 'Zend\\EventManager\\EventCollection',
          2 => true,
        ),
      ),
    ),
  ),
  'ZeAuth\\Controller\\AuthController' => 
  array (
    'supertypes' => 
    array (
    ),
    'instantiator' => '__construct',
    'methods' => 
    array (
      'setEventManager' => false,
      'setEvent' => false,
      'setLocator' => true,
      'setBroker' => false,
      'getLocator' => true,
    ),
    'parameters' => 
    array (
      'setEventManager' => 
      array (
        'ZeAuth\\Controller\\AuthController::setEventManager:0' => 
        array (
          0 => 'events',
          1 => 'Zend\\EventManager\\EventCollection',
          2 => true,
        ),
      ),
      'setEvent' => 
      array (
        'ZeAuth\\Controller\\AuthController::setEvent:0' => 
        array (
          0 => 'e',
          1 => 'Zend\\EventManager\\EventDescription',
          2 => true,
        ),
      ),
      'setLocator' => 
      array (
        'ZeAuth\\Controller\\AuthController::setLocator:0' => 
        array (
          0 => 'locator',
          1 => 'Zend\\Di\\Locator',
          2 => true,
        ),
      ),
      'setBroker' => 
      array (
        'ZeAuth\\Controller\\AuthController::setBroker:0' => 
        array (
          0 => 'broker',
          1 => NULL,
          2 => true,
        ),
      ),
    ),
  ),
  'ZeAuth\\Form\\Login' => 
  array (
    'supertypes' => 
    array (
    ),
    'instantiator' => '__construct',
    'methods' => 
    array (
      '__construct' => true,
      'setOptions' => false,
      'setConfig' => false,
      'setPluginLoader' => false,
      'setAttrib' => false,
      'setAttribs' => false,
      'setAction' => false,
      'setMethod' => false,
      'setEnctype' => false,
      'setName' => false,
      'setLegend' => false,
      'setDescription' => false,
      'setOrder' => false,
      'setElements' => false,
      'setDefaults' => false,
      'setDefault' => false,
      'setElementFilters' => false,
      'setElementsBelongTo' => false,
      'setIsArray' => false,
      'setSubForms' => false,
      'setDefaultDisplayGroupClass' => false,
      'setDisplayGroups' => false,
      'setErrorMessages' => false,
      'setErrors' => false,
      'setView' => false,
      'setDecorators' => false,
      'setElementDecorators' => false,
      'setDisplayGroupDecorators' => false,
      'setSubFormDecorators' => false,
      'setTranslator' => false,
      'setDefaultTranslator' => false,
      'setDisableTranslator' => false,
      'setDisableLoadDefaultDecorators' => false,
    ),
    'parameters' => 
    array (
      '__construct' => 
      array (
        'ZeAuth\\Form\\Login::__construct:0' => 
        array (
          0 => 'options',
          1 => NULL,
          2 => false,
        ),
      ),
      'setOptions' => 
      array (
        'ZeAuth\\Form\\Login::setOptions:0' => 
        array (
          0 => 'options',
          1 => NULL,
          2 => true,
        ),
      ),
      'setConfig' => 
      array (
        'ZeAuth\\Form\\Login::setConfig:0' => 
        array (
          0 => 'config',
          1 => 'Zend\\Config\\Config',
          2 => true,
        ),
      ),
      'setPluginLoader' => 
      array (
        'ZeAuth\\Form\\Login::setPluginLoader:0' => 
        array (
          0 => 'loader',
          1 => 'Zend\\Loader\\PrefixPathMapper',
          2 => true,
        ),
        'ZeAuth\\Form\\Login::setPluginLoader:1' => 
        array (
          0 => 'type',
          1 => NULL,
          2 => false,
        ),
      ),
      'setAttrib' => 
      array (
        'ZeAuth\\Form\\Login::setAttrib:0' => 
        array (
          0 => 'key',
          1 => NULL,
          2 => true,
        ),
        'ZeAuth\\Form\\Login::setAttrib:1' => 
        array (
          0 => 'value',
          1 => NULL,
          2 => true,
        ),
      ),
      'setAttribs' => 
      array (
        'ZeAuth\\Form\\Login::setAttribs:0' => 
        array (
          0 => 'attribs',
          1 => NULL,
          2 => true,
        ),
      ),
      'setAction' => 
      array (
        'ZeAuth\\Form\\Login::setAction:0' => 
        array (
          0 => 'action',
          1 => NULL,
          2 => true,
        ),
      ),
      'setMethod' => 
      array (
        'ZeAuth\\Form\\Login::setMethod:0' => 
        array (
          0 => 'method',
          1 => NULL,
          2 => true,
        ),
      ),
      'setEnctype' => 
      array (
        'ZeAuth\\Form\\Login::setEnctype:0' => 
        array (
          0 => 'value',
          1 => NULL,
          2 => true,
        ),
      ),
      'setName' => 
      array (
        'ZeAuth\\Form\\Login::setName:0' => 
        array (
          0 => 'name',
          1 => NULL,
          2 => true,
        ),
      ),
      'setLegend' => 
      array (
        'ZeAuth\\Form\\Login::setLegend:0' => 
        array (
          0 => 'value',
          1 => NULL,
          2 => true,
        ),
      ),
      'setDescription' => 
      array (
        'ZeAuth\\Form\\Login::setDescription:0' => 
        array (
          0 => 'value',
          1 => NULL,
          2 => true,
        ),
      ),
      'setOrder' => 
      array (
        'ZeAuth\\Form\\Login::setOrder:0' => 
        array (
          0 => 'index',
          1 => NULL,
          2 => true,
        ),
      ),
      'setElements' => 
      array (
        'ZeAuth\\Form\\Login::setElements:0' => 
        array (
          0 => 'elements',
          1 => NULL,
          2 => true,
        ),
      ),
      'setDefaults' => 
      array (
        'ZeAuth\\Form\\Login::setDefaults:0' => 
        array (
          0 => 'defaults',
          1 => NULL,
          2 => true,
        ),
      ),
      'setDefault' => 
      array (
        'ZeAuth\\Form\\Login::setDefault:0' => 
        array (
          0 => 'name',
          1 => NULL,
          2 => true,
        ),
        'ZeAuth\\Form\\Login::setDefault:1' => 
        array (
          0 => 'value',
          1 => NULL,
          2 => true,
        ),
      ),
      'setElementFilters' => 
      array (
        'ZeAuth\\Form\\Login::setElementFilters:0' => 
        array (
          0 => 'filters',
          1 => NULL,
          2 => true,
        ),
      ),
      'setElementsBelongTo' => 
      array (
        'ZeAuth\\Form\\Login::setElementsBelongTo:0' => 
        array (
          0 => 'array',
          1 => NULL,
          2 => true,
        ),
      ),
      'setIsArray' => 
      array (
        'ZeAuth\\Form\\Login::setIsArray:0' => 
        array (
          0 => 'flag',
          1 => NULL,
          2 => true,
        ),
      ),
      'setSubForms' => 
      array (
        'ZeAuth\\Form\\Login::setSubForms:0' => 
        array (
          0 => 'subForms',
          1 => NULL,
          2 => true,
        ),
      ),
      'setDefaultDisplayGroupClass' => 
      array (
        'ZeAuth\\Form\\Login::setDefaultDisplayGroupClass:0' => 
        array (
          0 => 'class',
          1 => NULL,
          2 => true,
        ),
      ),
      'setDisplayGroups' => 
      array (
        'ZeAuth\\Form\\Login::setDisplayGroups:0' => 
        array (
          0 => 'groups',
          1 => NULL,
          2 => true,
        ),
      ),
      'setErrorMessages' => 
      array (
        'ZeAuth\\Form\\Login::setErrorMessages:0' => 
        array (
          0 => 'messages',
          1 => NULL,
          2 => true,
        ),
      ),
      'setErrors' => 
      array (
        'ZeAuth\\Form\\Login::setErrors:0' => 
        array (
          0 => 'messages',
          1 => NULL,
          2 => true,
        ),
      ),
      'setView' => 
      array (
        'ZeAuth\\Form\\Login::setView:0' => 
        array (
          0 => 'view',
          1 => 'Zend\\View\\Renderer',
          2 => false,
        ),
      ),
      'setDecorators' => 
      array (
        'ZeAuth\\Form\\Login::setDecorators:0' => 
        array (
          0 => 'decorators',
          1 => NULL,
          2 => true,
        ),
      ),
      'setElementDecorators' => 
      array (
        'ZeAuth\\Form\\Login::setElementDecorators:0' => 
        array (
          0 => 'decorators',
          1 => NULL,
          2 => true,
        ),
        'ZeAuth\\Form\\Login::setElementDecorators:1' => 
        array (
          0 => 'elements',
          1 => NULL,
          2 => false,
        ),
        'ZeAuth\\Form\\Login::setElementDecorators:2' => 
        array (
          0 => 'include',
          1 => NULL,
          2 => false,
        ),
      ),
      'setDisplayGroupDecorators' => 
      array (
        'ZeAuth\\Form\\Login::setDisplayGroupDecorators:0' => 
        array (
          0 => 'decorators',
          1 => NULL,
          2 => true,
        ),
      ),
      'setSubFormDecorators' => 
      array (
        'ZeAuth\\Form\\Login::setSubFormDecorators:0' => 
        array (
          0 => 'decorators',
          1 => NULL,
          2 => true,
        ),
      ),
      'setTranslator' => 
      array (
        'ZeAuth\\Form\\Login::setTranslator:0' => 
        array (
          0 => 'translator',
          1 => NULL,
          2 => false,
        ),
      ),
      'setDefaultTranslator' => 
      array (
        'ZeAuth\\Form\\Login::setDefaultTranslator:0' => 
        array (
          0 => 'translator',
          1 => NULL,
          2 => false,
        ),
      ),
      'setDisableTranslator' => 
      array (
        'ZeAuth\\Form\\Login::setDisableTranslator:0' => 
        array (
          0 => 'flag',
          1 => NULL,
          2 => true,
        ),
      ),
      'setDisableLoadDefaultDecorators' => 
      array (
        'ZeAuth\\Form\\Login::setDisableLoadDefaultDecorators:0' => 
        array (
          0 => 'flag',
          1 => NULL,
          2 => true,
        ),
      ),
    ),
  ),
);