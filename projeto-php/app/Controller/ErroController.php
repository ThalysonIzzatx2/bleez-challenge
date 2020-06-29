<?php
    class ErroController
    {
        public function index()
        {
            $loader = new \Twig\Loader\FilesystemLoader('app/View');
            $twig = new \Twig\Environment($loader);

            echo $twig->render('error.html');
        }
    }