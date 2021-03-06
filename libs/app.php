<?php
require_once 'controllers/errores.php';

class App{

    public function __construct(){
        $url = isset($_GET['url']) ? $_GET['url'] : null ;
        $url = rtrim($url,'/');
        $url = explode('/',$url);

        if(empty($url[0])){
            $archivoController = 'controllers/inicio.php';
            require_once $archivoController;
            $controller = new Inicio('inicio');
            $controller->loadModel($url[0]);
            return false;
        }
        $archivoController = 'controllers/'.$url[0].'.php';

        if(file_exists($archivoController)){
            require_once $archivoController;
            $controller = new $url[0]($url[0]);
            $controller->loadModel($url[0]);
            if(isset($url[1])){
                $controller->{$url[1]}();
            }
        }else{
            $controller = new errores();
        }
    }
}
