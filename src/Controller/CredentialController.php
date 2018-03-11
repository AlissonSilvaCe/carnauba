<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CredentialController extends Controller
{
    /**
     * @Route("/credential", name="credential")
     */
    public function index()
    {
        return $this->render('credential/index.html.twig', [
            'controller_name' => 'CredentialController',
        ]);
    }
}
