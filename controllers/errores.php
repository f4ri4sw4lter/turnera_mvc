<?php
class Errores extends Controller{

    function __construct(){
        parent::__construct();
        $this->view->render('errores/index');
        echo '<p>error al abrir la pagina</p>';
    }
}