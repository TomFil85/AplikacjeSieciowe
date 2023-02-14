<?php
/* Smarty version 4.1.0, created on 2023-02-05 10:53:40
  from 'C:\xampp\htdocs\projektMiloszLesiak\app\views\LoginView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_63df7ca46aad53_31235611',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7bd3c379af701d28d0309d0dc184fcd984bff212' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projektMiloszLesiak\\app\\views\\LoginView.tpl',
      1 => 1675161386,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63df7ca46aad53_31235611 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_85847176263df7ca469a688_28410943', 'top');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_34773260963df7ca469f3d2_27790346', 'content');
?>

</div>
</div>
</body>
</html><?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'top'} */
class Block_85847176263df7ca469a688_28410943 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_85847176263df7ca469a688_28410943',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div id="main">
	<div class="header">
		<h1>CEDE</h1>
		<h2>Płyty muzyczne</h2>
	</div>
	<?php
}
}
/* {/block 'top'} */
/* {block 'content'} */
class Block_34773260963df7ca469f3d2_27790346 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_34773260963df7ca469f3d2_27790346',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
login" method="post" class="pure-form pure-form-aligned bottom-margin">
	<legend>Logowanie do systemu</legend>
	<fieldset>
        <div class="pure-control-group">
			<label for="id_login">Login: </label>
			<input id="id_login" type="text" name="login" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->login;?>
"/>
		</div>
        <div class="pure-control-group">
			<label for="id_pass">Hasło: </label>
			<input id="id_pass" type="password" name="pass" /><br />
		</div>
		<div class="pure-controls">
			<input type="submit" value="Zaloguj się" class="pure-button pure-button-primary"/>
		</div>
	</fieldset>
	<div class="pure-controls">
<a class="pure-button pure-button-primary" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
userNew">Zarejestruj się</a>
</div>
</form>


<?php
}
}
/* {/block 'content'} */
}
