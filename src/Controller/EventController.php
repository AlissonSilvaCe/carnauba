<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
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
    public function create(Request $request)
    {
        $form = $this->createForm(EventType::class);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid() ){

            $event = $form->getData();
            $event->setCreatedAt(new \DateTime("now", new \DateTimeZone("America/Sao_Paulo")));
            $event->setUpdatedAt(new \DateTime("now", new \DateTimeZone("America/Sao_Paulo")));

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($event);
            $entityManager->flush();

            die;
        }

        return $this->render('event/create.html.twig', ['form'=> $form->createView()]);
    }
}
