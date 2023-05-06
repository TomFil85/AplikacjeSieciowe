<?php
/* Smarty version 4.1.0, created on 2023-05-06 18:32:05
  from 'C:\xampp\htdocs\piekarniaPSS\app\views\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_645681055cb868_51834542',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9fa7181e0d6c0a8429573148d1b985455a4f24e4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\piekarniaPSS\\app\\views\\templates\\main.tpl',
      1 => 1683390393,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_645681055cb868_51834542 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Internetowa piekarnia">
    <title>Piekarnia</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/purecss@3.0.0/build/pure-min.css" integrity="sha384-X38yfunGUhNzHpBaEBsWLO+A0HDYOQi8ufWDkZ0k9e0eXz/tH3II7uKZ9msv++Ls" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/styles.css">
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/js/functions.js"><?php echo '</script'; ?>
>
</head>
<body>

<div id="layout">
    <!-- Menu toggle -->
    <a href="#menu" id="menuLink" class="menu-link">
        <!-- Hamburger icon -->
        <span></span>
    </a>

    <div id="menu">
        <div class="pure-menu">
            <a class="pure-menu-heading" href="#company">Piekarnia</a>

            <ul class="pure-menu-list">
               <li class="pure-menu-item"><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
towarList" class="pure-menu-link">Lista towarów</a></li>
               <li class="pure-menu-item"><a href="#contact" class="pure-menu-link"></a></li>
               <?php if (\core\RoleUtils::inRole("admin") || \core\RoleUtils::inRole("user")) {?>
               <li class="pure-menu-item"><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
showUser" class="pure-menu-link">Moje konto</a></li>
               <li class="pure-menu-item"><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
cartShow" class="pure-menu-link">Koszyk</a></li>
               <li class="pure-menu-item"><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
logout" class="pure-menu-link">Wyloguj</a></li>
               <?php } else { ?>	
               <li class="pure-menu-item menu-item-divided pure-menu-selected">
               <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
loginShow" class="pure-menu-link">Zaloguj</a>
               </li>
               <?php }?>
            </ul>
        </div>
    </div>




<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1432729648645681052417e6_31983625', 'top');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_32710592564568105250965_93892836', 'messages');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_624295739645681055c79c2_18353771', 'content');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_970432620645681055c9875_74077110', 'bottom');
}
/* {block 'top'} */
class Block_1432729648645681052417e6_31983625 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_1432729648645681052417e6_31983625',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'top'} */
/* {block 'messages'} */
class Block_32710592564568105250965_93892836 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'messages' => 
  array (
    0 => 'Block_32710592564568105250965_93892836',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


   <?php if ($_smarty_tpl->tpl_vars['msgs']->value->isMessage()) {?>
      <div class="messages bottom-margin">
         <ul>
         <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getMessages(), 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
         <li class="msg <?php if ($_smarty_tpl->tpl_vars['msg']->value->isError()) {?>error<?php }?> <?php if ($_smarty_tpl->tpl_vars['msg']->value->isWarning()) {?>warning<?php }?> <?php if ($_smarty_tpl->tpl_vars['msg']->value->isInfo()) {?>info<?php }?>"><?php echo $_smarty_tpl->tpl_vars['msg']->value->text;?>
</li>
         <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
         </ul>
      </div>
      <?php }?>

<?php
}
}
/* {/block 'messages'} */
/* {block 'content'} */
class Block_624295739645681055c79c2_18353771 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_624295739645681055c79c2_18353771',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'content'} */
/* {block 'bottom'} */
class Block_970432620645681055c9875_74077110 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bottom' => 
  array (
    0 => 'Block_970432620645681055c9875_74077110',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'bottom'} */
}
