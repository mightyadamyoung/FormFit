<?php /* Smarty version Smarty-3.1.19, created on 2017-02-22 06:16:07
         compiled from "/home/formfitadmin/public_html/shop/5lnp4omtqwmi4nia/themes/default/template/helpers/tree/tree_toolbar_link.tpl" */ ?>
<?php /*%%SmartyHeaderCode:123873312658ad2ca7b45c34-99757237%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd512f16a52bee4a6ea2f30c85325e25a86ddb9e3' => 
    array (
      0 => '/home/formfitadmin/public_html/shop/5lnp4omtqwmi4nia/themes/default/template/helpers/tree/tree_toolbar_link.tpl',
      1 => 1482185820,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '123873312658ad2ca7b45c34-99757237',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'action' => 0,
    'id' => 0,
    'icon_class' => 0,
    'label' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58ad2ca7b6b0f3_54352628',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58ad2ca7b6b0f3_54352628')) {function content_58ad2ca7b6b0f3_54352628($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
"<?php if (isset($_smarty_tpl->tpl_vars['action']->value)) {?> onclick="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
"<?php }?><?php if (isset($_smarty_tpl->tpl_vars['id']->value)) {?> id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php }?> class="btn btn-default">
	<?php if (isset($_smarty_tpl->tpl_vars['icon_class']->value)) {?><i class="<?php echo $_smarty_tpl->tpl_vars['icon_class']->value;?>
"></i><?php }?>
	<?php echo smartyTranslate(array('s'=>$_smarty_tpl->tpl_vars['label']->value),$_smarty_tpl);?>

</a><?php }} ?>
