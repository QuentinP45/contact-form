<?php

namespace Company\CompanyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CompanyController extends Controller
{
    public function indexAction()
    {
        return $this->render('@CompanyCompany/company/home.html.twig');
    }
}