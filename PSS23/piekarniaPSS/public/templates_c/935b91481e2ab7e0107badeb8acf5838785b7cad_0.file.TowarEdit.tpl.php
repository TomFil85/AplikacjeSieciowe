<?php
/* Smarty version 4.1.0, created on 2023-04-30 21:27:38
  from 'C:\xampp\htdocs\piekarniaPSS\app\views\TowarEdit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_644ec12aa1a760_88630999',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '935b91481e2ab7e0107badeb8acf5838785b7cad' => 
    array (
      0 => 'C:\\xampp\\htdocs\\piekarniaPSS\\app\\views\\TowarEdit.tpl',
      1 => 1675877834,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_644ec12aa1a760_88630999 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_215875665644ec12a9e2664_08024915', 'top');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_925284687644ec12a9e6a28_24185501', 'content');
?>

</div>
</div>
</body>
</html><?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'top'} */
class Block_215875665644ec12a9e2664_08024915 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_215875665644ec12a9e2664_08024915',
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
class Block_925284687644ec12a9e6a28_24185501 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_925284687644ec12a9e6a28_24185501',
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
albumList">Powrót</a>
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
