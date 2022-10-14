<?php
/* Smarty version 4.2.1, created on 2022-10-15 00:51:57
  from 'C:\xampp\htdocs\tpe\templates\editarUniverso.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6349e80d8908e0_65655414',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4d4b283ce659c3cfd7bcffe8cddc7b94c389c5be' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpe\\templates\\editarUniverso.tpl',
      1 => 1665787911,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6349e80d8908e0_65655414 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="separar">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['universos']->value, 'universo');
$_smarty_tpl->tpl_vars['universo']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['universo']->value) {
$_smarty_tpl->tpl_vars['universo']->do_else = false;
?>
    <form method="POST" action="editarUniverso/<?php echo $_smarty_tpl->tpl_vars['universo']->value->id;?>
">
        <label>Universo Origen</label>
            <input type="text" name="universo" placeholder="universo" value="<?php echo $_smarty_tpl->tpl_vars['universo']->value->universo;?>
" required> 
               <input type="submit">
    </form>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div><?php }
}
