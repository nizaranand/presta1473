<?php /* Smarty version Smarty-3.1.8, created on 2013-02-09 00:15:42
         compiled from "/var/www/usingziicomp2/prestashop/modules/blocktopmenu/blocktopmenu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16395397015115db7eee1234-44085281%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a0ff62a6a709dc65ef1af26b43d9ec108effb943' => 
    array (
      0 => '/var/www/usingziicomp2/prestashop/modules/blocktopmenu/blocktopmenu.tpl',
      1 => 1356985156,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16395397015115db7eee1234-44085281',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MENU' => 0,
    'MENU_SEARCH' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5115db7ef3fbd3_99621205',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5115db7ef3fbd3_99621205')) {function content_5115db7ef3fbd3_99621205($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/var/www/usingziicomp2/prestashop/tools/smarty/plugins/modifier.escape.php';
?><?php if ($_smarty_tpl->tpl_vars['MENU']->value!=''){?>
	</div>

	<!-- Menu -->
	<div class="sf-contener clearfix">
		<ul class="sf-menu clearfix">
			<?php echo $_smarty_tpl->tpl_vars['MENU']->value;?>

			<?php if ($_smarty_tpl->tpl_vars['MENU_SEARCH']->value){?>
				<li class="sf-search noBack" style="float:right">
					<form id="searchbox" action="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('search');?>
" method="get">
						<p>
							<input type="hidden" name="controller" value="search" />
							<input type="hidden" value="position" name="orderby"/>
							<input type="hidden" value="desc" name="orderway"/>
							<input type="text" name="search_query" value="<?php if (isset($_GET['search_query'])){?><?php echo smarty_modifier_escape($_GET['search_query'], 'htmlall', 'UTF-8');?>
<?php }?>" />
						</p>
					</form>
				</li>
			<?php }?>
		</ul>
		<div class="sf-right">&nbsp;</div>

	<!--/ Menu -->
<?php }?><?php }} ?>