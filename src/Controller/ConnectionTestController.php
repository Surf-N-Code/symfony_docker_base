<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ConnectionTestController extends AbstractController
{
    /**
     * @Route("/connection/test", name="connection_test")
     */
    public function index()
    {
        $em = $this->getDoctrine()->getManager();
        $em->getConnection()->connect();
        $connected = $em->getConnection()->isConnected();
        dump($connected);
        die();
        return $this->render('connection_test/index.html.twig', [
            'controller_name' => 'ConnectionTestController',
        ]);
    }
}
