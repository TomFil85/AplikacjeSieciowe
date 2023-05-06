<?php
/* Smarty version 4.1.0, created on 2023-02-05 10:53:22
  from 'C:\xampp\htdocs\projektMiloszLesiak\app\views\AlbumListTable.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_63df7c921d8d27_87372336',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '18ed6c09174333a7974bedbf2d7e872fd7b6f38a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projektMiloszLesiak\\app\\views\\AlbumListTable.tpl',
      1 => 1675163760,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63df7c921d8d27_87372336 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="pure-g">

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['records']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
<div class="pure-u-1-4"><img class="pure-img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_root;?>
/images/cdsymbol.png"><p><?php echo $_smarty_tpl->tpl_vars['r']->value["nazwa_zespolu"];?>
 <br><?php echo $_smarty_tpl->tpl_vars['r']->value["tytul_albumu"];?>
 <br><?php echo $_smarty_tpl->tpl_vars['r']->value["rok_wydania"];?>
 <br><?php echo $_smarty_tpl->tpl_vars['r']->value["gatunek"];?>
 <br><?php echo $_smarty_tpl->tpl_vars['r']->value["formatt"];?>
 <br><?php echo $_smarty_tpl->tpl_vars['r']->value["cena"];?>
 zł <br><?php if (\core\RoleUtils::inRole("admin")) {?><a class="button-small pure-button button-secondary" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
albumEdit/<?php echo $_smarty_tpl->tpl_vars['r']->value['plyta_id'];?>
">Edytuj</a>&nbsp;&nbsp;<a class="button-small pure-button button-warning" onclick="confirmLink('<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
albumDelete/<?php echo $_smarty_tpl->tpl_vars['r']->value['plyta_id'];?>
','Czy na pewno usunąć rekord ?')">Usuń</a></div><?php } else { ?><a class="button-small pure-button button-secondary" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
cartNew/<?php echo $_smarty_tpl->tpl_vars['r']->value['plyta_id'];?>
"><i class="fa fa-shopping-cart fa-lg"></i>Dodaj do koszyka</a></p></div><?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div><?php }
}
