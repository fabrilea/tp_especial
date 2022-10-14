<?php
/* Smarty version 4.2.1, created on 2022-10-15 00:42:21
  from 'C:\xampp\htdocs\tpe\templates\editar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6349e5cd15b234_60366931',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ed1c541c095642ebf9756abfb524376d40e0c8a1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpe\\templates\\editar.tpl',
      1 => 1665787331,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6349e5cd15b234_60366931 (Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['personajes']->value, 'personaje');
$_smarty_tpl->tpl_vars['personaje']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['personaje']->value) {
$_smarty_tpl->tpl_vars['personaje']->do_else = false;
?>
    <form method="POST" action="editar/<?php echo $_smarty_tpl->tpl_vars['personaje']->value->id;?>
">
        <input type="text" name="personaje" placeholder="personaje" value="<?php echo $_smarty_tpl->tpl_vars['personaje']->value->personaje;?>
" required>
        <input type="text" name="raza" placeholder="raza" value="<?php echo $_smarty_tpl->tpl_vars['personaje']->value->raza;?>
" required>
        <input type="text" name="afiliacion" placeholder="afiliación/equipo" value="<?php echo $_smarty_tpl->tpl_vars['personaje']->value->afiliacion;?>
">
        <label>Representación LGBTQ+</label>
        <select name="lgbt">
            <option value="1">si</option>
            <option value="0">no</option>
        </select>
        <label>Representación Feminista</label>
        <select name="fem">
            <option value="1">si</option>
            <option value="0">no</option>
        </select>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
