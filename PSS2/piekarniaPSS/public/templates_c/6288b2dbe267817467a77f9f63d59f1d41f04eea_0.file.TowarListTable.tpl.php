<?php
/* Smarty version 4.1.0, created on 2023-02-08 15:58:29
  from 'C:\xampp\htdocs\piekarnia\app\views\TowarListTable.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_63e3b89543d626_81228532',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6288b2dbe267817467a77f9f63d59f1d41f04eea' => 
    array (
      0 => 'C:\\xampp\\htdocs\\piekarnia\\app\\views\\TowarListTable.tpl',
      1 => 1675868285,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63e3b89543d626_81228532 (Smarty_Internal_Template $_smarty_tpl) {
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
">Edytuj</a>&nbsp;<a class="button-small pure-button button-warning" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
towarDelete/<?php echo $_smarty_tpl->tpl_vars['r']->value['id_towar'];?>
">Usuń</a></div><?php } else { ?><a class="button-small pure-button button-secondary" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
cartNew/<?php echo $_smarty_tpl->tpl_vars['r']->value['id_towar'];?>
"><i class="fa fa-shopping-cart fa-lg"></i>Dodaj do koszyka</a></p></div><?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div><?php }
}
