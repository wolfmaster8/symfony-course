<?php
/**
 * Created by PhpStorm.
 * User: lucianojunio
 * Date: 8/29/18
 * Time: 5:38 PM
 */

namespace App\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class ArticleController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function homepage(){
        return new Response('OMG My first page');
    }

    /**
     * @Route("/news/{slug}")
     */
    public function show($slug){

        $comments = [
            'Airbus is the best!',
            'Noooo. Embraer is the best!'
        ];

        return $this->render('article/show.html.twig', [
            'title' => ucwords(str_replace('-', ' ', $slug)),
            'comments' => $comments,
        ]);
    }
}