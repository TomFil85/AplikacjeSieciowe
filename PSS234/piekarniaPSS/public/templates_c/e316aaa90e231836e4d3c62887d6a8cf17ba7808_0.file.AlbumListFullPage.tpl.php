<?php
/* Smarty version 4.1.0, created on 2023-02-05 10:53:21
  from 'C:\xampp\htdocs\projektMiloszLesiak\app\views\AlbumListFullPage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_63df7c91474557_60327378',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e316aaa90e231836e4d3c62887d6a8cf17ba7808' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projektMiloszLesiak\\app\\views\\AlbumListFullPage.tpl',
      1 => 1675162224,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:AlbumListTable.tpl' => 1,
  ),
),false)) {
function content_63df7c91474557_60327378 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_101596338463df7c91412870_97334267', 'top');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_116555888563df7c91418e69_37867812', 'content');
?>


	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_126985407163df7c91471144_93650240', 'bottom');
?>

</div>
</div>
</div>
</div>
</body>
</html><?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'top'} */
class Block_101596338463df7c91412870_97334267 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_101596338463df7c91412870_97334267',
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
class Block_116555888563df7c91418e69_37867812 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_116555888563df7c91418e69_37867812',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div class="content">
	<h2 class="content-subhead">Gatunek</h2>
	<div class="bottom-margin">
	<form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
albumList">
		<legend>Opcje wyszukiwania</legend>
		<fieldset>
			<input id="searchform" type="text" placeholder="Tytuł albumu" name="sf_tytul_albumu" value="<?php echo $_smarty_tpl->tpl_vars['searchForm']->value->tytul_albumu;?>
" /><br />
			<button type="submit" class="pure-button pure-button-primary">Filtruj</button>
		</fieldset>
		</form>
	</div>

	<?php if (\core\RoleUtils::inRole("admin")) {?>
	<div class="bottom-margin">
	<a class="pure-button button-success" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
albumNew">Dodaj album</a>
	</div>	
	<?php }?>
	<div id="table">
	<?php $_smarty_tpl->_subTemplateRender("file:AlbumListTable.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	</div>
	<?php
}
}
/* {/block 'content'} */
/* {block 'bottom'} */
class Block_126985407163df7c91471144_93650240 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bottom' => 
  array (
    0 => 'Block_126985407163df7c91471144_93650240',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


	 <?php
}
}
/* {/block 'bottom'} */
}
