<?php
/**
 * Created by PhpStorm.
 * User: lucianojunio
 * Date: 8/29/18
 * Time: 5:38 PM
 */

namespace App\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class ArticleController
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

        return new Response(sprintf('Boeing is the best %s', $slug));
    }
}