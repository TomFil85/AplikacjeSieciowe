<?php
/* Smarty version 4.2.1, created on 2022-11-29 19:55:25
  from 'C:\xampp\htdocs\php_07b_routing_TF\app\views\calc_kred.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6386559d8a30e4_98548604',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e7805820cb8f4590425ad488ea96f7db17afa3d3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_07b_routing_TF\\app\\views\\calc_kred.tpl',
      1 => 1669663949,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_6386559d8a30e4_98548604 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5164543506386559d81fe08_36911327', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5866958206386559d82c671_54988099', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'footer'} */
class Block_5164543506386559d81fe08_36911327 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_5164543506386559d81fe08_36911327',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
TF<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_5866958206386559d82c671_54988099 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_5866958206386559d82c671_54988099',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    
    <div class="pure-menu pure-menu-horizontal bottom-margin">
	<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
logout"  class="pure-menu-heading pure-menu-link">wyloguj</a>
	<span style="float:right;">użytkownik: <?php echo $_smarty_tpl->tpl_vars['user']->value->login;?>
, rola: <?php echo $_smarty_tpl->tpl_vars['user']->value->role;?>
</span>
</div>

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

<?php $_smarty_tpl->_subTemplateRender('file:messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

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
