<?php

namespace Company\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Company\CompanyBundle\Entity\Message;
use Company\CompanyBundle\Form\ContactEditType;

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

    public function viewAction($message, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        
        $message = $em->getRepository(Message::class)->find($message);

        $form = $this->createForm(ContactEditType::class, $message);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $em->persist($message);
            $em->flush();
        }

        return $this->render('@CompanyAdmin/admin/message.html.twig', [
            'message' => $message,
            'form' => $form->createView()
        ]);
    }
}