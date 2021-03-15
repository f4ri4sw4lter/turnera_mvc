<?php
class Inicio extends Controller{
    public function __construct(){
        parent::__construct();
        $this->view->render('inicio/index');
    }
}