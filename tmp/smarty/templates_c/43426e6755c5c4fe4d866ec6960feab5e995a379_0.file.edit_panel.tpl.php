<?php
/* Smarty version 4.3.2, created on 2024-01-03 11:57:42
  from '/opt/lampp/htdocs/cards-project/views/default/edit_panel.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_65953da65c8cb1_61188015',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '43426e6755c5c4fe4d866ec6960feab5e995a379' => 
    array (
      0 => '/opt/lampp/htdocs/cards-project/views/default/edit_panel.tpl',
      1 => 1704279440,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65953da65c8cb1_61188015 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="edit">
     
     
    
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
