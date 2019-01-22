<?php

namespace Company\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Company\CompanyBundle\Entity\Message;

class AdminController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        
        $messages = $em->getRepository(Message::class)->findAll();

        return $this->render('@CompanyAdmin/admin/home.html.twig', [
            'messages' => $messages
        ]);
    }
}
