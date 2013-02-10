<?php /* Smarty version Smarty-3.1.8, created on 2013-02-09 00:15:42
         compiled from "/var/www/usingziicomp2/prestashop/modules/feeder/feederHeader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3998879395115db7e95fca0-15278785%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c176b07ca6cecc5521ae5ffb08c5421bfaa078a5' => 
    array (
      0 => '/var/www/usingziicomp2/prestashop/modules/feeder/feederHeader.tpl',
      1 => 1356985156,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3998879395115db7e95fca0-15278785',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'meta_title' => 0,
    'feedUrl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5115db7e97bb43_75983963',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5115db7e97bb43_75983963')) {function content_5115db7e97bb43_75983963($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/var/www/usingziicomp2/prestashop/tools/smarty/plugins/modifier.escape.php';
?>

<link rel="alternate" type="application/rss+xml" title="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['meta_title']->value, 'html', 'UTF-8');?>
" href="<?php echo $_smarty_tpl->tpl_vars['feedUrl']->value;?>
" /><?php }} ?>