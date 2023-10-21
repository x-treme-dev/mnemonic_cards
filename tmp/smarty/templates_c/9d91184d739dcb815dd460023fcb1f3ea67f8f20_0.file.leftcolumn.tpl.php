<?php
/* Smarty version 4.3.2, created on 2023-10-12 19:59:37
  from '/opt/lampp/htdocs/cards-project/views/default/leftcolumn.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_652834097eb9d0_44043670',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9d91184d739dcb815dd460023fcb1f3ea67f8f20' => 
    array (
      0 => '/opt/lampp/htdocs/cards-project/views/default/leftcolumn.tpl',
      1 => 1697133574,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_652834097eb9d0_44043670 (Smarty_Internal_Template $_smarty_tpl) {
?>  <div id="leftColumn">
      
      
     <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsCategories']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
         <a class="link" href="/cards/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/">
             <span><?php echo $_smarty_tpl->tpl_vars['item']->value['category'];?>
</span>
          </a>
     <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 
         
         
  </div>
<?php }
}
