<?php
// src/Controller/HomeController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    public function hello()
    {
        return $this->render(
            'home.html.twig',
            [
                'message' => 'Bienvenue sur le site test de Symfony !'
            ]
        );
    }
}