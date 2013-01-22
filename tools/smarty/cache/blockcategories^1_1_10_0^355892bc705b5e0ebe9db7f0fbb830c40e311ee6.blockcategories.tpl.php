<?php /*%%SmartyHeaderCode:59934f9ace88656c93-10520629%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '355892bc705b5e0ebe9db7f0fbb830c40e311ee6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\xampp\\presta1473/modules/blockcategories/blockcategories.tpl',
      1 => 1335544429,
      2 => 'file',
    ),
    '19baf130eb5e64f6088282ff310a42b96dfc4095' => 
    array (
      0 => 'C:\\xampp\\htdocs\\xampp\\presta1473/modules/blockcategories/category-tree-branch.tpl',
      1 => 1335544429,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '59934f9ace88656c93-10520629',
  'has_nocache_code' => false,
  'cache_lifetime' => 3600,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!$no_render) {?>

<!-- Block categories module -->
<div id="categories_block_left" class="block">
	<h4>Categories</h4>
	<div class="block_content">
		<ul class="tree dhtml">
									
<li >
	<a href="http://localhost/xampp/presta1473/category.php?id_category=3" class="selected" title="Jewelry - California">Jewelry</a>
	</li>
												
<li >
	<a href="http://localhost/xampp/presta1473/category.php?id_category=4"  title="">Glass</a>
	</li>
												
<li >
	<a href="http://localhost/xampp/presta1473/category.php?id_category=5"  title="">Beads Jewelry</a>
	</li>
												
<li >
	<a href="http://localhost/xampp/presta1473/category.php?id_category=6"  title="">Art Work</a>
	</li>
												
<li >
	<a href="http://localhost/xampp/presta1473/category.php?id_category=7"  title="">Classes</a>
	</li>
												
<li >
	<a href="http://localhost/xampp/presta1473/category.php?id_category=8"  title="">Lessons</a>
	</li>
												
<li class="last">
	<a href="http://localhost/xampp/presta1473/category.php?id_category=9"  title="">Parties</a>
			<ul>
									
<li class="last">
	<a href="http://localhost/xampp/presta1473/category.php?id_category=10"  title="">Friends</a>
	</li>
							</ul>
	</li>
							</ul>
		<script type="text/javascript">
		// <![CDATA[
			// we hide the tree only if JavaScript is activated
			$('div#categories_block_left ul.dhtml').hide();
		// ]]>
		</script>
	</div>
</div>
<!-- /Block categories module -->
<?php } ?>