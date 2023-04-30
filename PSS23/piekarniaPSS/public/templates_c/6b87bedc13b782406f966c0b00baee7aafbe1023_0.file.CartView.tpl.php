<?php
/* Smarty version 4.1.0, created on 2023-04-16 21:02:27
  from 'C:\xampp\htdocs\piekarniaPSS\app\views\CartView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_643c4643d8b2a9_27716781',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6b87bedc13b782406f966c0b00baee7aafbe1023' => 
    array (
      0 => 'C:\\xampp\\htdocs\\piekarniaPSS\\app\\views\\CartView.tpl',
      1 => 1675869189,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_643c4643d8b2a9_27716781 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2124253892643c4643c433d3_46072584', 'top');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1545638073643c4643c44eb3_28306242', 'content');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_598846299643c4643d898e7_48936246', 'bottom');
?>

</div>
</div>
</body>
</html><?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'top'} */
class Block_2124253892643c4643c433d3_46072584 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_2124253892643c4643c433d3_46072584',
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
class Block_1545638073643c4643c44eb3_28306242 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1545638073643c4643c44eb3_28306242',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>




	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['records']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
<div class="pure-u-1-4"><img class="pure-img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_root;?>
/images/koszyk.png"><p><?php
$__section_customer_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['id_towar']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_customer_0_total = $__section_customer_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_customer'] = new Smarty_Variable(array());
if ($__section_customer_0_total !== 0) {
for ($__section_customer_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_customer']->value['index'] = 0; $__section_customer_0_iteration <= $__section_customer_0_total; $__section_customer_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_customer']->value['index']++){
?><p><?php echo $_smarty_tpl->tpl_vars['r']->value["nazwa"];?>
 <br><?php echo $_smarty_tpl->tpl_vars['r']->value["cena"];?>
 zł<br><?php echo $_smarty_tpl->tpl_vars['r']->value["kalorie"];?>
 <br></p><a class="button-small pure-button button-warning" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
cartDelete/<?php echo $_smarty_tpl->tpl_vars['r']->value['id_towar'];?>
">Usuń</a><?php
}
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php
}
}
/* {/block 'content'} */
/* {block 'bottom'} */
class Block_598846299643c4643d898e7_48936246 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bottom' => 
  array (
    0 => 'Block_598846299643c4643d898e7_48936246',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

 
<?php
}
}
/* {/block 'bottom'} */
}
