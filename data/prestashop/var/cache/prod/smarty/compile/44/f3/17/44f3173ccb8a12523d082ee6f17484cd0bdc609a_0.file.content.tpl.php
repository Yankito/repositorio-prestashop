<?php
/* Smarty version 4.3.4, created on 2024-06-14 17:24:35
  from '/var/www/html/admin706jfsekuzc3vnpea2x/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_666cb513f20db6_07597062',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '44f3173ccb8a12523d082ee6f17484cd0bdc609a' => 
    array (
      0 => '/var/www/html/admin706jfsekuzc3vnpea2x/themes/default/template/content.tpl',
      1 => 1715587961,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_666cb513f20db6_07597062 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>
<div id="content-message-box"></div>

<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
