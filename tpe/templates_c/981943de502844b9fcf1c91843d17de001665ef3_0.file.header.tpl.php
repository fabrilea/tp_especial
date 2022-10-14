<?php
/* Smarty version 4.2.1, created on 2022-10-14 20:36:41
  from 'C:\xampp\htdocs\tpe\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6349ac39a8ea61_35665331',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '981943de502844b9fcf1c91843d17de001665ef3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpe\\templates\\header.tpl',
      1 => 1665772600,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6349ac39a8ea61_35665331 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <base href="<?php echo BASE_URL;?>
">
        <link rel="stylesheet" href="css/style.css">
        <title>Personajes Marvel</title>
    </head>
    <body>
    <header>
    <h1>Diversidad en Marvel Comics</h1>

    <ul>
       <li><a href="inicio">Inicio</a></li><li><a href="proposito">Proposito de este trabajo</a></li>
            <?php if (!(isset($_SESSION['USER_ID']))) {?>
               <li>
                 <a aria-current="page" href="login">Login</a>
               </li>
             <?php } else { ?> 
               <li>
                 <a aria-current="page" href="logout">Logout (<?php echo $_SESSION['USER_EMAIL'];?>
)</a>
               </li>
               <br>
             <li><a href="universos">Lista de Universos</a></li>
             <?php }?>
             <br>
             <li><a href="tabla">Mostrar Todos los Universos</a></li>
    </ul>
       <?php }
}
