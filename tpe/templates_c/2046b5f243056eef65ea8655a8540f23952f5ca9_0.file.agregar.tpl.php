<?php
/* Smarty version 4.2.1, created on 2022-10-14 20:30:58
  from 'C:\xampp\htdocs\tpe\templates\agregar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6349aae2449073_05806757',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2046b5f243056eef65ea8655a8540f23952f5ca9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpe\\templates\\agregar.tpl',
      1 => 1665772233,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6349aae2449073_05806757 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_SESSION['USER_ID']))) {?>
    <div class="separar">
        <form method="POST" action="agregar">
            <input type="text" name="personaje" placeholder="personaje" required>
            <input type="text" name="raza" placeholder="raza" required>
            <input type="text" name="afiliacion" placeholder="afiliación/equipo">
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
            <label>Universo Origen</label>
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
    </div>
    <?php }
}
}
