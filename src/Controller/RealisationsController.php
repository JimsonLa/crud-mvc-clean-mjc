<?php

namespace App\Controller;

use App\Repository\ImageRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RealisationsController extends AbstractController
{
    #[Route('/realisations', name: 'app_realisations')]
    public function index(ImageRepository $imageRepository): Response
    {
        $images = $imageRepository->findAll();

        return $this->render('realisations/index.html.twig', [
            'images' => $images,
        ]);
    }
}


