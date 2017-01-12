<?php

namespace Cv\CVBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('CvCVBundle:Default:index.html.twig');
    }
}
