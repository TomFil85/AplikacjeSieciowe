<?php
/* Smarty version 4.1.0, created on 2023-02-05 10:52:27
  from 'C:\xampp\htdocs\projekt\app\views\AlbumListFullPage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_63df7c5b674b45_73139004',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '248562609baaee3a04e8ce491a665ff9379992d2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projekt\\app\\views\\AlbumListFullPage.tpl',
      1 => 1675162224,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:AlbumListTable.tpl' => 1,
  ),
),false)) {
function content_63df7c5b674b45_73139004 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_31898725363df7c5b30ae82_41191980', 'top');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_42022807263df7c5b313ab1_31810511', 'content');
?>


	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12155303763df7c5b673819_29823802', 'bottom');
?>

</div>
</div>
</div>
</div>
</body>
</html><?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'top'} */
class Block_31898725363df7c5b30ae82_41191980 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_31898725363df7c5b30ae82_41191980',
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
class Block_42022807263df7c5b313ab1_31810511 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_42022807263df7c5b313ab1_31810511',
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
class Block_12155303763df7c5b673819_29823802 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bottom' => 
  array (
    0 => 'Block_12155303763df7c5b673819_29823802',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


	 <?php
}
}
/* {/block 'bottom'} */
}
