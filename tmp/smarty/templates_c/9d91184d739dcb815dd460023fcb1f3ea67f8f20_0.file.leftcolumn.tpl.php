<?php
/* Smarty version 4.3.2, created on 2023-10-01 20:42:45
  from '/opt/lampp/htdocs/cards-project/views/default/leftcolumn.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6519bda53d7e09_34002776',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9d91184d739dcb815dd460023fcb1f3ea67f8f20' => 
    array (
      0 => '/opt/lampp/htdocs/cards-project/views/default/leftcolumn.tpl',
      1 => 1696185763,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6519bda53d7e09_34002776 (Smarty_Internal_Template $_smarty_tpl) {
?>  <div id="leftColumn">
      
     
     <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsCategories']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
            <?php echo $_smarty_tpl->tpl_vars['item']->value['category'];?>
 
         <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 
     
      
      
   </div>
<?php }
}
