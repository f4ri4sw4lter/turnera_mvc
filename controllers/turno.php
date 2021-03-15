<?php
class Turno extends Controller{
    function __construct(){
        parent::__construct();
        $this->view->render('turno/index');
    }
}