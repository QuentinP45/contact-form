<?php

namespace Company\CompanyBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CompanyController extends Controller
{
    public function indexAction()
    {
        return new Response("Hello world");
    }
}