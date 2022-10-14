<?php 
require_once 'app/models/task.model.php';
require_once 'app/views/task.view.php';
require_once 'app/helpers/auth.helper.php';


class TaskController {
    

    private $model;
    private $view;    

   function __construct() {
        $this->model = new TaskModel();
        $this->view = new TaskView();

        $this->chequeo = new AuthHelper();
    }

    function inicio(){
        $this->chequeo->checkInicio();
        $this->view->iniciar();
    }

    function proposito(){
        $this->chequeo->checkInicio();
        $this->view->mostrarProposito();
    }

    function showTasks() {
        $this->chequeo->checkInicio();
        $personajes = $this->model->getTabla();
        $this->view->showTabla($personajes);
    }

    function filtrarPersonaje($id) {
        $this->chequeo->checkInicio();
        $personajes = $this->model->getPersonajebyId($id);
        $this->view->showTabla($personajes);
        }

    function filtrarUniverso($universo) {
        $this->chequeo->checkInicio();
        $personajes = $this->model->getPersonajesByuniverso($universo);
        $this->view->showTabla($personajes);
     }
     function agregar(){
         $personaje = $_REQUEST['personaje'];
         $raza = $_REQUEST['raza'];
         $afiliacion = $_REQUEST['afiliacion'];
         $lgbt = $_REQUEST['lgbt'];
         $fem = $_REQUEST['fem'];
         $universo = $_REQUEST['universo'];
 
         $id = $this->model->getAgregar($personaje,$raza,$afiliacion,$lgbt,$fem,$universo);
 
        header("Location: " . BASE_URL);
     }

     function eliminar($id){
            $this->chequeo->checkLoggedIn();
            $this->model->deletePersonaje($id);
            
            header("Location: " . BASE_URL); 
        }


        function showEdit($id) {
            $this->chequeo->checkLoggedIn();
            $personajes = $this->model->getPersonajebyId($id);
            $this->view->mostrarEdicion($personajes);
        }

        function editar($id){
            $personaje = $_REQUEST['personaje'];
            $raza = $_REQUEST['raza'];
            $afiliacion = $_REQUEST['afiliacion'];
            $lgbt = $_REQUEST['lgbt'];
            $fem = $_REQUEST['fem'];
            $universo = $_REQUEST['universo'];

            $this->model->modificarPersonaje($personaje,$raza,$afiliacion,$lgbt,$fem,$universo,$id);
            
            header("Location: " . BASE_URL); 
        }

        function showHeader(){
            $this->chequeo->checkInicio();
            $this->view->mostrarHeader();
        }

        function showFooter(){
            $this->view->mostrarFooter();
        }
     }
