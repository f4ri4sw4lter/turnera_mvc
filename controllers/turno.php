<?php
class Turno extends Controller{
    public function __construct(){
        parent::__construct();
        $this->view->render('turno/index');
    }
}