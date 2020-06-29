<?php
    class AboutController
    {
        public function index()
        {
            try
            {
                $loader = new \Twig\Loader\FilesystemLoader('app/View');
                $twig = new \Twig\Environment($loader);

                echo $twig->render('about.html');

            } catch (Exception $e) {
                echo $e->getMessage();
            }
        }
    }