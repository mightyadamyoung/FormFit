<?php /* Smarty version Smarty-3.1.19, created on 2017-02-22 06:13:24
         compiled from "/home/formfitadmin/public_html/shop/5lnp4omtqwmi4nia/themes/default/template/helpers/modules_list/modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:101441169858ad2c04dbc277-26568175%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '36a064412980343e29e87e6a4e3da1bbfd3177bb' => 
    array (
      0 => '/home/formfitadmin/public_html/shop/5lnp4omtqwmi4nia/themes/default/template/helpers/modules_list/modal.tpl',
      1 => 1482185820,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '101441169858ad2c04dbc277-26568175',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58ad2c04dbfe44_69045569',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58ad2c04dbfe44_69045569')) {function content_58ad2c04dbfe44_69045569($_smarty_tpl) {?><div class="modal fade" id="modules_list_container">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="modal-title"><?php echo smartyTranslate(array('s'=>'Recommended Modules and Services'),$_smarty_tpl);?>
</h3>
			</div>
			<div class="modal-body">
				<div id="modules_list_container_tab_modal" style="display:none;"></div>
				<div id="modules_list_loader"><i class="icon-refresh icon-spin"></i></div>
			</div>
		</div>
	</div>
</div>
<?php }} ?>
