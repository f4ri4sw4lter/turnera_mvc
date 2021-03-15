<?php
class Errores extends Controller{

    public function __construct(){
        parent::__construct();
        $this->view->render('errores/index');
        echo '<p>error al abrir la pagina</p>';
    }
}