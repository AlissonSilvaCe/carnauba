<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class EventController extends Controller
{
    /**
     * @Route("/event", name="event")
     */
    public function index()
    {
        return $this->json([
            'message' => 'My firts Event create',
            'path' => 'src/Controller/EventController.php',
        ]);
    }
}
