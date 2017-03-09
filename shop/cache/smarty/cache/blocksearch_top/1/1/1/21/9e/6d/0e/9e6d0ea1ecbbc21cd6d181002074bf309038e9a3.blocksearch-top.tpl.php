<?php /*%%SmartyHeaderCode:213090831158ad2ba4b32029-69002006%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9e6d0ea1ecbbc21cd6d181002074bf309038e9a3' => 
    array (
      0 => '/home/formfitadmin/public_html/shop/themes/default-bootstrap/modules/blocksearch/blocksearch-top.tpl',
      1 => 1482185824,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '213090831158ad2ba4b32029-69002006',
  'variables' => 
  array (
    'link' => 0,
    'search_query' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58ad2ba4b50595_62549343',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58ad2ba4b50595_62549343')) {function content_58ad2ba4b50595_62549343($_smarty_tpl) {?><!-- Block search module TOP -->
<div id="search_block_top" class="col-sm-4 clearfix">
	<form id="searchbox" method="get" action="//shop.formfitapp.com/index.php?controller=search" >
		<input type="hidden" name="controller" value="search" />
		<input type="hidden" name="orderby" value="position" />
		<input type="hidden" name="orderway" value="desc" />
		<input class="search_query form-control" type="text" id="search_query_top" name="search_query" placeholder="Search" value="" />
		<button type="submit" name="submit_search" class="btn btn-default button-search">
			<span>Search</span>
		</button>
	</form>
</div>
<!-- /Block search module TOP --><?php }} ?>
