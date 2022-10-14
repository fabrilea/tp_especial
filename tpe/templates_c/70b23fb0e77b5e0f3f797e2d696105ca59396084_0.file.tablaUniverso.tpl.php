<?php
/* Smarty version 4.2.1, created on 2022-10-14 21:00:21
  from 'C:\xampp\htdocs\tpe\templates\tablaUniverso.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6349b1c5b24ce4_06832113',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '70b23fb0e77b5e0f3f797e2d696105ca59396084' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpe\\templates\\tablaUniverso.tpl',
      1 => 1665774020,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6349b1c5b24ce4_06832113 (Smarty_Internal_Template $_smarty_tpl) {
?><h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>

    <table class="tabla">
        <thead>
            <tr>
                <th>Universo</th>
            </tr>
        </thead>
        <tbody>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['universos']->value, 'universo');
$_smarty_tpl->tpl_vars['universo']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['universo']->value) {
$_smarty_tpl->tpl_vars['universo']->do_else = false;
?>
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['universo']->value->universo;?>
</td>
                        <td><a href="universo/<?php echo $_smarty_tpl->tpl_vars['universo']->value->id;?>
">Ver</a></td>
                        <td><a href='showEditUniverso/<?php echo $_smarty_tpl->tpl_vars['universo']->value->id;?>
'>editar</a></td>
                        <td><a href='eliminarUniverso/<?php echo $_smarty_tpl->tpl_vars['universo']->value->id;?>
'>borrar</a></td>
                    </tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
    </table>


<div class="separar">
    <form method="POST" action="agregarUniverso">
        <label>Universo Origen</label>
            <input type="text" name="universo" placeholder="universo" required>

        <input type="submit">      
    </form>
</div>
<?php }
}
