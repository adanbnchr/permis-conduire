<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

use AppBundle\Controller\base\BaseController;

class DefaultController extends BaseController
{
     /**
     * 
     * @Route( "/", name = "homepage" )
     * @Method({"GET", "POST"})
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
//        return $this->render('default/index.html.twig', [
//            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
//        ]);
        return $this->render('AppBundle:Default:index.html.twig', array('lm'=>'home'));
    }
}
