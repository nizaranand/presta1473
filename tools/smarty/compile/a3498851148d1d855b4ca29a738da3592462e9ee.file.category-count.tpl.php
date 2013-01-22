<?php /* Smarty version Smarty-3.0.7, created on 2012-04-27 14:28:46
         compiled from "C:\xampp\htdocs\xampp\presta1473/themes/prestashop/./category-count.tpl" */ ?>
<?php /*%%SmartyHeaderCode:127074f9b0f8e8780d4-84891048%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a3498851148d1d855b4ca29a738da3592462e9ee' => 
    array (
      0 => 'C:\\xampp\\htdocs\\xampp\\presta1473/themes/prestashop/./category-count.tpl',
      1 => 1335544411,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '127074f9b0f8e8780d4-84891048',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>

<?php if ($_smarty_tpl->getVariable('category')->value->id==1||$_smarty_tpl->getVariable('nb_products')->value==0){?><?php echo smartyTranslate(array('s'=>'There are no products.'),$_smarty_tpl);?>

<?php }else{ ?>
	<?php if ($_smarty_tpl->getVariable('nb_products')->value==1){?><?php echo smartyTranslate(array('s'=>'There is'),$_smarty_tpl);?>
<?php }else{ ?><?php echo smartyTranslate(array('s'=>'There are'),$_smarty_tpl);?>
<?php }?>
	<?php echo $_smarty_tpl->getVariable('nb_products')->value;?>

	<?php if ($_smarty_tpl->getVariable('nb_products')->value==1){?><?php echo smartyTranslate(array('s'=>'product.'),$_smarty_tpl);?>
<?php }else{ ?><?php echo smartyTranslate(array('s'=>'products.'),$_smarty_tpl);?>
<?php }?>
<?php }?>