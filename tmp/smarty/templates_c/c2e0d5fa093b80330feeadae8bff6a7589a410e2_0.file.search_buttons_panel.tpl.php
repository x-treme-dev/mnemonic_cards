<?php
/* Smarty version 4.3.2, created on 2023-11-04 08:41:57
  from '/opt/lampp/htdocs/cards-project/views/default/search_buttons_panel.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6545f5c5a4d385_16384453',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c2e0d5fa093b80330feeadae8bff6a7589a410e2' => 
    array (
      0 => '/opt/lampp/htdocs/cards-project/views/default/search_buttons_panel.tpl',
      1 => 1699083716,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6545f5c5a4d385_16384453 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="search">
     
    <div id="group_left">
        <button id="button_NewCategory">New category</button>
        <input id="input_NewCategory" type="text" placeholder="new category..." >
      
    </div>
    
     <div id="group_center">
         <div id="oneCategory"><?php echo $_smarty_tpl->tpl_vars['oneCategory']->value['category'];?>
</div>
     </div>
    
     
    <div id="group_right">
    <button class="buttons_group">save</button>
    <button class="buttons_group">cancel</button>
    <button class="buttons_group" onclick="window.location.href='/edit/<?php echo $_smarty_tpl->tpl_vars['oneCategory']->value['id'];?>
/';">edit</button>
        <button class="buttons_group" data-parameter="<?php echo $_GET['id'];?>
">delete</button>        
    </div>
   
</div>

 <?php }
}
