<?php
/* Smarty version 4.1.0, created on 2023-02-08 18:07:27
  from 'C:\xampp\htdocs\piekarnia\app\views\UserView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_63e3d6cfe03b34_65539071',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ed1b72a20fd3f9239331db6d1724ac8911feaeb0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\piekarnia\\app\\views\\UserView.tpl',
      1 => 1675876039,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63e3d6cfe03b34_65539071 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_183628375163e3d6cfd52750_27538201', 'top');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9753291463e3d6cfd63930_64923916', 'content');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_80852520063e3d6cfdfea09_48920540', 'bottom');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'top'} */
class Block_183628375163e3d6cfd52750_27538201 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_183628375163e3d6cfd52750_27538201',
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
class Block_9753291463e3d6cfd63930_64923916 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_9753291463e3d6cfd63930_64923916',
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
class Block_80852520063e3d6cfdfea09_48920540 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bottom' => 
  array (
    0 => 'Block_80852520063e3d6cfdfea09_48920540',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

 
 <?php
}
}
/* {/block 'bottom'} */
}
