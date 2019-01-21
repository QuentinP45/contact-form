<?php

namespace Company\CompanyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Company\CompanyBundle\Form\ContactType;

class CompanyController extends Controller
{
    public function indexAction()
    {
        $form = $this->createForm(ContactType::class);

        return $this->render('@CompanyCompany/company/home.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}