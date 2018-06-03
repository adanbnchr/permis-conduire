<?php

namespace AppBundle\Controller;

use AppBundle\Controller\base\BaseController;

class DefaultController extends BaseController
{
    public function indexAction()
    {
        return $this->render('AppBundle:Default:index.html.twig', array('lm'=>'home'));
    }
}
