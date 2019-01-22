<?php

namespace Company\CompanyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Company\CompanyBundle\Form\ContactType;

class CompanyController extends Controller
{
    public function indexAction(Request $request)
    {
        $form = $this->createForm(ContactType::class);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

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