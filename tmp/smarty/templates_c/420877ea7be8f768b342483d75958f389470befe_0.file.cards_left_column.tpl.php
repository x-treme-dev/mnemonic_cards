<?php
/* Smarty version 4.3.2, created on 2024-01-01 08:55:14
  from '/opt/lampp/htdocs/cards-project/views/default/cards_left_column.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_65926fe2d0e172_46630327',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '420877ea7be8f768b342483d75958f389470befe' => 
    array (
      0 => '/opt/lampp/htdocs/cards-project/views/default/cards_left_column.tpl',
      1 => 1704095712,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65926fe2d0e172_46630327 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container_from_two_blocks">
<div id="leftColumn">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsCategories']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
              <a  href="/cards/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/">
              <span><?php echo $_smarty_tpl->tpl_vars['item']->value['category'];?>
</span>
               </a>
               <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      
</div><?php }
}
