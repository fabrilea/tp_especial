<?php
/* Smarty version 4.2.1, created on 2022-10-14 19:27:08
  from 'C:\xampp\htdocs\tpe\templates\personajes.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63499bec3c9949_35058309',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f60663a680fec0b1d0385f2b55911e7987ab29d9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpe\\templates\\personajes.tpl',
      1 => 1665767729,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63499bec3c9949_35058309 (Smarty_Internal_Template $_smarty_tpl) {
?><ul>
    <span>Listado de personajes principales:</span>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['personajes']->value, 'personaje');
$_smarty_tpl->tpl_vars['personaje']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['personaje']->value) {
$_smarty_tpl->tpl_vars['personaje']->do_else = false;
?>
      <li><a href="personaje/<?php echo $_smarty_tpl->tpl_vars['personaje']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['personaje']->value->personaje;?>
</a></li>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>
<img src="images/pride.jpg" width= '100%'>
    </header><?php }
}
