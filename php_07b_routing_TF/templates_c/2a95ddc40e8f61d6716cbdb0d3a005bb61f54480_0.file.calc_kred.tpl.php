<?php
/* Smarty version 4.2.1, created on 2022-11-17 11:05:47
  from 'C:\xampp\htdocs\php_06a_nowa_struktura_TF\app\views\calc_kred.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6376077b788134_26430662',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2a95ddc40e8f61d6716cbdb0d3a005bb61f54480' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_06a_nowa_struktura_TF\\app\\views\\calc_kred.tpl',
      1 => 1668646240,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6376077b788134_26430662 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17205649516376077b6d0660_97855702', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_468292826376077b6e1572_15617827', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'footer'} */
class Block_17205649516376077b6d0660_97855702 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_17205649516376077b6d0660_97855702',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
TF<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_468292826376077b6e1572_15617827 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_468292826376077b6e1572_15617827',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<h2 class="content-head is-center">Kalkulator kredytowy</h2>

<div class="pure-g">
<div class="l-box-lrg pure-u-1 pure-u-med-2-5">
        <form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
calc_kredCompute" method="post">
		<fieldset>
	<label for="kwota">Kwota: </label>
	<input id="kwota" type="text"  name="kwota" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->kwota;?>
">
	<label for="ile_lat">Na ile lat: </label>
	<input id="na_ile_lat" type="text" name="na_ile_lat" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->na_ile_lat;?>
">
	<label for="ile_procent">Ile procent: </label>
	<input id="ile_procent" type="text" name="ile_procent" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->ile_procent;?>
">
      </fieldset>
	<button type="submit" class="pure-button">Oblicz</button>	
	</form>
</div>

      
      <div class="l-box-lrg pure-u-1 pure-u-med-3-5">
      <div class="messages">

<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isError()) {?>
	<h4>Wystąpiły błędy: </h4>
	<ol class="err">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getErrors(), 'err');
$_smarty_tpl->tpl_vars['err']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['err']->value) {
$_smarty_tpl->tpl_vars['err']->do_else = false;
?>
	<li><?php echo $_smarty_tpl->tpl_vars['err']->value;?>
</li>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</ol>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isInfo()) {?>
	<h4>Informacje: </h4>
	<ol class="inf">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getInfos(), 'inf');
$_smarty_tpl->tpl_vars['inf']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['inf']->value) {
$_smarty_tpl->tpl_vars['inf']->do_else = false;
?>
	<li><?php echo $_smarty_tpl->tpl_vars['inf']->value;?>
</li>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</ol>
<?php }?>

<?php if ((isset($_smarty_tpl->tpl_vars['res']->value->result))) {?>
	<h4>Wysokość raty wynosi:</h4>
	<p class="res">
	<?php echo $_smarty_tpl->tpl_vars['res']->value->result;?>

	</p>
<?php }?>

</div>
</div>
</div>

<?php
}
}
/* {/block 'content'} */
}
