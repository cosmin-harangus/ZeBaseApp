<?php return array (
  'Core\\Controller\\IndexController' => 
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
        'Core\\Controller\\IndexController::setEventManager:0' => 
        array (
          0 => 'events',
          1 => 'Zend\\EventManager\\EventCollection',
          2 => true,
        ),
      ),
      'setEvent' => 
      array (
        'Core\\Controller\\IndexController::setEvent:0' => 
        array (
          0 => 'e',
          1 => 'Zend\\EventManager\\EventDescription',
          2 => true,
        ),
      ),
      'setLocator' => 
      array (
        'Core\\Controller\\IndexController::setLocator:0' => 
        array (
          0 => 'locator',
          1 => 'Zend\\Di\\Locator',
          2 => true,
        ),
      ),
      'setBroker' => 
      array (
        'Core\\Controller\\IndexController::setBroker:0' => 
        array (
          0 => 'broker',
          1 => NULL,
          2 => true,
        ),
      ),
    ),
  ),
  'Core\\Controller\\ErrorController' => 
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
        'Core\\Controller\\ErrorController::setEventManager:0' => 
        array (
          0 => 'events',
          1 => 'Zend\\EventManager\\EventCollection',
          2 => true,
        ),
      ),
      'setEvent' => 
      array (
        'Core\\Controller\\ErrorController::setEvent:0' => 
        array (
          0 => 'e',
          1 => 'Zend\\EventManager\\EventDescription',
          2 => true,
        ),
      ),
      'setLocator' => 
      array (
        'Core\\Controller\\ErrorController::setLocator:0' => 
        array (
          0 => 'locator',
          1 => 'Zend\\Di\\Locator',
          2 => true,
        ),
      ),
      'setBroker' => 
      array (
        'Core\\Controller\\ErrorController::setBroker:0' => 
        array (
          0 => 'broker',
          1 => NULL,
          2 => true,
        ),
      ),
    ),
  ),
);