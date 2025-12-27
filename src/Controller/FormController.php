<?php

namespace App\Controller;

use App\Form\ProductType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FormController extends AbstractController
{
    #[Route('/form', name: 'app_form')]
    public function index(Request $request): Response
    {
        $form = $this->createForm(ProductType::class);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();
            dump($data);
            dump('Form submitted successfully!');
        }

        return $this->render('form/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
