<?php

namespace Acme\StoreBundle\Controller;

use Acme\StoreBundle\Entity\Product;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
class DefaultController extends Controller{
public function indexAction()
{

    $product = new Product();

    $form=$this->createFormBuilder($product)
    ->add('name', 'text')
    ->add('description','textarea')
    ->add('save','submit')
    ->getForm();

    return $this->render('AcmeStoreBundle:Default:index.html.twig', array('form' => $form->createView(),));

}
    public function showAction(){

        $product = new Product();
    $product->setName( 'lol');
    $product->setPrice('19.99');
    $product->setDescription('Lorem ipsum dolor');

    $em = $this->getDoctrine()->getEntityManager();
    $em->persist($product);
    $em->flush();

    return new Response('Created product id '.$product->getId()." ". $product->getName());
}}