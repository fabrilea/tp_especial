<?php
require_once('libs/smarty/libs/Smarty.class.php');

class TaskView {

    function iniciar() {
        $smarty = new Smarty();
        $smarty->display('templates\inicio.tpl');
        }

    function mostrarProposito() {
        $smarty = new Smarty();
        $smarty->display('templates\proposito.tpl');
        }

    function showTabla($personajes) {
        $smarty = new Smarty();
        $smarty->assign('titulo', 'Lista de Personajes');
        $smarty->assign('personajes', $personajes);
        $smarty->display('templates\tabla.tpl');
    }

    function showPersonajes($personajes) {
        $smarty = new Smarty();
        $smarty->assign('personajes', $personajes);
        $smarty->display('templates\personajes.tpl');
    }
    
    function mostrarEdicion($personajes){
        $smarty= new Smarty();
        $smarty->assign('personajes', $personajes);
        $smarty->display('templates\editar.tpl');
    }

    function mostrarHeader(){
        $smarty= new Smarty();
        $smarty->display('templates\header.tpl');
    }

    function mostrarFooter(){
        $smarty= new Smarty();
        $smarty->display('templates\footer.tpl');
    }
}