<?php /* Smarty version Smarty-3.1.8, created on 2013-02-09 00:15:44
         compiled from "/var/www/usingziicomp2/prestashop/modules/blockreinsurance/blockreinsurance.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11255211345115db80ba99d7-01084200%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ac89e379d04daa1324a58c6ba63e5f34d2e00f71' => 
    array (
      0 => '/var/www/usingziicomp2/prestashop/modules/blockreinsurance/blockreinsurance.tpl',
      1 => 1356985156,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11255211345115db80ba99d7-01084200',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'infos' => 0,
    'nbblocks' => 0,
    'module_dir' => 0,
    'info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5115db80c05c05_46931843',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5115db80c05c05_46931843')) {function content_5115db80c05c05_46931843($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/var/www/usingziicomp2/prestashop/tools/smarty/plugins/modifier.escape.php';
?>
<?php if (count($_smarty_tpl->tpl_vars['infos']->value)>0){?>
<!-- MODULE Block reinsurance -->
<div id="reinsurance_block" class="clearfix">
	<ul class="width<?php echo $_smarty_tpl->tpl_vars['nbblocks']->value;?>
">	
		<?php  $_smarty_tpl->tpl_vars['info'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['info']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['infos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['info']->key => $_smarty_tpl->tpl_vars['info']->value){
$_smarty_tpl->tpl_vars['info']->_loop = true;
?>
			<li><img src="<?php echo $_smarty_tpl->tpl_vars['module_dir']->value;?>
img/<?php echo $_smarty_tpl->tpl_vars['info']->value['file_name'];?>
" alt="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['info']->value['text'], 'html', 'UTF-8');?>
" /> <span><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['info']->value['text'], 'html', 'UTF-8');?>
</span></li>
		<?php } ?>
	</ul>
</div>
<!-- /MODULE Block reinsurance -->
<?php }?><?php }} ?>