<?php
/* Smarty version 4.3.2, created on 2023-11-06 10:35:04
  from '/opt/lampp/htdocs/cards-project/views/default/cards_panel.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6548b3483ff234_43546232',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e87477a100ec73accc3259203484c4762fb419f6' => 
    array (
      0 => '/opt/lampp/htdocs/cards-project/views/default/cards_panel.tpl',
      1 => 1699263245,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6548b3483ff234_43546232 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="search">
     
    <div id="group_left">
        
      
      
    </div>
    
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
