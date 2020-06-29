<?php

require_once 'app/Core/core.php';

require_once 'config/Database/Connection.php';

require_once 'app/Model/PokemonModel.php';

require_once 'app/Controller/HomeController.php';
require_once 'app/Controller/PokemonController.php';
require_once 'app/Controller/AboutController.php';
require_once 'app/Controller/ErroController.php';

require_once 'vendor/autoload.php';


$template = file_get_contents('app/Template/template.html');
$header = file_get_contents('app/Template/header.html');

ob_start();
    $core = new Core;
    $core->start($_GET);

    $conteudo = ob_get_contents();

ob_end_clean();

$saida = str_replace(array('{{header}}', '{{content}}'), array($header, $conteudo), $template);

echo $saida;