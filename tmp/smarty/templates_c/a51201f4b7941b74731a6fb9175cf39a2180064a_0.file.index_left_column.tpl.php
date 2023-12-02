<?php
/* Smarty version 4.3.2, created on 2023-12-02 21:39:04
  from '/opt/lampp/htdocs/cards-project/views/default/index_left_column.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_656b95e8a63df5_21962688',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a51201f4b7941b74731a6fb9175cf39a2180064a' => 
    array (
      0 => '/opt/lampp/htdocs/cards-project/views/default/index_left_column.tpl',
      1 => 1701549542,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_656b95e8a63df5_21962688 (Smarty_Internal_Template $_smarty_tpl) {
?>  <div id="leftColumnMain">
          <p>Категорий: <?php echo $_smarty_tpl->tpl_vars['numberOfCategories']->value;?>
 </p>
          <p>Карточек: <?php echo $_smarty_tpl->tpl_vars['numberOfCards']->value;?>
</p>
         
   </div>
<?php }
}
