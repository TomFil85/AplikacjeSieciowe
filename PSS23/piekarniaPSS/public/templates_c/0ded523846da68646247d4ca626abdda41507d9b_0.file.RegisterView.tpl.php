<?php
/* Smarty version 4.1.0, created on 2023-04-16 21:02:15
  from 'C:\xampp\htdocs\piekarniaPSS\app\views\RegisterView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_643c463780cef7_48352303',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0ded523846da68646247d4ca626abdda41507d9b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\piekarniaPSS\\app\\views\\RegisterView.tpl',
      1 => 1675763582,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_643c463780cef7_48352303 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1169139784643c46377cd500_72319220', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_1169139784643c46377cd500_72319220 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1169139784643c46377cd500_72319220',
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
