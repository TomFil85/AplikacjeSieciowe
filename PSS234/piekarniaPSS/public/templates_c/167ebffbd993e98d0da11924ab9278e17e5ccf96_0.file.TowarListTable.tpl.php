<?php
/* Smarty version 4.1.0, created on 2023-05-06 19:05:28
  from 'C:\xampp\htdocs\piekarniaPSS\app\views\TowarListTable.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_645688d85c7146_85601459',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '167ebffbd993e98d0da11924ab9278e17e5ccf96' => 
    array (
      0 => 'C:\\xampp\\htdocs\\piekarniaPSS\\app\\views\\TowarListTable.tpl',
      1 => 1683392703,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_645688d85c7146_85601459 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="pure-g">

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['records']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
<div class="pure-u-1-4"><img class="pure-img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_root;?>
/images/chleb.png"><p><?php echo $_smarty_tpl->tpl_vars['r']->value["nazwa"];?>
 <br><?php echo $_smarty_tpl->tpl_vars['r']->value["cena"];?>
 zł <br><?php echo $_smarty_tpl->tpl_vars['r']->value["kalorie"];?>
 <br><?php if (\core\RoleUtils::inRole("admin")) {?><a class="button-small pure-button button-secondary" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
towarEdit/<?php echo $_smarty_tpl->tpl_vars['r']->value['id_towar'];?>
">Edytuj</a>&nbsp;<a class="button-small pure-button button-warning" onclick="confirmLink('<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
towarDelete/<?php echo $_smarty_tpl->tpl_vars['r']->value['id_towar'];?>
','Czy na pewno usunąć rekord ?')">Usuń</a></div><?php } else { ?><a class="button-small pure-button button-secondary" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
cartNew/<?php echo $_smarty_tpl->tpl_vars['r']->value['id_towar'];?>
"><i class="fa fa-shopping-cart fa-lg"></i>Dodaj do koszyka</a></p></div><?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div><?php }
}
