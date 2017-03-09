<?php /* Smarty version Smarty-3.1.19, created on 2017-02-22 06:16:07
         compiled from "/home/formfitadmin/public_html/shop/5lnp4omtqwmi4nia/themes/default/template/helpers/tree/tree_node_item_radio.tpl" */ ?>
<?php /*%%SmartyHeaderCode:178683155058ad2ca7b8a690-74382384%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9f13e4b08312f26cd6f13a65f68869fc97ad3755' => 
    array (
      0 => '/home/formfitadmin/public_html/shop/5lnp4omtqwmi4nia/themes/default/template/helpers/tree/tree_node_item_radio.tpl',
      1 => 1482185820,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '178683155058ad2ca7b8a690-74382384',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'node' => 0,
    'input_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58ad2ca7ba7e06_67916452',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58ad2ca7ba7e06_67916452')) {function content_58ad2ca7ba7e06_67916452($_smarty_tpl) {?>
<li class="tree-item<?php if (isset($_smarty_tpl->tpl_vars['node']->value['disabled'])&&$_smarty_tpl->tpl_vars['node']->value['disabled']==true) {?> tree-item-disable<?php }?>">
	<span class="tree-item-name">
		<input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['input_name']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['node']->value['id_category'];?>
"<?php if (isset($_smarty_tpl->tpl_vars['node']->value['disabled'])&&$_smarty_tpl->tpl_vars['node']->value['disabled']==true) {?> disabled="disabled"<?php }?> />
		<i class="tree-dot"></i>
		<label class="tree-toggler"><?php echo $_smarty_tpl->tpl_vars['node']->value['name'];?>
</label>
	</span>
</li><?php }} ?>
