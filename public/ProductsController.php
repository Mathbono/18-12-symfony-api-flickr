<?php
namespace App\Repository;

use App\Repository\CategoryRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ProductsController extends AbstractController
{
    public function list()
    {
        $pr = $this->getDoctrine()->getRepository(Product::class);
        $products = $pr->findAll();
        return $this->render(
            'products.html.twig',
            ['products' => $products]
        );
    }
}