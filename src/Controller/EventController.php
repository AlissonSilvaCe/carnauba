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

                       //var_dump($events);
                       //die;

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

            $this->addFlash('success', 'Evento cadastrado com sucesso!');
            return $this->redirectToRoute('event-create');
        }

        return $this->render('event/create.html.twig', ['form'=> $form->createView()]);
    }


    /**
     * @Route("/event/update/{id}", name="event-update")
     */
    public function update(Request $request, Event $id)
    {
        $form = $this->createForm(EventType::class, $id);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid() ){

            $event = $form->getData();
            $event->setUpdatedAt(new \DateTime("now", new \DateTimeZone("America/Sao_Paulo")));

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->merge($event);
            $entityManager->flush();

            $this->addFlash('success', 'Evento alterado com sucesso!');
            return $this->redirectToRoute('event-update',['id' => $event->getId()]);
        }

        return $this->render('event/update.html.twig', ['form'=> $form->createView()]);
    }

    /**
     * @Route("/event/delete/{id}", name="event-delete")
     */
    public function delete(Event $event)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($event);
        $entityManager->flush(); 

        $this->addFlash('success', 'Evento excluido com sucesso!');
        return $this->redirectToRoute('event');
    }
}
