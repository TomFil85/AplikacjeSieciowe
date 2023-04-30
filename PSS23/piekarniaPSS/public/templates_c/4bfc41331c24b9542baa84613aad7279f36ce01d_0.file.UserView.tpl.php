<?php
/* Smarty version 4.1.0, created on 2023-04-16 21:01:53
  from 'C:\xampp\htdocs\piekarniaPSS\app\views\UserView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_643c46215c2ff3_51692113',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4bfc41331c24b9542baa84613aad7279f36ce01d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\piekarniaPSS\\app\\views\\UserView.tpl',
      1 => 1675876039,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_643c46215c2ff3_51692113 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_87103286643c4621582249_45198484', 'top');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1723732584643c46215848c5_52170556', 'content');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1023068138643c46215c17d9_66626701', 'bottom');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'top'} */
class Block_87103286643c4621582249_45198484 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_87103286643c4621582249_45198484',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div id="main">
	<div class="header">
		<h1>Piekarnia</h1>
	</div>
	<?php
}
}
/* {/block 'top'} */
/* {block 'content'} */
class Block_1723732584643c46215848c5_52170556 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1723732584643c46215848c5_52170556',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



<?php if (\core\RoleUtils::inRole("admin")) {?>
<div class="bottom-margin">
<form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
userList">
	<legend>Admin</legend>
	<fieldset>
			<input id="searchform" type="text" placeholder="nazwa" name="sf_nazwa" value="<?php echo $_smarty_tpl->tpl_vars['searchForm']->value->nazwa;?>
" /><br />
			<button type="submit" class="pure-button pure-button-primary">Filtruj</button>
		</fieldset>
                      
</form>
</div>	


<table id="tab_people" class="pure-table pure-table-bordered">
<thead>
	<tr>
		<th>nazwa</th>
		<th>hasło</th>
		<th>edycja</th>
	</tr>
</thead>
<tbody>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['records']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
<tr><td><?php echo $_smarty_tpl->tpl_vars['r']->value["nazwa"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['r']->value["haslo"];?>
</td><td><a class="button-small pure-button button-secondary" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
userEdit/<?php echo $_smarty_tpl->tpl_vars['r']->value['id_user'];?>
">Zmien</a>&nbsp;<a class="button-small pure-button button-warning" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
userDelete/<?php echo $_smarty_tpl->tpl_vars['r']->value['id_user'];?>
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
			<th>nazwa</th>
			<th>edycja</th>
		</tr>
</thead>
<tbody>
	<tr>
<td>login</td>
		<td>
			<a class="button-small pure-button button-secondary">Zmiena hasla</a>
		</td>
	</tr>
</tbody>
</table>

<?php }
}
}
/* {/block 'content'} */
/* {block 'bottom'} */
class Block_1023068138643c46215c17d9_66626701 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bottom' => 
  array (
    0 => 'Block_1023068138643c46215c17d9_66626701',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

 
 <?php
}
}
/* {/block 'bottom'} */
}
