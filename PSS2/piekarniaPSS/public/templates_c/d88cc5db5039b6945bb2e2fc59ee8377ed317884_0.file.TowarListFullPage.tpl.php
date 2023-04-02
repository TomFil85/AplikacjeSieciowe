<?php
/* Smarty version 4.1.0, created on 2023-02-08 18:51:27
  from 'C:\xampp\htdocs\piekarnia\app\views\TowarListFullPage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_63e3e11fd39800_01240543',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd88cc5db5039b6945bb2e2fc59ee8377ed317884' => 
    array (
      0 => 'C:\\xampp\\htdocs\\piekarnia\\app\\views\\TowarListFullPage.tpl',
      1 => 1675878665,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:TowarListTable.tpl' => 1,
  ),
),false)) {
function content_63e3e11fd39800_01240543 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_206830934463e3e11fca2e65_18772655', 'top');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_198272825563e3e11fcb7920_64091579', 'content');
?>


	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_207035582363e3e11fd35f22_56417661', 'bottom');
?>

</div>
</div>
</div>
</div>
</body>
</html><?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'top'} */
class Block_206830934463e3e11fca2e65_18772655 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_206830934463e3e11fca2e65_18772655',
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
class Block_198272825563e3e11fcb7920_64091579 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_198272825563e3e11fcb7920_64091579',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div class="content">
	<h2 class="content-subhead">Rodzaj pieczywa</h2>
	<div class="bottom-margin">
	<form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
towarList">
		<fieldset>
                    
			<input id="searchform" type="text" placeholder="nazwa" name="sf_nazwa" value="<?php echo $_smarty_tpl->tpl_vars['searchForm']->value->nazwa;?>
" /><br />
			<button type="submit" class="pure-button pure-button-primary">Filtruj</button>
		</fieldset>
		</form>
	</div>

	<?php if (\core\RoleUtils::inRole("admin")) {?>
	<div class="bottom-margin">
	<a class="pure-button button-success" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
towarNew">Dodaj towar</a>
	</div>	
	<?php }?>
	<div id="table">
	<?php $_smarty_tpl->_subTemplateRender("file:TowarListTable.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	</div>
	<?php
}
}
/* {/block 'content'} */
/* {block 'bottom'} */
class Block_207035582363e3e11fd35f22_56417661 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bottom' => 
  array (
    0 => 'Block_207035582363e3e11fd35f22_56417661',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


	 <?php
}
}
/* {/block 'bottom'} */
}
