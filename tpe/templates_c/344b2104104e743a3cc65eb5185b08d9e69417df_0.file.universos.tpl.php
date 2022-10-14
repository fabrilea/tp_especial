<?php
/* Smarty version 4.2.1, created on 2022-10-14 20:30:55
  from 'C:\xampp\htdocs\tpe\templates\universos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6349aadfce0c04_92771831',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '344b2104104e743a3cc65eb5185b08d9e69417df' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpe\\templates\\universos.tpl',
      1 => 1665772254,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6349aadfce0c04_92771831 (Smarty_Internal_Template $_smarty_tpl) {
?>
            <ul>
        <span>Listado de universos:</span>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['universos']->value, 'universo');
$_smarty_tpl->tpl_vars['universo']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['universo']->value) {
$_smarty_tpl->tpl_vars['universo']->do_else = false;
?>
        <li><a href="universo/<?php echo $_smarty_tpl->tpl_vars['universo']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['universo']->value->universo;?>
</a></li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>

        <img src="images/pride.jpg" width= '100%'>
    </header><?php }
}
