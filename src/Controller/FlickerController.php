<?php
namespace App\Controller;

use App\Model\FlickerPhoto;
use App\Infrastructure\FlickerService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class FlickerController extends AbstractController
{
    public function showFlicker()
    {
        return $this->render(
            'flicker.html.twig'
        );
    }
    public function handleFlicker(Request $request)
    {
        $search = $request->request->get('search');
        $flickerService = new FlickerService();
        $photos = $flickerService->findByTag($search);
        return $this->render(
            'flicker.html.twig',
            ['photos' => $photos]
        );
    }
}