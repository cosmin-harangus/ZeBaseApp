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

use Zend\View\Renderer as ViewRenderer,
    ZeTwig\View\Environment;

/**
 * ZeTwig Renderer
 * @package ZeTwig
 * @author Cosmin Harangus <cosmin@zendexperts.com>
 */
class Renderer implements ViewRenderer
{
    private $_environment = null;
    /**
     * @param \ZeTwig\View\Environment $environment
     */
    public function __construct(Environment $environment)
    {
        $this->_environment = $environment;
    }

    /**
     * Return the template engine object, if any
     *
     * @return \ZeTwig\View\Renderer
     */
    public function getEngine()
    {
        return $this;
    }

    public function plugin($name)
    {
        return $this->_environment->plugin($name);
    }

    /**
     * Processes a view template and returns the output.
     *
     * @param string $name The template name to process.
     * @param array $context The variables with which to render the template
     * @return string The script output.
     */
    public function render($name, $context = array())
    {
        $output = $this->_environment->render($name,$context);
        return $output;
    }
}
