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

use Zend\View\TemplatePathStack,
    Twig_LoaderInterface as LoaderInterface;

/**
 * ZeTwig Loader class
 * @package ZeTwig
 * @author Cosmin Harangus <cosmin@zendexperts.com>
 */
class Loader extends TemplatePathStack implements LoaderInterface
{

    /**
     * Gets the source code of a template, given its name.
     *
     * @param  string $name The name of the template to load
     *
     * @return string The template source code
     */
    function getSource($name)
    {
        $path = $this->getScriptPath($name);
        return file_get_contents($path);
    }

    /**
     * Gets the cache key to use for the cache for a given template name.
     *
     * @param  string $name The name of the template to load
     *
     * @return string The cache key
     */
    function getCacheKey($name)
    {
        $path = $this->getScriptPath($name);
        return $path;
    }

    /**
     * Returns true if the template is still fresh.
     *
     * @param string    $name The template name
     * @param timestamp $time The last modification time of the cached template
     * @return boolean
     */
    function isFresh($name, $time)
    {
        $path = $this->getScriptPath($name);
        return filemtime($path) < $time;
    }
}