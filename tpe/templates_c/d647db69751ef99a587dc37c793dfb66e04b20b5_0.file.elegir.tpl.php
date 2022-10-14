<?php
/* Smarty version 4.2.1, created on 2022-10-14 05:56:48
  from 'C:\xampp\htdocs\tpe\templates\elegir.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6348de0079ef54_89993609',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd647db69751ef99a587dc37c793dfb66e04b20b5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpe\\templates\\elegir.tpl',
      1 => 1665719807,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6348de0079ef54_89993609 (Smarty_Internal_Template $_smarty_tpl) {
?><header>
    <h1>Diversidad en Marvel Comics</h1>

    <ul>
       <li><a href="inicio">Inicio</a></li>
       <li><a href="tabla">Mostrar Todos los Universos</a></li>
       </ul>
       <li><a href="proposito">Proposito de este trabajo</a></li>
            <br>
            <ul>
        <span>Listado de universos:</span>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['mitologias']->value, 'mitologia');
$_smarty_tpl->tpl_vars['mitologia']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['mitologia']->value) {
$_smarty_tpl->tpl_vars['mitologia']->do_else = false;
?>
        <li><a href="universo/<?php echo $_smarty_tpl->tpl_vars['mitologia']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['mitologia']->value->universo;?>
</li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
            <br>
            <?php if (!(isset($_SESSION['USER_ID']))) {?>
               <li>
                 <a aria-current="page" href="login">Login</a>
               </li>
             <?php } else { ?> 
               <li>
                 <a aria-current="page" href="logout">Logout (<?php echo $_SESSION['USER_EMAIL'];?>
)</a>
               </li>
             <?php }?>
    </ul>
    <img src="images/pride.jpg" width= '100%'>
    </header>
<?php }
}
