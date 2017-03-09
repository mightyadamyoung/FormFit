<?php /* Smarty version Smarty-3.1.19, created on 2017-02-22 06:17:43
         compiled from "/home/formfitadmin/public_html/shop/modules/firstdata/tpl/admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:158091759358ad2d0754c0e3-51489153%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5e61e09e57769e5ac1833b374350d38a13a9b460' => 
    array (
      0 => '/home/formfitadmin/public_html/shop/modules/firstdata/tpl/admin.tpl',
      1 => 1487738734,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '158091759358ad2d0754c0e3-51489153',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_dir' => 0,
    'firstdata_tracking' => 0,
    'firstdata_confirmation' => 0,
    'firstdata_ssl' => 0,
    'firstdata_form' => 0,
    'firstdata_key_id' => 0,
    'firstdata_key_hmac' => 0,
    'firstdata_gateway_id' => 0,
    'firstdata_password' => 0,
    'firstdata_sendcvv' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58ad2d07632975_27087913',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58ad2d07632975_27087913')) {function content_58ad2d07632975_27087913($_smarty_tpl) {?><link href="<?php echo $_smarty_tpl->tpl_vars['module_dir']->value;?>
css/firstdata.css" rel="stylesheet" type="text/css">
<img src="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['firstdata_tracking']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" alt="" style="display: none;"/>
<div class="firstdata-wrap">
	<?php echo $_smarty_tpl->tpl_vars['firstdata_confirmation']->value;?>

	<div class="firstdata-header">
		<a href="https://www.merchantselfboarding.com/ngss/presta?PartnerID=presta" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['module_dir']->value;?>
img/logo.png" alt="First Data" class="firstdata-logo" /></a>
		<span class="firstdata-intro"><?php echo smartyTranslate(array('s'=>'Online Payment Processing','mod'=>'firstdata'),$_smarty_tpl);?>
<br />
		<?php echo smartyTranslate(array('s'=>'Fast - Secure - Reliable','mod'=>'firstdata'),$_smarty_tpl);?>
</span>
		<a href="https://www.merchantselfboarding.com/ngss/presta?PartnerID=presta" target="_blank" class="firstdata-create-btn"><?php echo smartyTranslate(array('s'=>'Create an Account Now!','mod'=>'firstdata'),$_smarty_tpl);?>
</a>
	</div>
	<div class="firstdata-content">
		<div class="firstdata-half L">
			<h3><?php echo smartyTranslate(array('s'=>'First Data offers the following benefits','mod'=>'firstdata'),$_smarty_tpl);?>
</h3>
			<ul>
				<li><strong><?php echo smartyTranslate(array('s'=>'Increase customer payment options','mod'=>'firstdata'),$_smarty_tpl);?>
</strong><br />
				<?php echo smartyTranslate(array('s'=>'Visa®, MasterCard®, Diners Club®, American Express®, Discover® Network and JCB®, plus debit, gift cards and more','mod'=>'firstdata'),$_smarty_tpl);?>
</li>
				<li><strong><?php echo smartyTranslate(array('s'=>'Help to improve cash flow','mod'=>'firstdata'),$_smarty_tpl);?>
</strong><br />
				<?php echo smartyTranslate(array('s'=>'Receive funds quickly from the bank of your choice','mod'=>'firstdata'),$_smarty_tpl);?>
</li>
				<li><strong><?php echo smartyTranslate(array('s'=>'Enhanced security','mod'=>'firstdata'),$_smarty_tpl);?>
</strong><br />
				<?php echo smartyTranslate(array('s'=>'Multiple firewalls, encryption protocols and fraud protection','mod'=>'firstdata'),$_smarty_tpl);?>
</li>
				<li><strong><?php echo smartyTranslate(array('s'=>'One-source solution','mod'=>'firstdata'),$_smarty_tpl);?>
</strong><br />
				<?php echo smartyTranslate(array('s'=>'Convenience of one invoice, one set of reports and one 24/7 customer service contact','mod'=>'firstdata'),$_smarty_tpl);?>
</li>
			</ul>
		</div>
		<div class="firstdata-half R">
			<h3><?php echo smartyTranslate(array('s'=>'FREE First Data Global Gateway e4','mod'=>'firstdata'),$_smarty_tpl);?>
<br />
			<?php echo smartyTranslate(array('s'=>'(Value of $400)','mod'=>'firstdata'),$_smarty_tpl);?>
 <strong>*</strong></h3>
			<ul>
				<li><?php echo smartyTranslate(array('s'=>'Simple, secure and reliable solution to process online payments','mod'=>'firstdata'),$_smarty_tpl);?>
</li>
				<li><?php echo smartyTranslate(array('s'=>'Virtual Terminal','mod'=>'firstdata'),$_smarty_tpl);?>
</li>
				<li><?php echo smartyTranslate(array('s'=>'Recurring Billing','mod'=>'firstdata'),$_smarty_tpl);?>
</li>
				<li><?php echo smartyTranslate(array('s'=>'24/7/365 customer support','mod'=>'firstdata'),$_smarty_tpl);?>
</li>
				<li><?php echo smartyTranslate(array('s'=>'Ability to perform full or partial refunds','mod'=>'firstdata'),$_smarty_tpl);?>
</li>
			</ul>
			<p class="firstdata-note"><strong>*</strong> <?php echo smartyTranslate(array('s'=>'New merchant account required and subject to credit approval. The free First Data Global Gateway e4 will be accessed through log in information provided via email within 48 hours of credit approval. Monthly fees for First Data Global Gateway e4 will apply.','mod'=>'firstdata'),$_smarty_tpl);?>
</p>
		</div>
		<div class="firstdata-full">
			<h3><?php echo smartyTranslate(array('s'=>'Accept payments in the United States using all major credit cards','mod'=>'firstdata'),$_smarty_tpl);?>
</h3>
			<p><img src="<?php echo $_smarty_tpl->tpl_vars['module_dir']->value;?>
img/cc.png" alt="<?php echo smartyTranslate(array('s'=>'All majors credit cards','mod'=>'firstdata'),$_smarty_tpl);?>
" class="firstdata-cc" /><strong><?php echo smartyTranslate(array('s'=>'For transactions in US Dollars (USD) only','mod'=>'firstdata'),$_smarty_tpl);?>
</strong><br />
			<?php echo smartyTranslate(array('s'=>'Call 888-368-4284 if you have any questions or need more information!','mod'=>'firstdata'),$_smarty_tpl);?>
</p>
		</div>
	</div>

<?php if (!$_smarty_tpl->tpl_vars['firstdata_ssl']->value) {?>
	<div class="warn"><strong><?php echo smartyTranslate(array('s'=>'SSL is not active on your shop.','mod'=>'firstdata'),$_smarty_tpl);?>
</strong><br/>
	<?php echo smartyTranslate(array('s'=>'We highly recommend you to enable SSL on your shop. Most customers will not place their order if SSL is not enabled.','mod'=>'firstdata'),$_smarty_tpl);?>
</div>
<?php }?>
	<form action="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['firstdata_form']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" id="firstdata-configuration" method="post">
		<fieldset>
			<legend><img src="<?php echo $_smarty_tpl->tpl_vars['module_dir']->value;?>
img/icon-config.gif" alt="" /><?php echo smartyTranslate(array('s'=>'Configuration','mod'=>'firstdata'),$_smarty_tpl);?>
</legend>
			<div class="firstdata-half L">
				<p class="MB10"><?php echo smartyTranslate(array('s'=>'In order to use this module, please fill out the form with the credentials provided to you by First Data','mod'=>'firstdata'),$_smarty_tpl);?>
</p>
				<label for="firstdata_key_id"><?php echo smartyTranslate(array('s'=>'API Access Key ID:','mod'=>'firstdata'),$_smarty_tpl);?>
</label>
				<div class="margin-form">
					<input type="text" class="text" name="firstdata_key_id" id="firstdata_key_id" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['firstdata_key_id']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" /> <sup>*</sup>
				</div>
				<label for="firstdata_key_hmac"><?php echo smartyTranslate(array('s'=>'API Access HMAC Key:','mod'=>'firstdata'),$_smarty_tpl);?>
</label>
				<div class="margin-form">
					<input type="password" class="text" name="firstdata_key_hmac" id="firstdata_key_hmac" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['firstdata_key_hmac']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" /> <sup>*</sup>
				</div>
				<label for="firstdata_gateway_id"><?php echo smartyTranslate(array('s'=>'Gateway ID:','mod'=>'firstdata'),$_smarty_tpl);?>
</label>
				<div class="margin-form">
					<input type="text" class="text" name="firstdata_gateway_id" id="firstdata_gateway_id" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['firstdata_gateway_id']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" /> <sup>*</sup>
				</div>
				<label for="firstdata_password"><?php echo smartyTranslate(array('s'=>'Password:','mod'=>'firstdata'),$_smarty_tpl);?>
</label>
				<div class="margin-form">
					<input type="password" class="text" name="firstdata_password" id="firstdata_password" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['firstdata_password']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" /> <sup>*</sup>
				</div>
				<label for="firstdata_sendcvv"><?php echo smartyTranslate(array('s'=>'Send CVV?:','mod'=>'firstdata'),$_smarty_tpl);?>
</label>
				<div class="margin-form">
					<input type="checkbox" name="firstdata_sendcvv" id="firstdata_sendcvv" value="1" <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['firstdata_sendcvv']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
/>
				</div>
				<div class="margin-form">
					<input type="submit" class="button" name="submitFirstData" value="<?php echo smartyTranslate(array('s'=>'Save','mod'=>'firstdata'),$_smarty_tpl);?>
" />
				</div>
				<span class="small"><sup>*</sup> <?php echo smartyTranslate(array('s'=>'Required Fields','mod'=>'firstdata'),$_smarty_tpl);?>
</span>
			</div>
			<div class="firstdata-half R">
				<h4><?php echo smartyTranslate(array('s'=>'How to get your First Data credentials?','mod'=>'firstdata'),$_smarty_tpl);?>
</h4>
				<ol>
					<li><p><?php echo smartyTranslate(array('s'=>'Contact First Data directly to','mod'=>'firstdata'),$_smarty_tpl);?>
 <a href="https://www.merchantselfboarding.com/ngss/presta?PartnerID=presta" target="_blank"><?php echo smartyTranslate(array('s'=>'apply for your First Data Global Gateway account.','mod'=>'firstdata'),$_smarty_tpl);?>
</a></p></li>
					<li><p><a href="https://globalgatewaye4.firstdata.com/" target="_blank"><?php echo smartyTranslate(array('s'=>'Login to your First Data Global Gateway e4 account.','mod'=>'firstdata'),$_smarty_tpl);?>
</a></p></li>
				    <li><p><?php echo smartyTranslate(array('s'=>'From the main navigation click the Administration tab','mod'=>'firstdata'),$_smarty_tpl);?>
</p></li>
				    <li><p><?php echo smartyTranslate(array('s'=>'In the main Administration screen, click the Terminals tab on the left (under the First Data logo)','mod'=>'firstdata'),$_smarty_tpl);?>
</p></li>
				    <li><p><?php echo smartyTranslate(array('s'=>'Select the terminal that includes ECOMM by clicking on it.','mod'=>'firstdata'),$_smarty_tpl);?>
</p></li>
				    <li><p><?php echo smartyTranslate(array('s'=>'In their terminals manager, make note of your Gateway ID for use in your Shop settings.','mod'=>'firstdata'),$_smarty_tpl);?>
</p></li>
				    <li><p><?php echo smartyTranslate(array('s'=>'Click the API Access from the terminal manager navigation.','mod'=>'firstdata'),$_smarty_tpl);?>
</p></li>
				    <li><p><?php echo smartyTranslate(array('s'=>'Click the Generate New Key link to get a new HMAC key','mod'=>'firstdata'),$_smarty_tpl);?>
</p></li>
				    <li><p><?php echo smartyTranslate(array('s'=>'Copy the Key ID, a 3-5 digit number and the newly created HMAC key for use in your Shop settings.','mod'=>'firstdata'),$_smarty_tpl);?>
</p></li>
				</ol>
			</div>
		</fieldset>
	</form>
</div>
<?php }} ?>
