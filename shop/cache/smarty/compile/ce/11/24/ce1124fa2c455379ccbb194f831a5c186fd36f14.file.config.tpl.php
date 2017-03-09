<?php /* Smarty version Smarty-3.1.19, created on 2017-02-22 06:15:38
         compiled from "/home/formfitadmin/public_html/shop/modules/dashgoals/views/templates/hook/config.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20480068458ad2c8a839516-77198837%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ce1124fa2c455379ccbb194f831a5c186fd36f14' => 
    array (
      0 => '/home/formfitadmin/public_html/shop/modules/dashgoals/views/templates/hook/config.tpl',
      1 => 1482185828,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20480068458ad2c8a839516-77198837',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'goals_year' => 0,
    'goals_months' => 0,
    'month' => 0,
    'currency' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58ad2c8a888f91_66624430',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58ad2c8a888f91_66624430')) {function content_58ad2c8a888f91_66624430($_smarty_tpl) {?>
<section id="dashgoals_config" class="dash_config hide">
	<header><i class="icon-wrench"></i> <?php echo smartyTranslate(array('s'=>'Configuration','mod'=>'dashgoals'),$_smarty_tpl);?>
</header>
	<form class="defaultForm form-horizontal" method="post" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminDashboard'), ENT_QUOTES, 'UTF-8', true);?>
">
		<table class="table table-condensed table-striped table-bordered">
			<thead>
				<tr>
					<th class="fixed-width-md"><?php echo $_smarty_tpl->tpl_vars['goals_year']->value;?>
</th>
					<th class="fixed-width-md"><?php echo smartyTranslate(array('s'=>'Traffic','mod'=>'dashgoals'),$_smarty_tpl);?>
</th>
					<th class="fixed-width-md"><?php echo smartyTranslate(array('s'=>'Conversion Rate','mod'=>'dashgoals'),$_smarty_tpl);?>
</th>
					<th class="fixed-width-lg"><?php echo smartyTranslate(array('s'=>'Average Cart Value','mod'=>'dashgoals'),$_smarty_tpl);?>
</th>
					<th><?php echo smartyTranslate(array('s'=>'Sales','mod'=>'dashgoals'),$_smarty_tpl);?>
</th>
				</tr>
			</thead>
			<tbody>
				<?php  $_smarty_tpl->tpl_vars['month'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['month']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['goals_months']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['month']->key => $_smarty_tpl->tpl_vars['month']->value) {
$_smarty_tpl->tpl_vars['month']->_loop = true;
?>
				<tr>
					<td>
						<?php echo $_smarty_tpl->tpl_vars['month']->value['label'];?>

					</td>
					<td>
						<div class="input-group">
							<input id="dashgoals_traffic_<?php echo $_smarty_tpl->tpl_vars['month']->key;?>
" name="dashgoals_traffic_<?php echo $_smarty_tpl->tpl_vars['month']->key;?>
" class="dashgoals_config_input form-control"
								value="<?php echo intval($_smarty_tpl->tpl_vars['month']->value['values']['traffic']);?>
" />
						</div>
					</td>
					<td>
						<div class="input-group">
							<input id="dashgoals_conversion_<?php echo $_smarty_tpl->tpl_vars['month']->key;?>
" name="dashgoals_conversion_<?php echo $_smarty_tpl->tpl_vars['month']->key;?>
" class="dashgoals_config_input form-control"
								value="<?php echo floatval($_smarty_tpl->tpl_vars['month']->value['values']['conversion']);?>
" />
							<span class="input-group-addon">%</span>
						</div>
					</td>
					<td>
						<div class="input-group">
							<span class="input-group-addon"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value->iso_code, ENT_QUOTES, 'UTF-8', true);?>
</span>
							<input id="dashgoals_avg_cart_value_<?php echo $_smarty_tpl->tpl_vars['month']->key;?>
" name="dashgoals_avg_cart_value_<?php echo $_smarty_tpl->tpl_vars['month']->key;?>
" class="dashgoals_config_input form-control"
								value="<?php echo intval($_smarty_tpl->tpl_vars['month']->value['values']['avg_cart_value']);?>
" />
						</div>
					</td>
					<td id="dashgoals_sales_<?php echo $_smarty_tpl->tpl_vars['month']->key;?>
" class="dashgoals_sales">
					</td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
		<div class="panel-footer">
			<button class="btn btn-default pull-right" name="submitDashGoals" type="submit"><i class="process-icon-save"></i> <?php echo smartyTranslate(array('s'=>'Save','mod'=>'dashgoals'),$_smarty_tpl);?>
</button>
		</div>
	</form>
</section><?php }} ?>
