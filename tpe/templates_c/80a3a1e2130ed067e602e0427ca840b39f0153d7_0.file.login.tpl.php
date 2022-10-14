<?php
/* Smarty version 4.2.1, created on 2022-10-14 19:37:57
  from 'C:\xampp\htdocs\tpe\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63499e75403c18_75095836',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '80a3a1e2130ed067e602e0427ca840b39f0153d7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpe\\templates\\login.tpl',
      1 => 1665768141,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63499e75403c18_75095836 (Smarty_Internal_Template $_smarty_tpl) {
?><div>
<h1>LogIn</h1>
    <form method="POST" action="validate">
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" required name="email" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" required name="password">
        </div>

        <?php if ($_smarty_tpl->tpl_vars['error']->value) {?> 
            <div>
                <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

            </div>
        <?php }?>
        <button type="submit">Entrar</button>
    </form>
    
    <h1>Register</h1>
    <form method="POST" action="registrar">
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" required name="email" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" required name="password">
        </div>
        <button type="submit">Registrar</button>
    </form>
</div>




<?php }
}
