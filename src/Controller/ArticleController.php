<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/article')]
class ArticleController extends AbstractController
{
    #[Route('/list', name: 'app_article_list')]
    public function list(): Response
    {
        return $this->render('article/list.html.twig', [
            'appName' => $_ENV["APP_NAME"]
        ]);
    }
}
