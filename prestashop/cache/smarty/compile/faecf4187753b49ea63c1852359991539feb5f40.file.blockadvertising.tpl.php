<?php /* Smarty version Smarty-3.1.8, created on 2013-02-09 00:15:43
         compiled from "/var/www/usingziicomp2/prestashop/modules/blockadvertising/blockadvertising.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3963877685115db7ff18373-56758883%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'faecf4187753b49ea63c1852359991539feb5f40' => 
    array (
      0 => '/var/www/usingziicomp2/prestashop/modules/blockadvertising/blockadvertising.tpl',
      1 => 1356985156,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3963877685115db7ff18373-56758883',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'adv_link' => 0,
    'adv_title' => 0,
    'image' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5115db7ff3f5c6_49492121',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5115db7ff3f5c6_49492121')) {function content_5115db7ff3f5c6_49492121($_smarty_tpl) {?>

<!-- MODULE Block advertising -->
<div class="advertising_block">
	<a href="<?php echo $_smarty_tpl->tpl_vars['adv_link']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['adv_title']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['adv_title']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['adv_title']->value;?>
" width="155"  height="163" /></a>
</div>
<!-- /MODULE Block advertising -->
<?php }} ?>