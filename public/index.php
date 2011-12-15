<?php
# Set error reporting and default timezone
error_reporting(E_ALL);
ini_set('display_errors','on');

date_default_timezone_set('Europe/Helsinki');

# Define application environment
defined('APPLICATION_ENV')
    || define('APPLICATION_ENV', (getenv('APPLICATION_ENV') ? getenv('APPLICATION_ENV') : 'production'));

# Set up autoloading for the Zend Framework and ProjectQuery
require_once dirname(__DIR__) . '/vendor/ZendFramework/library/Zend/Loader/AutoloaderFactory.php';
$loader = Zend\Loader\AutoloaderFactory::factory(array('Zend\Loader\StandardAutoloader' => array()));

switch(APPLICATION_ENV){
    case 'production':
        $loader = new Zend\Loader\ClassMapAutoloader();
        $loader->registerAutoloadMap(dirname(__DIR__) . '/vendor/ProjectQuery/library/classmap.php');
        $loader->register();
        break;
    default:
        $loader = new Zend\Loader\StandardAutoloader();
        $loader->registerNamespace('Pq',dirname(__DIR__) . '/vendor/ProjectQuery/library/');
        $loader->register();
}

# Autoload modules based on main configuration file
$appConfig = include dirname(__DIR__) . '/config/application.config.php';
$moduleLoader = new Zend\Loader\ModuleAutoloader($appConfig['module_paths']);
$moduleLoader->register();

# Load modules
$moduleManager = new Zend\Module\Manager($appConfig['modules']);
$listenerOptions = new Zend\Module\Listener\ListenerOptions($appConfig['module_listener_options']);
$moduleManager->setDefaultListenerOptions($listenerOptions);
$moduleManager->getConfigListener()->addConfigGlobPath(dirname(__DIR__) . '/config/autoload/*.config.php');
$moduleManager->loadModules();

# Create application, bootstrap, and run
$bootstrap   = new Zend\Mvc\Bootstrap($moduleManager->getMergedConfig());
$application = new Zend\Mvc\Application;
$bootstrap->bootstrap($application);
$application->run()->send();