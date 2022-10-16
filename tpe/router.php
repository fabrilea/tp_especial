<?php
require_once('app\controllers\task.controller.php');
require_once ('app\controllers\cat.controller.php');
require_once ('app\controllers\auth.controller.php');


define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');
 
if (!empty($_GET['action'])) { 
    $action = $_GET['action'];
}
else {
    $action = 'tabla';
}

$params = explode('/', $action);

$controller = new TaskController();
$CatController = new CatController();
$authController = new AuthController();

if($params[0] ==='login' || $params[0] === ''){
    $controller->showHeader();
    $CatController->showUniverso();
    $authController->showFormLogin();
    $controller->showFooter();
}elseif($params[0] ==='validate'){
    $controller->showHeader();
    $CatController->showUniverso();
    $authController->validateUser();
    $controller->showFooter();
}elseif($params[0] ==='registrar') {
    $controller->showHeader();
    $CatController->showUniverso();
    $authController->agregarEmail();
    $controller->showFooter();
}elseif($params[0] ==='logout'){
    $authController->logout();
}elseif($params[0] ==='inicio'){
    $controller->showHeader();
    $CatController->showUniverso();
    $controller->inicio();   
    $controller->showFooter();
}elseif($params[0] ==='proposito'){
    $controller->showHeader();
    $CatController->showUniverso();
    $controller->proposito();
    $controller->showFooter();
}elseif($params[0] ==='tabla'){
    $controller->showHeader();
    $CatController->showUniverso();
    $controller->showTasks();  
    $CatController->personajeUniverso();
    $controller->showFooter();
}elseif($params[0] ==='universo'){
    $controller->showHeader();
    $CatController->showUniverso();
    $controller->filtrarUniverso($params[1]);    
    $controller->showFooter();
}elseif($params[0] ==='personaje'){
    $controller->showHeader();
    $CatController->showUniverso();
    $controller->filtrarPersonaje($params[1]);    
    $controller->showFooter();
}elseif($params[0] ==='agregar'){
    $controller->agregar();
}elseif($params[0] ==='showEdit'){
    $controller->showHeader();
    $CatController->showUniverso();  
    $controller->showEdit($params[1]);
    $CatController->EditarUniversoPersonaje();
    $controller->showFooter();
}elseif($params[0] ==='editar'){
        $controller->showHeader();
        $controller->editar($params[1]); 
}elseif($params[0] ==='eliminar'){
    $controller->showHeader();
    $controller->eliminar($params[1]); 
}elseif($params[0] ==='universos'){
    $controller->showHeader();
    $CatController->showUniverso();
    $CatController->tablaUniverso(); 
    $controller->showFooter();
}elseif($params[0] ==='agregarUniverso'){
    $CatController->agregarUniverso();
}elseif($params[0] ==='showEditUniverso'){
    $controller->showHeader();
    $CatController->showUniverso(); 
    $CatController->showEditUniverso($params[1]); 
    $controller->showFooter();
}elseif($params[0] ==='editarUniverso'){
    $controller->showHeader();
    $CatController->editarUniverso($params[1]); 
}elseif($params[0] ==='eliminarUniverso'){
    $controller->showHeader();
    $CatController->eliminarUniverso($params[1]); 
}
else{
    echo('404 Page not found');
}
