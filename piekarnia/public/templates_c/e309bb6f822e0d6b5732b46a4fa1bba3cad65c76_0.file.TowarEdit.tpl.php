<?php
/* Smarty version 4.1.0, created on 2023-02-08 18:37:27
  from 'C:\xampp\htdocs\piekarnia\app\views\TowarEdit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_63e3ddd7174126_91500561',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e309bb6f822e0d6b5732b46a4fa1bba3cad65c76' => 
    array (
      0 => 'C:\\xampp\\htdocs\\piekarnia\\app\\views\\TowarEdit.tpl',
      1 => 1675877834,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63e3ddd7174126_91500561 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_133622621063e3ddd714d544_90373263', 'top');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_119444415563e3ddd7150f08_29781325', 'content');
?>

</div>
</div>
</body>
</html><?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'top'} */
class Block_133622621063e3ddd714d544_90373263 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_133622621063e3ddd714d544_90373263',
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
class Block_119444415563e3ddd7150f08_29781325 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_119444415563e3ddd7150f08_29781325',
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
