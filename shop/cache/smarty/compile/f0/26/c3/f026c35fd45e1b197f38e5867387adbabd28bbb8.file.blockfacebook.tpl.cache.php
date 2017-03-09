<?php /* Smarty version Smarty-3.1.19, created on 2017-02-22 06:11:49
         compiled from "/home/formfitadmin/public_html/shop/modules/blockfacebook/blockfacebook.tpl" */ ?>
<?php /*%%SmartyHeaderCode:138657758ad2ba51ce7d1-97173747%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f026c35fd45e1b197f38e5867387adbabd28bbb8' => 
    array (
      0 => '/home/formfitadmin/public_html/shop/modules/blockfacebook/blockfacebook.tpl',
      1 => 1482185826,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '138657758ad2ba51ce7d1-97173747',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'facebookurl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58ad2ba51dcbc7_58498527',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58ad2ba51dcbc7_58498527')) {function content_58ad2ba51dcbc7_58498527($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['facebookurl']->value!='') {?>
<div id="fb-root"></div>
<div id="facebook_block" class="col-xs-4">
	<h4 ><?php echo smartyTranslate(array('s'=>'Follow us on Facebook','mod'=>'blockfacebook'),$_smarty_tpl);?>
</h4>
	<div class="facebook-fanbox">
		<div class="fb-like-box" data-href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['facebookurl']->value, ENT_QUOTES, 'UTF-8', true);?>
" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false">
		</div>
	</div>
</div>
<?php }?>
<?php }} ?>
