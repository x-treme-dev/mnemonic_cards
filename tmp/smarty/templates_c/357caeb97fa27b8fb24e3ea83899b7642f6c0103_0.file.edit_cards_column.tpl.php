<?php
/* Smarty version 4.3.2, created on 2023-12-02 19:54:07
  from '/opt/lampp/htdocs/cards-project/views/default/edit_cards_column.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_656b7d4f87f6f6_58046675',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '357caeb97fa27b8fb24e3ea83899b7642f6c0103' => 
    array (
      0 => '/opt/lampp/htdocs/cards-project/views/default/edit_cards_column.tpl',
      1 => 1701542718,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_656b7d4f87f6f6_58046675 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="editCardsColumn">
            
               <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsCards']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
      <div class='div_cardEdit' id="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
             <textarea class="card_frontEdit"><?php echo $_smarty_tpl->tpl_vars['item']->value['front_card'];?>
</textarea>
             <textarea class="card_backEdit"><?php echo $_smarty_tpl->tpl_vars['item']->value['back_card'];?>
</textarea>
             <!--Кнопка на карточке "крестик"-->
             <div class="delete"></div>
      </div>
     <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 
            
        </div> 
 
</body>

</html><?php }
}
