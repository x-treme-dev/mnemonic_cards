<?php
/* Smarty version 4.3.2, created on 2023-12-02 20:04:23
  from '/opt/lampp/htdocs/cards-project/views/default/edit_panel.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_656b7fb7daad80_14444325',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '43426e6755c5c4fe4d866ec6960feab5e995a379' => 
    array (
      0 => '/opt/lampp/htdocs/cards-project/views/default/edit_panel.tpl',
      1 => 1701543861,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_656b7fb7daad80_14444325 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="edit">
     
    <div id="group_left">
       
      
    </div>
    
     <div id="group_center">
         <input id="input_editCategory" type="text" value="<?php echo $_smarty_tpl->tpl_vars['oneCategory']->value['category'];?>
">
     </div>
    
     
    <div id="group_right">
    <button class="edit_buttons_group" data-parameter="<?php echo $_GET['id'];?>
">save</button>
    <button class="edit_buttons_group" onclick="window.location.href='/cards/<?php echo $_smarty_tpl->tpl_vars['oneCategory']->value['id'];?>
/';">cancel</button>
        <button class="edit_buttons_group" data-parameter="<?php echo $_GET['id'];?>
" >add</button>   
    
    </div>
   
</div>
<?php }
}
