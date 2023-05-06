<?php
/* Smarty version 4.1.0, created on 2023-01-31 16:08:08
  from 'C:\xampp\htdocs\zadanie9\app\views\LoginView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_63d92ed80b50d1_95735118',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f29523d16b2ed46934e73f0e7f0ce936444def33' => 
    array (
      0 => 'C:\\xampp\\htdocs\\zadanie9\\app\\views\\LoginView.tpl',
      1 => 1675161385,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63d92ed80b50d1_95735118 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_81829413363d92ed80b06d1_48030382', 'top');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_192803652063d92ed80b15c3_97509155', 'content');
?>

</div>
</div>
</body>
</html><?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'top'} */
class Block_81829413363d92ed80b06d1_48030382 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_81829413363d92ed80b06d1_48030382',
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
class Block_192803652063d92ed80b15c3_97509155 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_192803652063d92ed80b15c3_97509155',
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
