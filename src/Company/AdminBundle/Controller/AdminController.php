<?php

namespace Company\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AdminController extends Controller
{
    public function indexAction()
    {
        return $this->render('@CompanyAdmin/admin/home.html.twig');
    }
}
