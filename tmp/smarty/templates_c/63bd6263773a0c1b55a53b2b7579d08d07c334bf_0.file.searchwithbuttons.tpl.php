<?php
/* Smarty version 4.3.2, created on 2023-11-04 08:27:47
  from '/opt/lampp/htdocs/cards-project/views/default/searchwithbuttons.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6545f273875de4_84339795',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '63bd6263773a0c1b55a53b2b7579d08d07c334bf' => 
    array (
      0 => '/opt/lampp/htdocs/cards-project/views/default/searchwithbuttons.tpl',
      1 => 1699082617,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6545f273875de4_84339795 (Smarty_Internal_Template $_smarty_tpl) {
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
    <button class="buttons_group">add</button>
        <button class="buttons_group" data-parameter="<?php echo $_GET['id'];?>
">delete</button>        
    </div>
   
</div>

 <?php }
}
