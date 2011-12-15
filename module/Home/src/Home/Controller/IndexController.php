<?php
/*
 *  ProjectQuery
 *  All rights reserved.
 *  This file is part of the ProjectQuery application.
 */

/**
 * Home\Controller\IndexController
 *
 * @author Cosmin Harangus <cosmin@around25.com>
 */
namespace Home\Controller;
use Pq\Controller\ActionController;
use Zend\Debug;

class IndexController extends ActionController
{
    public function indexAction()
    {
        $db = $this->getLocator()->get('_db');
        # return view variables
        return array('message'=>'Hello Johnny');
    }
}