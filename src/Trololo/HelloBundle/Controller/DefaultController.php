<?php

namespace Trololo\HelloBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('TrololoHelloBundle:Default:index.html.php', array('name' => $name));
    }
}
