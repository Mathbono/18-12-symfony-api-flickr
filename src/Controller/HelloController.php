<?php
// src/Controller/HelloController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HelloController extends AbstractController
{
    public function helloWorld()
    {
        return new Response(
            '<html><body>Hello World !</body></html>'
        );
    }

    public function helloPrenom($prenom, $age = 20)
    {
        if($age < 18) {
            return $this->redirect('http://disney.fr');
        }
        return $this->render(
            'hello.html.twig',
            [
                'message' => 'Je m\'appelle '.$prenom.', j\'ai ' .$age. ' ans, et j\'aime les couleurs et les Symfonies !'
            ]
        );
    //    return new Response(
    //        '<html><body><h2>Je m\'appelle '.$prenom.' et j\'ai ' .$age. ' ans.</h2></body></html>'
    //    );
    }
}