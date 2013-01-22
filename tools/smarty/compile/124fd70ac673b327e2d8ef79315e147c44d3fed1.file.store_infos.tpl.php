<?php /* Smarty version Smarty-3.0.7, created on 2012-04-27 14:27:33
         compiled from "C:\xampp\htdocs\xampp\presta1473/themes/prestashop/store_infos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3084f9b0f450b33b4-35773642%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '124fd70ac673b327e2d8ef79315e147c44d3fed1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\xampp\\presta1473/themes/prestashop/store_infos.tpl',
      1 => 1335544412,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3084f9b0f450b33b4-35773642',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>

<br />
<br />
<span id="store_hours"><?php echo smartyTranslate(array('s'=>'Hours:'),$_smarty_tpl);?>
</span>
<table style="font-size: 9px;">
	<?php  $_smarty_tpl->tpl_vars['one_day'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('days_datas')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['one_day']->key => $_smarty_tpl->tpl_vars['one_day']->value){
?>
	<tr>
		<td style="width: 70px;"><?php echo smartyTranslate(array('s'=>$_smarty_tpl->tpl_vars['one_day']->value['day']),$_smarty_tpl);?>
</td><td><?php echo $_smarty_tpl->tpl_vars['one_day']->value['hours'];?>
</td>
	</tr>
	<?php }} ?>
</table>
