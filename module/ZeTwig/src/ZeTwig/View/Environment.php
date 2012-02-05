<?php
/**
 * This file is part of ZeTwig
 *
 * (c) 2012 Cosmin Harangus <cosmin@zendexperts.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace ZeTwig\View;
use Twig_Environment,
    Twig_Function_Function as TwigFunction,
    Zend\View\HelperBroker,
    ZeTwig\View\HelperFunction,
    ZeTwig\View\Loader;

/**
 * ZeTwig Environment class
 * @package ZeTwig
 * @author Cosmin Harangus <cosmin@zendexperts.com>
 */
class Environment extends Twig_Environment
{
    protected $_broker = null;

    public function __construct(Loader $loader = null, HelperBroker $broker = null, $options = array())
    {
        $this->_broker = $broker;
        parent::__construct($loader, $options);
    }

    public function getBroker()
    {
        if (null === $this->_broker){
            $this->_broker = new HelperBroker();
        }
        return $this->_broker;
    }

    public function plugin($name)
    {
        $helper = $this->_broker->load($name,array());
        return $helper;
    }

    /**
     * @param string $name
     * @return bool|\false|\Twig_Function
     */
    public function getFunction($name)
    {
        //try to get the function from the environment itself
        $function = parent::getFunction($name);
        if (false !== $function){
            return $function;
        }

        //if not found, try to get it from  the broker and define it in the environment for later usage
        try{
            $helper = $this->_broker->load($name,array());
            if (null !== $helper){
                $function = new HelperFunction($name);
                $this->addFunction($name, $function);
                return $function;
            }
        }catch(\Exception $exception){
            // ignore the exception and try to use a defined PHP function
        }

        // return any PHP function or any of the defined valid PHP constructs
        $constructs = array('isset', 'empty');
        if ( function_exists($name) || in_array($name, $constructs) ) {
            $function = new TwigFunction($name);
            $this->addFunction($name, $function);
            return $function;
        }

        // no function found
        return false;
    }
}
