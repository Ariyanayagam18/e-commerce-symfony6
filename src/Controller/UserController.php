<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\User;

class UserController extends AbstractController
{
    private $em,$evm;
    public function __construct(EntityManagerInterface $entitymanager)
    {
        $this->em = $entitymanager;
        $this->evm = $entitymanager->getEventManager();
    }

    #[Route('/', name: 'landingpage')]
    public function index(): Response
    {
        return $this->render('store/home.html.twig', [
            'name' => 'Ariyanayagam'
        ]);
    }

    #[Route('/sample', name: 'demo')]
    public function sample(): Response
    {
        return $this->render('store/sample.html.twig', [
            'name' => 'Ariyanayagam'
        ]);
    }


    #[Route('/users', name: 'userlist')]
    public function list(): Response
    {
        return $this->render('user/list.html.twig', [
            'category' => 'User Details'
        ]);
    }


    #[Route('/add', name: 'addnewuser')]
    public function show(): Response
    {
        return $this->render('user/add.html.twig', [
            'category' => 'User Details'
        ]);
    }

    #[Route('/adduser', name: 'insertuser')]
    public function insert(Request $request): Response
    {
        
        // $user = new User();
        // $user->setName($request->get('username'));
        // $user->setEmail($request->get('email'));
        // $user->setMobileNo($request->get('mobile'));
        // $user->setDesignation($request->get('designation'));
        // $user->setPassword($request->get('password'));
        // $user->setProfileImg($request->files->get('profile-image'));
        // $this->em->persist($user);
        // $this->em->flush();

        return $this->render('user/add.html.twig', [
            'category' => 'User Details'
        ]);
    }

    #[Route('/edit/{id}', name: 'edituser')]
    public function edit(): Response
    {

        

        return $this->render('user/edit.html.twig', [
            'category' => 'User Details'
        ]);

    }

    #[Route('/updateuser/{id}', name: 'updateuser')]
    public function store(): Response
    {
        return $this->render('user/edit.html.twig', [
            'category' => 'User Details'
        ]);
    }
}
