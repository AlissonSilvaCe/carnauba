<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use App\Entity\Event;
use App\Form\EventType;

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


    /**
     * @Route("/event/create", name="event-create")
     */
    public function create()
    {
        $form = $this->createForm(EventType::class);

        return $this->render('event/create.html.twig', ['form'=> $form->createView()]);
    }
}
