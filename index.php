<?php
    // Constante contient le chemin du dossier racine de index.php
    define('ROOT', str_replace('index.php','',$_SERVER['SCRIPT_FILENAME']));

    require_once(ROOT.'models/Model.php');
    require_once(ROOT.'controllers/Controller.php');

    
    // On sépare les paramètres et on les met dans le tableau $params
    $params = explode('/', $_GET['p']);

    // Si au moins 1 paramètre existe
    if($params[0] != ""){
        // On sauvegarde le 1er paramètre dans $controller en mettant sa 1ère lettre en majuscule
        $controller = ucfirst($params[0]);

        // On sauvegarde le 2ème paramètre dans $action si il existe, sinon index
        $action = isset($params[1]) ? $params[1] : 'index';

        require_once(ROOT.'controllers/'.$controller.'.php');

        $controller = new $controller();

        if(method_exists($controller, $action)){
            unset($params[0]);
            unset($params[1]);
            call_user_func_array([$controller, $action], $params);
            //$controller->$action();
        }else{
            http_response_code(404);
            echo '404 Erreur : Cette page n\'existe pas';
        }
        
    }else{
        // Ici aucun paramètre n'est défini
        require_once(ROOT.'controllers/Articles.php');

        $home = new Articles();
        $home->index();
    }



?>
