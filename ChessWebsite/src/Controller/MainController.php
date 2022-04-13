<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use Doctrine\ORM\EntityManagerInterface;
use http\Client\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class MainController extends AbstractController
{
    #[Route('/', name: 'News')]
    public function News(): Response
    {
            $templates = 'Home/index.html.twig';
            $args = [];

        return $this->render($templates, $args);
    }

    #[Route('/Competitions', name: 'Competitions')]
    public function Competitions(): Response
    {
        $templates = 'Home/Competitions.html.twig';
        $args = [];

        return $this->render($templates, $args);
    }

    #[Route('/ChessOnline', name: 'ChessOnline')]
    public function ChessOnline(): Response
    {
        $templates = 'Home/ChessOnline.html.twig';
        $args = [];

        return $this->render($templates, $args);
    }

    #[Route('/Profile/{name?}', name: 'Profile')]
    public function Profile(\Symfony\Component\HttpFoundation\Request $request) : Response
    {
        $templates = 'Home/Profile.html.twig';
        $args = [];
        $name = $request->get(key:'name');

        return $this->render('Home/Profile.html.twig', ['name' => $name]);
    }

    #[Route('/Login', name: 'app_login')]
    public function Login(AuthenticationUtils $authenticationUtils): Response
    {
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('security/login.html.twig', ['last_username' => $lastUsername, 'error' => $error, 'app_registration']);


    }
}
