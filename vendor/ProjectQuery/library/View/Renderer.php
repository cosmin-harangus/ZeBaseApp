<?php
/*
 * ProjectQuery
 * All rights reserved.
 * This file is part of the ProjectQuery application.
 *
 * Pq\View\Renderer Interface
 *
 * @author Cosmin Harangus <cosmin@around25.com>
 */
namespace Pq\View;
interface Renderer extends \Zend\View\Renderer{
    /**
     * Set variable storage
     *
     * Expects either an array, or an object implementing ArrayAccess.
     * 
     * @param  array|ArrayAccess $variables 
     * @return Renderer
     * @throws Exception\InvalidArgumentException
     */
    public function setVars($variables);
    
    /**
     * Get a single variable, or all variables
     * 
     * @param  mixed $key 
     * @return mixed
     */
    public function vars($key = null);
}