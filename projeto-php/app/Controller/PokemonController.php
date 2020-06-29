<?php
    class PokemonController
    {
        public function index($id)
        {
            try {
                $loader = new \Twig\Loader\FilesystemLoader('app/View');
                $twig = new \Twig\Environment($loader);
                if (isset($id)) {
                    $pokemon = Pokemon::getById($id);
                    $param = array();
                    $param['id'] = $pokemon->id;
                    $param['name'] = $pokemon->name;
                    $param['image'] = $pokemon->image;
                    $param['description'] = $pokemon->description;
                    $param['price'] = $pokemon->price;
                    $param['num'] = $pokemon->num;
                    echo $twig->render('pokemon.html', $param);
                    
                } else {
                    echo $twig->render('pokemon.html');
                }
            } catch (Exception $e) {
                echo $e->getMessage();
            }
            
        }
        public function create()
        {

                //var_dump($_POST);
                Pokemon::create($_POST);

                header('Location: http://localhost/pr');
           
        }
        public function update()
        {
            Pokemon::update($_POST);

            header('Location: http://localhost/pr');
        }
        public function delete($id)
        {
            Pokemon::delete($id);

            header('Location: http://localhost/pr');
        }


    }