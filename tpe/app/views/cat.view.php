<?php
require_once('libs/smarty/libs/Smarty.class.php');

class CatView {



function mostrarTabla($universos) {
    $smarty = new Smarty();
    $smarty->assign('titulo', 'Lista Universos');
    $smarty->assign('universos', $universos);
    $smarty->display('templates\tablaUniverso.tpl');
}

function mostrarUniverso($universos) {
        $smarty = new Smarty();
        $smarty->assign('universos', $universos);
        $smarty->display('templates\universos.tpl');
    }
    
    function mostrarPersonaje($universos) {
        $smarty = new Smarty();
        $smarty->assign('universos', $universos);
        $smarty->display('templates\agregar.tpl');
    }

    function modificarUniverso($universos){
        $smarty= new Smarty();
        $smarty->assign('universos', $universos);
        $smarty->display('templates\editarPersonajeUniverso.tpl');
    }

    function mostrarUniversoEditado($universos){
        $smarty= new Smarty();
        $smarty->assign('universos', $universos);
        $smarty->display('templates\editarUniverso.tpl');
    }

    function mostrarEdicion($universos){
        $smarty= new Smarty();
        $smarty->assign('universos', $universos);
        $smarty->display('templates\editarPersonajeUniverso.tpl');
    }
}