<?php
class Controller{

    public function __construct($archivo){
        $this->view = new View();
        $this->view->render($archivo.'/index');
    }

    function loadModel($model){
        $url = 'models/'.$model.'model.php';
    
        if(file_exists($url)){
            require $url;

            $modelName = $model.'Model';
            $this->model = new $modelName();
        }
    }
}