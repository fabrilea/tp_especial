<?php
/* Smarty version 4.2.1, created on 2022-10-15 00:42:21
  from 'C:\xampp\htdocs\tpe\templates\editarPersonajeUniverso.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6349e5cd1f94e7_03062888',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7a89eaf4f970a0c41e0518c02211983918843ef8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpe\\templates\\editarPersonajeUniverso.tpl',
      1 => 1665787336,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6349e5cd1f94e7_03062888 (Smarty_Internal_Template $_smarty_tpl) {
?>
<select name="universo">

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['universos']->value, 'universo');
$_smarty_tpl->tpl_vars['universo']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['universo']->value) {
$_smarty_tpl->tpl_vars['universo']->do_else = false;
?>

    <option value="<?php echo $_smarty_tpl->tpl_vars['universo']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['universo']->value->universo;?>
</option>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</select>
<input type="submit">  
    </form>



<?php }
}
