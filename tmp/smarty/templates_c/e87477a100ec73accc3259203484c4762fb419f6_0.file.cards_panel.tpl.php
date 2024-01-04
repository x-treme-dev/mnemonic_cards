<?php
/* Smarty version 4.3.2, created on 2024-01-03 11:43:16
  from '/opt/lampp/htdocs/cards-project/views/default/cards_panel.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_65953a4429aa60_18788836',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e87477a100ec73accc3259203484c4762fb419f6' => 
    array (
      0 => '/opt/lampp/htdocs/cards-project/views/default/cards_panel.tpl',
      1 => 1704278583,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65953a4429aa60_18788836 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="search">
   
    
     <div id="group_center">
         <div id="oneCategory"><?php echo $_smarty_tpl->tpl_vars['oneCategory']->value['category'];?>
</div>
    </div>
    
     
    <div id="group_right">
     <button class="buttons_group" onclick="window.location.href='/edit/<?php echo $_smarty_tpl->tpl_vars['oneCategory']->value['id'];?>
/';">edit</button>
        <button class="buttons_group" data-parameter="<?php echo $_GET['id'];?>
 ">delete</button>        
    </div>
   
</div>

 <?php }
}
