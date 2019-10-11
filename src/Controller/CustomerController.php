<?php
namespace App\Controller;

use App\Model\CustomerManagerModel;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class CustomerController extends AbstractController
{
    public function showForm()
    {
        return $this->render(
            'customer.html.twig'
        );
    }
    public function handleForm(Request $request)
    {
        $country = $request->request->get('country');
        $cmm = new CustomerManagerModel();
        $customerList = $cmm->findByCountry($country);
        return $this->render(
            'customer.html.twig',
            ['customer' => $customerList,
            'message' => 'Il n\'y a pas de client vivant en '.$country.'.']
        );
    }
}