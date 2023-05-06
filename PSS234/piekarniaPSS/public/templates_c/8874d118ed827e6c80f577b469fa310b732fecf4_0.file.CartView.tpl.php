<?php
/* Smarty version 4.1.0, created on 2023-02-05 13:39:44
  from 'C:\xampp\htdocs\projektMiloszLesiak\app\views\CartView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_63dfa390552bb4_52332200',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8874d118ed827e6c80f577b469fa310b732fecf4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projektMiloszLesiak\\app\\views\\CartView.tpl',
      1 => 1675177530,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63dfa390552bb4_52332200 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_142422384863dfa390488fb7_47800045', 'top');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_88767094063dfa39048db67_63128854', 'content');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_56622108363dfa3905516a9_76950488', 'bottom');
?>

</div>
</div>
</body>
</html><?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'top'} */
class Block_142422384863dfa390488fb7_47800045 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_142422384863dfa390488fb7_47800045',
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
class Block_88767094063dfa39048db67_63128854 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_88767094063dfa39048db67_63128854',
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
/images/cdsymbol.png"><p><?php
$__section_customer_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['plyta_id']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_customer_0_total = $__section_customer_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_customer'] = new Smarty_Variable(array());
if ($__section_customer_0_total !== 0) {
for ($__section_customer_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_customer']->value['index'] = 0; $__section_customer_0_iteration <= $__section_customer_0_total; $__section_customer_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_customer']->value['index']++){
?><p><?php echo $_smarty_tpl->tpl_vars['r']->value["nazwa_zespolu"];?>
 <br><?php echo $_smarty_tpl->tpl_vars['r']->value["tytul_albumu"];?>
 <br><?php echo $_smarty_tpl->tpl_vars['r']->value["rok_wydania"];?>
 <br><?php echo $_smarty_tpl->tpl_vars['r']->value["gatunek"];?>
 <br><?php echo $_smarty_tpl->tpl_vars['r']->value["formatt"];?>
 <br><?php echo $_smarty_tpl->tpl_vars['r']->value["cena"];?>
 zł <br></p><a class="button-small pure-button button-warning" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
cartDelete/<?php echo $_smarty_tpl->tpl_vars['r']->value['plyta_id'];?>
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
class Block_56622108363dfa3905516a9_76950488 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bottom' => 
  array (
    0 => 'Block_56622108363dfa3905516a9_76950488',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

 
<?php
}
}
/* {/block 'bottom'} */
}
