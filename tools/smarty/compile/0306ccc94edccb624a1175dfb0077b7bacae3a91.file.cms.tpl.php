<?php /* Smarty version Smarty-3.0.7, created on 2012-04-27 14:27:21
         compiled from "C:\xampp\htdocs\xampp\presta1473/themes/prestashop/cms.tpl" */ ?>
<?php /*%%SmartyHeaderCode:118094f9b0f3916c917-31675834%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0306ccc94edccb624a1175dfb0077b7bacae3a91' => 
    array (
      0 => 'C:\\xampp\\htdocs\\xampp\\presta1473/themes/prestashop/cms.tpl',
      1 => 1335544411,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '118094f9b0f3916c917-31675834',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include 'C:\xampp\htdocs\xampp\presta1473\tools\smarty\plugins\modifier.escape.php';
?>
<?php if (isset($_smarty_tpl->getVariable('cms',null,true,false)->value)&&($_smarty_tpl->getVariable('content_only')->value==0)){?>
	<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('tpl_dir')->value)."./breadcrumb.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
<?php }?>
<?php if (isset($_smarty_tpl->getVariable('cms',null,true,false)->value)&&!isset($_smarty_tpl->getVariable('category',null,true,false)->value)){?>
	<?php if (!$_smarty_tpl->getVariable('cms')->value->active){?>
		<br />
		<div id="admin-action-cms">
			<p><?php echo smartyTranslate(array('s'=>'This CMS page is not visible to your customers.'),$_smarty_tpl);?>

			<input type="hidden" id="admin-action-cms-id" value="<?php echo $_smarty_tpl->getVariable('cms')->value->id;?>
" />
			<input type="submit" value="<?php echo smartyTranslate(array('s'=>'Publish'),$_smarty_tpl);?>
" class="exclusive" onclick="submitPublishCMS('<?php echo $_smarty_tpl->getVariable('base_dir')->value;?>
<?php echo $_GET['ad'];?>
', 0)"/>			
			<input type="submit" value="<?php echo smartyTranslate(array('s'=>'Back'),$_smarty_tpl);?>
" class="exclusive" onclick="submitPublishCMS('<?php echo $_smarty_tpl->getVariable('base_dir')->value;?>
<?php echo $_GET['ad'];?>
', 1)"/>			
			</p>
			<div class="clear" ></div>
			<p id="admin-action-result"></p>
			</p>
		</div>
	<?php }?>
	<div class="rte<?php if ($_smarty_tpl->getVariable('content_only')->value){?> content_only<?php }?>">
		<?php echo $_smarty_tpl->getVariable('cms')->value->content;?>

	</div>
<?php }elseif(isset($_smarty_tpl->getVariable('category',null,true,false)->value)){?>
	<div class="block-cms">
		<h1><a href="<?php if ($_smarty_tpl->getVariable('category')->value->id==1){?><?php echo $_smarty_tpl->getVariable('base_dir')->value;?>
<?php }else{ ?><?php echo $_smarty_tpl->getVariable('link')->value->getCategoryLink($_smarty_tpl->getVariable('category')->value->id,$_smarty_tpl->getVariable('category')->value->link_rewrite);?>
<?php }?>"><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('category')->value->name,'htmlall','UTF-8');?>
</a></h1>
		<?php if (isset($_smarty_tpl->getVariable('sub_category',null,true,false)->value)&!empty($_smarty_tpl->getVariable('sub_category',null,true,false)->value)){?>	
			<h4><?php echo smartyTranslate(array('s'=>'List of sub categories in '),$_smarty_tpl);?>
<?php echo $_smarty_tpl->getVariable('category')->value->name;?>
<?php echo smartyTranslate(array('s'=>':'),$_smarty_tpl);?>
</h4>
			<ul class="bullet">
				<?php  $_smarty_tpl->tpl_vars['subcategory'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('sub_category')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['subcategory']->key => $_smarty_tpl->tpl_vars['subcategory']->value){
?>
					<li>
						<a href="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('link')->value->getCMSCategoryLink($_smarty_tpl->tpl_vars['subcategory']->value['id_cms_category'],$_smarty_tpl->tpl_vars['subcategory']->value['link_rewrite']),'htmlall','UTF-8');?>
"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['subcategory']->value['name'],'htmlall','UTF-8');?>
</a>
					</li>
				<?php }} ?>
			</ul>
		<?php }?>
		<?php if (isset($_smarty_tpl->getVariable('cms_pages',null,true,false)->value)&!empty($_smarty_tpl->getVariable('cms_pages',null,true,false)->value)){?>
		<h4><?php echo smartyTranslate(array('s'=>'List of pages in'),$_smarty_tpl);?>
&nbsp;<?php echo $_smarty_tpl->getVariable('category')->value->name;?>
<?php echo smartyTranslate(array('s'=>':'),$_smarty_tpl);?>
</h4>
			<ul class="bullet">
				<?php  $_smarty_tpl->tpl_vars['cmspages'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('cms_pages')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['cmspages']->key => $_smarty_tpl->tpl_vars['cmspages']->value){
?>
					<li>
						<a href="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('link')->value->getCMSLink($_smarty_tpl->tpl_vars['cmspages']->value['id_cms'],$_smarty_tpl->tpl_vars['cmspages']->value['link_rewrite']),'htmlall','UTF-8');?>
"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['cmspages']->value['meta_title'],'htmlall','UTF-8');?>
</a>
					</li>
				<?php }} ?>
			</ul>
		<?php }?>
	</div>
<?php }else{ ?>
	<?php echo smartyTranslate(array('s'=>'This page does not exist.'),$_smarty_tpl);?>

<?php }?>
<br />