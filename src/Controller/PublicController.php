<?php

namespace App\Controller;

use App\Service\Constants;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class PublicController extends AptoAbstractController
{
    /**
     * @Route("/", name="app_home")
     */
    public function index(Constants $constants): Response
    {


        return $this->render('public/home.html.twig', [
            'currentPage' => 'homepage',
            'constants' => $constants,
        ]);
    }
}
