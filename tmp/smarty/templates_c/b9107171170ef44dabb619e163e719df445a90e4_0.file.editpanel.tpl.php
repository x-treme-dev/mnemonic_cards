<?php
/* Smarty version 4.3.2, created on 2023-11-04 08:39:09
  from '/opt/lampp/htdocs/cards-project/views/default/editpanel.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6545f51d468bf1_89874257',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b9107171170ef44dabb619e163e719df445a90e4' => 
    array (
      0 => '/opt/lampp/htdocs/cards-project/views/default/editpanel.tpl',
      1 => 1699083530,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6545f51d468bf1_89874257 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="edit">
     
    <div id="group_left">
       
      
    </div>
    
     <div id="group_center">
         <input id="input_editCategory" type="text" value="<?php echo $_smarty_tpl->tpl_vars['oneCategory']->value['category'];?>
">
     </div>
    
     
    <div id="group_right">
    <button class="edit_buttons_group">save</button>
    <button class="edit_buttons_group">cancel</button>
    <button class="edit_buttons_group">edit</button>
    <button class="edit_buttons_group">add</button>
        <button class="edit_buttons_group">delete</button>        
    </div>
   
</
<?php }
}
