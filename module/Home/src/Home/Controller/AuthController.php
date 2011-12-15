<?php
namespace Home\Controller;
use Pq\Controller\ActionController;

class AuthController extends ActionController
{
    public function indexAction()
    {
        return array('message'=>'Hello Johnny');
    }
}