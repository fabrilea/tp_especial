<?php
/* Smarty version 4.2.1, created on 2022-10-14 20:18:39
  from 'C:\xampp\htdocs\tpe\templates\tabla.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6349a7ff550d18_40398155',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3a90889b5e80ad1e2bc60394a9547b5d7f330174' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpe\\templates\\tabla.tpl',
      1 => 1665770978,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6349a7ff550d18_40398155 (Smarty_Internal_Template $_smarty_tpl) {
?><h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>

    <table class="tabla">
        <thead>
            <tr>
                <th></th>
                <th>Personaje</th>
                <th>Raza</th>
                <th>Afiliación</th>
                <th>Representación LGBTQ+</th>
                <th>Representación Feminista</th>
                <th>Universo Origen</th>
            </tr>
        </thead>
        <tbody>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['personajes']->value, 'personaje');
$_smarty_tpl->tpl_vars['personaje']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['personaje']->value) {
$_smarty_tpl->tpl_vars['personaje']->do_else = false;
?>
                    <tr>
                        <td><img src="<?php echo $_smarty_tpl->tpl_vars['personaje']->value->imagen;?>
" width= '100'></td>
                        <td><?php echo $_smarty_tpl->tpl_vars['personaje']->value->personaje;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['personaje']->value->raza;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['personaje']->value->afiliacion;?>
</td>
                        <td><?php if ($_smarty_tpl->tpl_vars['personaje']->value->lgbt == 1) {?>si<?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['personaje']->value->lgbt == 0) {?>no<?php }?></td>
                        <td><?php if ($_smarty_tpl->tpl_vars['personaje']->value->fem == 1) {?>si<?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['personaje']->value->fem == 0) {?>no<?php }?></td>
                        <td><?php echo $_smarty_tpl->tpl_vars['personaje']->value->universo;?>
</td>
                        <?php if ((isset($_SESSION['USER_ID']))) {?>
                        <td><a href="personaje/<?php echo $_smarty_tpl->tpl_vars['personaje']->value->id;?>
">Ver</a></td>
                        <td><a href='showEdit/<?php echo $_smarty_tpl->tpl_vars['personaje']->value->id;?>
'>editar</a></td>
                        <td><a href='eliminar/<?php echo $_smarty_tpl->tpl_vars['personaje']->value->id;?>
'>borrar</a></td>
                        <?php }?>
                    </tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
    </table>




<?php }
}
