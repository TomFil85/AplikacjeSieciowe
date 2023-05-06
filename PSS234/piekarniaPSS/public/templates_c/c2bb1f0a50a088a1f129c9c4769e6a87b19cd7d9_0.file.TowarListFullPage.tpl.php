<?php
/* Smarty version 4.1.0, created on 2023-05-06 18:48:50
  from 'C:\xampp\htdocs\piekarniaPSS\app\views\TowarListFullPage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_645684f2315ed2_25172377',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c2bb1f0a50a088a1f129c9c4769e6a87b19cd7d9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\piekarniaPSS\\app\\views\\TowarListFullPage.tpl',
      1 => 1683391704,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:TowarListTable.tpl' => 1,
  ),
),false)) {
function content_645684f2315ed2_25172377 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1852249489645684f1bd7963_00789983', 'top');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_460320313645684f1be36c5_67986834', 'content');
?>


	
</div>
</div>
</div>
</div>
</body>
</html><?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'top'} */
class Block_1852249489645684f1bd7963_00789983 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_1852249489645684f1bd7963_00789983',
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
class Block_460320313645684f1be36c5_67986834 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_460320313645684f1be36c5_67986834',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div class="content">
        <form id="search-form" class="pure-form pure-form-stacked" onsubmit="ajaxPostForm('search-form','<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
towarListPart','table'); return false;">
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
        
        
        
        
        <?php if ($_smarty_tpl->tpl_vars['pagination']->value['total_pages'] > 1) {?>
		<div>
			<?php if ($_smarty_tpl->tpl_vars['pagination']->value['has_previous_page']) {?>
				<a class="pure-button" href="<?php echo $_smarty_tpl->tpl_vars['pagination']->value['previous_page_link'];?>
">&laquo; Poprzednia </a>
			<?php }?>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, range(1,$_smarty_tpl->tpl_vars['pagination']->value['total_pages']), 'page_number');
$_smarty_tpl->tpl_vars['page_number']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['page_number']->value) {
$_smarty_tpl->tpl_vars['page_number']->do_else = false;
?>
				<?php if ($_smarty_tpl->tpl_vars['page_number']->value == $_smarty_tpl->tpl_vars['pagination']->value['current_page']) {?>
					<span class="pure-button" disabled=""><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</span>
				<?php } else { ?>
					<a class="pure-button" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
tab?page=<?php echo $_smarty_tpl->tpl_vars['page_number']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['page_number']->value;?>
</a>
				<?php }?>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			<br><br>
			<?php if ($_smarty_tpl->tpl_vars['pagination']->value['has_next_page']) {?>
				<a class="pure-button" href="<?php echo $_smarty_tpl->tpl_vars['pagination']->value['next_page_link'];?>
">Następna &raquo;</a>
			<?php }?>
		</div>
	<?php }?>
        
        
	<?php
}
}
/* {/block 'content'} */
}
