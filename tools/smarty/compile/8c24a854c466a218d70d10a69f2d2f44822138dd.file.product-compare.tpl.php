<?php /* Smarty version Smarty-3.0.7, created on 2012-04-27 14:28:46
         compiled from "C:\xampp\htdocs\xampp\presta1473/themes/prestashop/./product-compare.tpl" */ ?>
<?php /*%%SmartyHeaderCode:894f9b0f8ec8f407-90069001%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8c24a854c466a218d70d10a69f2d2f44822138dd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\xampp\\presta1473/themes/prestashop/./product-compare.tpl',
      1 => 1335544412,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '894f9b0f8ec8f407-90069001',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>


<?php if ($_smarty_tpl->getVariable('comparator_max_item')->value){?>
<script type="text/javascript">
// <![CDATA[
	var min_item = '<?php echo smartyTranslate(array('s'=>'Please select at least one product.','js'=>1),$_smarty_tpl);?>
';
	var max_item = "<?php echo smartyTranslate(array('s'=>'You cannot add more than','js'=>1),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->getVariable('comparator_max_item')->value;?>
 <?php echo smartyTranslate(array('s'=>'product(s) in the product comparator','js'=>1),$_smarty_tpl);?>
";
//]]>
</script>
	<form method="get" action="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('products-comparison.php');?>
" onsubmit="true">
		<p>
		<input type="submit" class="button" value="<?php echo smartyTranslate(array('s'=>'Compare'),$_smarty_tpl);?>
" style="float:right" />
		<input type="hidden" name="compare_product_list" class="compare_product_list" value="" />
		</p>
	</form>
<?php }?>

