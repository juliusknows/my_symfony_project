<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;



final class ConferenceController extends AbstractController
{
 
    public function hello(Request $request): Response
    {
        dump($request);
        
        return new Response(<<<EOF
            <html>
                <body style="
                    margin: 0;
                    height: 100vh;
                    background-image: url('/images/skyposter.jpg');
                    background-size: cover;
                    background-position: center;
                    background-repeat: no-repeat;
                ">
                    <a href="/info">подробнее тут</a>
                    <img src="/images/under-construction.gif" alt="Реконструкция" style="max-width:80%;height:auto;display:block;margin:50px auto;">
                </body>
            </html>
            EOF
        );
    }
    

    public function bye(): Response
    {
        return new Response(<<<EOF
            <html>
                <body style="
                    margin: 0;
                    height: 100vh;
                    background-image: url('/images/monky.jpg');
                    background-size: cover;
                    background-position: center;
                    background-repeat: no-repeat;
                ">
                    Можешь в принципе
                    <a href="/"> вернуться</a>
                </body>
            </html>
            EOF
        );
                
    }
}
