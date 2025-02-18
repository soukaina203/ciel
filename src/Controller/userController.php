<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegistrationFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Attribute\Route;

class userController extends AbstractController
{
    #[Route('/landing', name: 'landing')]
    public function index(): Response
    {
        $user =$this->getUser();

        return $this->render('user/landing.html.twig',["user"=>$user]);

    }}