<?php
require_once 'app/models/cat.model.php';
require_once 'app/views/cat.view.php';

class CatController {
    

    private $model;
    private $view;    

   function __construct() {
        $this->model = new CatModel();
        $this->view = new CatView();
        $this->chequeo = new AuthHelper();
    }
    
    function tablaUniverso(){
        $this->chequeo->checkLoggedIn();
        $universos = $this->model->getUniverso();

        $this->view->mostrarTabla($universos);
    }

    function showUniverso() {
        $universos = $this->model->getUniverso();

        $this->view->mostrarUniverso($universos);
     }

     function personajeUniverso() {
        $universos = $this->model->getUniverso();

        $this->view->mostrarPersonaje($universos);
     }

     function agregarUniverso() {
            $universo = $_REQUEST['universo'];
    
            $id = $this->model->agregarUniverso($universo);
    
           header("Location: " . BASE_URL);
        }

        function eliminarUniverso($id){
            $this->chequeo->checkLoggedIn();
            $this->model->deleteUniverso($id);
            
            header("Location: " . BASE_URL); 
        }


        function showEditUniverso($id) {
            $this->chequeo->checkLoggedIn();
            $universos = $this->model->getUniversobyId($id);
            $this->view->mostrarUniversoEditado($universos);
        }

        function editarUniverso($id){
            $universos = $_REQUEST['universo'];

            $this->model->modificarUniverso($universos,$id);
            header("Location: " . BASE_URL); 
        }

        function EditarUniversoPersonaje() {
        $personajes = $this->model->getUniverso();
        $this->view->mostrarEdicion($personajes);
        }
     }


        

