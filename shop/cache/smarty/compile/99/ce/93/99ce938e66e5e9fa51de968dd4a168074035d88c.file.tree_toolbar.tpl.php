<?php /* Smarty version Smarty-3.1.19, created on 2017-02-22 06:16:07
         compiled from "/home/formfitadmin/public_html/shop/5lnp4omtqwmi4nia/themes/default/template/controllers/products/helpers/tree/tree_toolbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:76555948658ad2ca7af4706-20458708%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '99ce938e66e5e9fa51de968dd4a168074035d88c' => 
    array (
      0 => '/home/formfitadmin/public_html/shop/5lnp4omtqwmi4nia/themes/default/template/controllers/products/helpers/tree/tree_toolbar.tpl',
      1 => 1482185820,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '76555948658ad2ca7af4706-20458708',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'actions' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58ad2ca7b40fe9_24177826',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58ad2ca7b40fe9_24177826')) {function content_58ad2ca7b40fe9_24177826($_smarty_tpl) {?>
<div class="tree-actions pull-right">
	<?php if (isset($_smarty_tpl->tpl_vars['actions']->value)) {?>
	<?php  $_smarty_tpl->tpl_vars['action'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['action']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['actions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['action']->key => $_smarty_tpl->tpl_vars['action']->value) {
$_smarty_tpl->tpl_vars['action']->_loop = true;
?>
		<?php echo $_smarty_tpl->tpl_vars['action']->value->render();?>

	<?php } ?>
	<?php }?>
</div><?php }} ?>
