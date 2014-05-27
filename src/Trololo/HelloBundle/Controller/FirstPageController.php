<?php
namespace Trololo\HelloBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Trololo\HelloBundle\Form\Type\old;
class FirstPageController extends Controller
{
public function indexAction()
{
return $this->render('TrololoHelloBundle:Default:index.html.php');
}

public function newAction()
{
    return $this->render('TrololoHelloBundle:Default:new.html.php');
}
    public function oldAction()
    {
        return $this->render('TrololoHelloBundle:Default:old.html.php');
        $form = $this->createForm(new old(), $task);
    }
}