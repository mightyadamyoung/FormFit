<?php /* Smarty version Smarty-3.1.19, created on 2017-02-22 06:11:49
         compiled from "/home/formfitadmin/public_html/shop/themes/default-bootstrap/modules/homefeatured/homefeatured.tpl" */ ?>
<?php /*%%SmartyHeaderCode:72795725458ad2ba5299626-11959909%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd77ab41916397c26e82e2eeace7485b457b6e74f' => 
    array (
      0 => '/home/formfitadmin/public_html/shop/themes/default-bootstrap/modules/homefeatured/homefeatured.tpl',
      1 => 1482185824,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '72795725458ad2ba5299626-11959909',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58ad2ba52aabb2_26478870',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58ad2ba52aabb2_26478870')) {function content_58ad2ba52aabb2_26478870($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['products']->value)&&$_smarty_tpl->tpl_vars['products']->value) {?>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('class'=>'homefeatured tab-pane','id'=>'homefeatured'), 0);?>

<?php } else { ?>
<ul id="homefeatured" class="homefeatured tab-pane">
	<li class="alert alert-info"><?php echo smartyTranslate(array('s'=>'No featured products at this time.','mod'=>'homefeatured'),$_smarty_tpl);?>
</li>
</ul>
<?php }?><?php }} ?>
