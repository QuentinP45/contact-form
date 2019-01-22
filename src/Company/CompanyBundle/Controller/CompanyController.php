<?php

namespace Company\CompanyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Company\CompanyBundle\Form\ContactType;
use Company\CompanyBundle\Entity\Message;

class CompanyController extends Controller
{
    public function indexAction(Request $request)
    {
        $message = new Message();

        $form = $this->createForm(ContactType::class, $message);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $em = $this->getDoctrine()->getManager();

            $message->setDateCreation(new \Datetime('now'));

            $em->persist($message);
            $em->flush();

            $this->addFlash(
                'info',
                'Message envoyé, merci !'
            );

            return $this->render('@CompanyCompany/company/home.html.twig', [
                'form' => $form->createView(),
            ]);
        }

        return $this->render('@CompanyCompany/company/home.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}