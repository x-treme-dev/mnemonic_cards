<?php
/* Smarty version 4.3.2, created on 2023-11-04 08:52:22
  from '/opt/lampp/htdocs/cards-project/views/default/index_left_column.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6545f836933ef4_28827926',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a51201f4b7941b74731a6fb9175cf39a2180064a' => 
    array (
      0 => '/opt/lampp/htdocs/cards-project/views/default/index_left_column.tpl',
      1 => 1698683958,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6545f836933ef4_28827926 (Smarty_Internal_Template $_smarty_tpl) {
?>  <div id="leftColumn">
      
      
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
         
         
  </div>
<?php }
}
