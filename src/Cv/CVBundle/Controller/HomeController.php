<?php

namespace Cv\CVBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class HomeController extends Controller
{
    public function indexAction()
    {
        return $this->render('CvCVBundle:Home:index.html.twig');
    }

    public function hobbyAction()
    {
        return $this->render('CvCVBundle:Home:hobby.html.twig');
    }
    public function videopitchAction()
    {
        return $this->render('CvCVBundle:Home:videopitch.html.twig');
    }
}
