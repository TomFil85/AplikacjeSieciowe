<?php
/* Smarty version 4.1.0, created on 2023-05-06 19:09:21
  from 'C:\xampp\htdocs\piekarniaPSS\app\views\TowarEdit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_645689c19be222_07873228',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '935b91481e2ab7e0107badeb8acf5838785b7cad' => 
    array (
      0 => 'C:\\xampp\\htdocs\\piekarniaPSS\\app\\views\\TowarEdit.tpl',
      1 => 1683392947,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_645689c19be222_07873228 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1975447054645689c197f819_73830885', 'top');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1919589963645689c198b659_50113435', 'content');
?>

</div>
</div>
</body>
</html><?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'top'} */
class Block_1975447054645689c197f819_73830885 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_1975447054645689c197f819_73830885',
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
class Block_1919589963645689c198b659_50113435 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1919589963645689c198b659_50113435',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="bottom-margin">
<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
towarSave" method="post" class="pure-form pure-form-aligned">
	
    <fieldset>
		<legend>Informacje o produkcie</legend>
		<div class="pure-control-group">
            <label for="nazwa">Nazwa</label>
            <input id="nazwa" type="text" placeholder="Nazwa" name="nazwa" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->nazwa;?>
">
        </div>
		<div class="pure-control-group">
            <label for="cena">Cena</label>
            <input id="cena" type="text" placeholder="Cena" name="cena" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->cena;?>
">
        </div>
		<div class="pure-control-group">
            <label for="kalorie">Kalorie</label>
            <input id="kalorie" type="text" placeholder="kalorie" name="kalorie" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->kalorie;?>
">
        </div>
       
		<div class="pure-controls">
			<input type="submit" class="pure-button pure-button-primary" value="Zapisz"/>
			<a class="pure-button button-secondary" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
towarList">Powrót</a>
		</div>
	</fieldset>
    
    
    <input type="hidden" name="id_towar" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->id_towar;?>
">
</form>	
</div>

<?php
}
}
/* {/block 'content'} */
}
