<?php
/* Smarty version 4.1.0, created on 2023-01-31 16:12:17
  from 'C:\xampp\htdocs\zadanie9\app\views\RegisterView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_63d92fd1dd0158_37811687',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '66c7f3821fd2481e5922f7da3c39adebe363b1a6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\zadanie9\\app\\views\\RegisterView.tpl',
      1 => 1675176927,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63d92fd1dd0158_37811687 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_154645846363d92fd1dcafd6_62829182', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_154645846363d92fd1dcafd6_62829182 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_154645846363d92fd1dcafd6_62829182',
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
            <label for="username">login:</label>
            <input id="username" type="text" placeholder="login" name="username" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->username;?>
" required>
        </div>
        <div class="pure-control-group">
            <label for="email">email:</label>
            <input id="email" type="email" placeholder="email" name="email" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->email;?>
" required>
        </div>
		<div class="pure-control-group">
            <label for="passwordd">hasło:</label>
<input id="passwordd" type="password" placeholder="hasło" name="passwordd" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->passwordd;?>
" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}">
        </div>
		<div class="pure-control-group">
            <label for="passwordd2">potwierdź hasło:</label>
            <input id="passwordd2" type="password" placeholder="potwierdź hasło" name="passwordd2" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->passwordd2;?>
" required>
        </div>
		<div class="pure-controls">
			<input type="submit" class="pure-button pure-button-primary" value="Zapisz"/>
			<a class="pure-button button-secondary" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
loginShow">Powrót</a>
		</div>
	</fieldset>
    <input type="hidden" name="user_id" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->user_id;?>
">
</form>	
</div>

<?php
}
}
/* {/block 'content'} */
}
