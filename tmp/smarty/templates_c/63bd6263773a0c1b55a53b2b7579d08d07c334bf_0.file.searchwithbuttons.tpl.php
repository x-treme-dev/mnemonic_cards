<?php
/* Smarty version 4.3.2, created on 2023-10-28 11:41:03
  from '/opt/lampp/htdocs/cards-project/views/default/searchwithbuttons.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_653cd72f3cf4d6_05109202',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '63bd6263773a0c1b55a53b2b7579d08d07c334bf' => 
    array (
      0 => '/opt/lampp/htdocs/cards-project/views/default/searchwithbuttons.tpl',
      1 => 1698486055,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_653cd72f3cf4d6_05109202 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="search">
     
    <div id="group_left">
        <button id="button_NewCategory">New category</button>
        <input id="input_NewCategory" type="text" placeholder="new category..." >
       
    </div>
    
     <div id="message"></div>
      
  
      
         
    <div id="group_right">
    <button class="buttons_group">save</button>
    <button class="buttons_group">cancel</button>
    <button class="buttons_group">edit</button>
    <button class="buttons_group">add</button>
        <button class="buttons_group" data-parameter="<?php echo $_GET['id'];?>
">delete</button>        
    </div>
   
</div>
<?php }
}
