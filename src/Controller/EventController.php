<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use App\Entity\Event;

class EventController extends Controller
{
    /**
     * @Route("/event", name="event")
     */
    public function index()
    {
        $events = $this->getDoctrine()
                       ->getRepository(Event::class)
                       ->findAll();

        return $this->render('event/index.html.twig', ['events'=> $events]);
    }
}
