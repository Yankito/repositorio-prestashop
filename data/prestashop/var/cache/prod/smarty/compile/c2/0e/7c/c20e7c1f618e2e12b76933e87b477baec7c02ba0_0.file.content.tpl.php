<?php
/* Smarty version 4.3.4, created on 2024-06-14 18:53:41
  from '/var/www/html/admin706jfsekuzc3vnpea2x/themes/new-theme/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_666cc9f5582033_58990790',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c20e7c1f618e2e12b76933e87b477baec7c02ba0' => 
    array (
      0 => '/var/www/html/admin706jfsekuzc3vnpea2x/themes/new-theme/template/content.tpl',
      1 => 1715587961,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_666cc9f5582033_58990790 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="ajax_confirmation" class="alert alert-success" style="display: none;"></div>
<div id="content-message-box"></div>


<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
  <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
