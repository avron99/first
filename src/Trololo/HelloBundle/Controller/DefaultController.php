<?php

namespace Trololo\HelloBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('TrololoHelloBundle:Default:index.html.php');
    }
}
