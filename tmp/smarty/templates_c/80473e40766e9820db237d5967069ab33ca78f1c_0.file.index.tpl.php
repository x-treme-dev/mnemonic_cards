<?php
/* Smarty version 4.3.2, created on 2023-09-16 10:56:49
  from '/opt/lampp/htdocs/cards-project/views/default/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_65056dd199adf7_27538882',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '80473e40766e9820db237d5967069ab33ca78f1c' => 
    array (
      0 => '/opt/lampp/htdocs/cards-project/views/default/index.tpl',
      1 => 1694853575,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:top.tpl' => 1,
    'file:leftcolumn.tpl' => 1,
    'file:centercolumn.tpl' => 1,
  ),
),false)) {
function content_65056dd199adf7_27538882 (Smarty_Internal_Template $_smarty_tpl) {
?>   <html>
   
          <?php $_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
     
   <body>
       
                <?php $_smarty_tpl->_subTemplateRender('file:top.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        
                <?php $_smarty_tpl->_subTemplateRender('file:leftcolumn.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        
                <?php $_smarty_tpl->_subTemplateRender('file:centercolumn.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
       
        
    </body>
</html>
<?php }
}
