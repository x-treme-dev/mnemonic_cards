<?php
/* Smarty version 4.3.2, created on 2023-10-07 10:41:27
  from '/opt/lampp/htdocs/cards-project/views/default/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_652119b76b3a76_83716836',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1c9d8fbf951d92a1707d698dd3e82fc85075b0f2' => 
    array (
      0 => '/opt/lampp/htdocs/cards-project/views/default/header.tpl',
      1 => 1696668084,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:top.tpl' => 1,
    'file:search.tpl' => 1,
    'file:leftcolumn.tpl' => 1,
  ),
),false)) {
function content_652119b76b3a76_83716836 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<head>
        <title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
css/main.css" type="text/css"/>
 </head> 

<body>
    
              <?php $_smarty_tpl->_subTemplateRender('file:top.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        
            <?php $_smarty_tpl->_subTemplateRender('file:search.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        
            <?php $_smarty_tpl->_subTemplateRender('file:leftcolumn.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
