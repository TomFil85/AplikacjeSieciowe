<?php
/* Smarty version 4.1.0, created on 2023-02-07 11:04:15
  from 'C:\xampp\htdocs\piekarnia\app\views\RegisterView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_63e2221f4ae703_34295809',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '47f72a6f4776fd9c57ca0bb3b2e76ea84be0e05c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\piekarnia\\app\\views\\RegisterView.tpl',
      1 => 1675763582,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63e2221f4ae703_34295809 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5040031863e2221f473597_38607535', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_5040031863e2221f473597_38607535 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_5040031863e2221f473597_38607535',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="bottom-margin">
<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
userSave" method="post" class="pure-form pure-form-aligned">
	<fieldset>
		<legend>Rejestracja użytkownika</legend>
		<div class="pure-control-group">
            <label for="nazwa">login:</label>
            <input id="nazwa" type="text" placeholder="login" name="nazwa" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->nazwa;?>
" required>
        </div>
        	<div class="pure-control-group">
            <label for="haslo">hasło:</label>
            <input id="haslo" type="haslo" placeholder="haslo" name="haslo" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->haslo;?>
" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}">
        </div>
		<div class="pure-control-group">
            <label for="haslo2">potwierdź hasło:</label>
            <input id="haslo2" type="haslo" placeholder="potwierdź hasło" name="haslo2" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->haslo2;?>
" required>
        </div>
        <div class="pure-control-group">
            <label for="email">email:</label>
            <input id="email" type="email" placeholder="email" name="email" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->email;?>
" required>
        </div>
	
		<div class="pure-controls">
			<input type="submit" class="pure-button pure-button-primary" value="zapisz"/>
			<a class="pure-button button-secondary" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
loginShow">Powrót</a>
		</div>
	</fieldset>
    <input type="hidden" name="id_user" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->id_user;?>
">
</form>	
</div>

<?php
}
}
/* {/block 'content'} */
}
