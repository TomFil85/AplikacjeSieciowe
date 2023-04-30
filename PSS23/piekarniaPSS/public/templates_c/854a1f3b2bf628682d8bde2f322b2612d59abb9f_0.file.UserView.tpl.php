<?php
/* Smarty version 4.1.0, created on 2023-02-05 13:34:25
  from 'C:\xampp\htdocs\projektMiloszLesiak\app\views\UserView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_63dfa251cd70f3_95973594',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '854a1f3b2bf628682d8bde2f322b2612d59abb9f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projektMiloszLesiak\\app\\views\\UserView.tpl',
      1 => 1675177544,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63dfa251cd70f3_95973594 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20782018363dfa2519ead55_88385444', 'top');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_106470863063dfa2519f0646_86047695', 'content');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_37666003063dfa251cd4d61_55991424', 'bottom');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'top'} */
class Block_20782018363dfa2519ead55_88385444 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_20782018363dfa2519ead55_88385444',
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
class Block_106470863063dfa2519f0646_86047695 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_106470863063dfa2519f0646_86047695',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



<?php if (\core\RoleUtils::inRole("admin")) {?>
<div class="bottom-margin">
<form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
userList">
	<legend>Panel administratora</legend>
	<fieldset>
		<input type="text" placeholder="login" name="sf_username" value="<?php echo $_smarty_tpl->tpl_vars['searchForm']->value->username;?>
" /><br />
		<button type="submit" class="pure-button pure-button-primary">Filtruj</button>
	</fieldset>
</form>
</div>	


<table id="tab_people" class="pure-table pure-table-bordered">
<thead>
	<tr>
		<th>nazwa użytkownika</th>
		<th>hasło</th>
		<th>opcje</th>
	</tr>
</thead>
<tbody>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['records']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
<tr><td><?php echo $_smarty_tpl->tpl_vars['r']->value["username"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['r']->value["passwordd"];?>
</td><td><a class="button-small pure-button button-secondary" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
userEdit/<?php echo $_smarty_tpl->tpl_vars['r']->value['user_id'];?>
">Edytuj</a>&nbsp;<a class="button-small pure-button button-warning" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
userDelete/<?php echo $_smarty_tpl->tpl_vars['r']->value['user_id'];?>
">Usuń</a></td></tr>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</tbody>
</table>
<?php } else { ?>
	<table id="tab_people" class="pure-table pure-table-bordered">
	<thead>
		<tr>
			<th>nazwa użytkownika</th>
			<th>opcje</th>
		</tr>
</thead>
<tbody>
	<tr>
<td>login</td>
		<td>
			<a class="button-small pure-button button-secondary">Zmien hasło</a>
		</td>
	</tr>
</tbody>
</table>

<?php }
}
}
/* {/block 'content'} */
/* {block 'bottom'} */
class Block_37666003063dfa251cd4d61_55991424 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bottom' => 
  array (
    0 => 'Block_37666003063dfa251cd4d61_55991424',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

 
 <?php
}
}
/* {/block 'bottom'} */
}
