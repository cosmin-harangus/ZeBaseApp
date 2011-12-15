<?php
/*
 *  ProjectQuery
 *  All rights reserved.
 *  This file is part of the ProjectQuery application.
 */

/**
 * Pq\Controller\ActionController
 *
 * @author Cosmin Harangus <cosmin@around25.com>
 */
namespace Pq\Controller;
use Zend\Mvc\Controller;
use Zend\EventManager\Event;

class ActionController extends Controller\ActionController
{
    
    protected function setDisplay($view = null, $layout = null)
    {
        $this->events()->trigger(new Event('display.change', null, array(
            'layout'=>$layout,
            'view'=>$view
        )));
    }
    
}