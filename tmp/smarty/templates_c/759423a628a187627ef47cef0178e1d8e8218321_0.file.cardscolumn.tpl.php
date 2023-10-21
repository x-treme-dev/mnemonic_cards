<?php
/* Smarty version 4.3.2, created on 2023-10-16 18:35:51
  from '/opt/lampp/htdocs/cards-project/views/default/cardscolumn.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_652d6667bb08d2_20305055',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '759423a628a187627ef47cef0178e1d8e8218321' => 
    array (
      0 => '/opt/lampp/htdocs/cards-project/views/default/cardscolumn.tpl',
      1 => 1697474150,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_652d6667bb08d2_20305055 (Smarty_Internal_Template $_smarty_tpl) {
?>   

<div id='cardsColumn'>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsCards']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
      <div class='card'>
         <div class="front">
             <span><?php echo $_smarty_tpl->tpl_vars['item']->value['front_card'];?>
</span>
         </div>
         
         <div class="back">
             <span><?php echo $_smarty_tpl->tpl_vars['item']->value['back_card'];?>
</span>
         </div>
     </div>
     <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 
</div>

 
 </body>

</html><?php }
}
