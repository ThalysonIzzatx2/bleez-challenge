<?php
    class HomeController
    {
        public function index()
        {
            try
            {
                $pokemons = Pokemon::getAll();

                $loader = new \Twig\Loader\FilesystemLoader('app/View');
                $twig = new \Twig\Environment($loader);
                
                $param = array();
                $param['pokemons'] = $pokemons;

                echo $twig->render('home.html', $param);

            } catch (Exception $e) {
                echo $e->getMessage();
            }
            
        }

        public function search()
        {
            try {
                $pokemons = Pokemon::getByName($_POST);
                $loader = new \Twig\Loader\FilesystemLoader('app/View');
                $twig = new \Twig\Environment($loader);
                
                if (is_array($pokemons)) {
                    $param['pokemons'] = $pokemons;
                }else {
                    $param = array();
                    $param = get_object_vars($pokemons);
                }

                echo $twig->render('home.html', $param);
            } catch (Exception $e) {
                echo $e->getMessage();
            }
        }
    }