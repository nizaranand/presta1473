<?php /* Smarty version Smarty-3.0.7, created on 2012-04-27 09:51:22
         compiled from "C:\xampp\htdocs\xampp\presta1473/themes/prestashop/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:100664f9ace8a3459a3-34553658%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd13750891d18b79562f93a81a3146956404b6679' => 
    array (
      0 => 'C:\\xampp\\htdocs\\xampp\\presta1473/themes/prestashop/footer.tpl',
      1 => 1335544411,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '100664f9ace8a3459a3-34553658',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>


		<?php if (!$_smarty_tpl->getVariable('content_only')->value){?>
				</div>

<!-- Right -->
				<div id="right_column" class="column">
					<?php echo $_smarty_tpl->getVariable('HOOK_RIGHT_COLUMN')->value;?>

				</div>
			</div>

<!-- Footer -->
			<div id="footer"><?php echo $_smarty_tpl->getVariable('HOOK_FOOTER')->value;?>
</div>
		</div>
	<?php }?>
	</body>
</html>
