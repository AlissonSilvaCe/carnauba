<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use App\Entity\User;
use App\Form\UserType;

class UserController extends Controller
{
    /**
     * @Route("/user", name="user")
     */
    public function index()
    {
        $users = $this->getDoctrine()
                       ->getRepository(User::class)
                       ->findAll();

        return $this->render('user/index.html.twig', ['users'=> $users]);
    }


    /**
     * @Route("/user/create", name="user-create")
     */
    public function create(Request $request)
    {
        $form = $this->createForm(UserType::class);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid() ){

            $user = $form->getData();
            $user->setCreatedAt(new \DateTime("now", new \DateTimeZone("America/Sao_Paulo")));
            $user->setUpdatedAt(new \DateTime("now", new \DateTimeZone("America/Sao_Paulo")));

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($user);
            $entityManager->flush();

            $this->addFlash('success', 'Usuário cadastrado com sucesso!');
            return $this->redirectToRoute('user-create');
        }

        return $this->render('user/create.html.twig', ['form'=> $form->createView()]);
    }


    /**
     * @Route("/user/update/{id}", name="user-update")
     */
    public function update(Request $request, User $id)
    {
        $form = $this->createForm(UserType::class, $id);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid() ){

            $user = $form->getData();
            $user->setUpdatedAt(new \DateTime("now", new \DateTimeZone("America/Sao_Paulo")));

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->merge($user);
            $entityManager->flush();

            $this->addFlash('success', 'Usuário alterado com sucesso!');
            return $this->redirectToRoute('user-update',['id' => $user->getId()]);
        }

        return $this->render('user/update.html.twig', ['form'=> $form->createView()]);
    }

    /**
     * @Route("/user/delete/{id}", name="user-delete")
     */
    public function delete(User $user)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($user);
        $entityManager->flush(); 

        $this->addFlash('success', 'Usuário excluido com sucesso!');
        return $this->redirectToRoute('user');
    }
}
