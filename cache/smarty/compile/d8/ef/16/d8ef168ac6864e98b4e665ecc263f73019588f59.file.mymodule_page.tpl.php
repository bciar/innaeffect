<?php /* Smarty version Smarty-3.1.19, created on 2017-03-07 10:16:38
         compiled from "/home1/innaeffe/public_html/modules/onehopsmsservice/views/templates/front/mymodule_page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:157405823258beced7018a33-00897216%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd8ef168ac6864e98b4e665ecc263f73019588f59' => 
    array (
      0 => '/home1/innaeffe/public_html/modules/onehopsmsservice/views/templates/front/mymodule_page.tpl',
      1 => 1488899783,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '157405823258beced7018a33-00897216',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'breadcrumbs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58beced705e806_82136253',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58beced705e806_82136253')) {function content_58beced705e806_82136253($_smarty_tpl) {?>
<link href="../modules/onehopsmsservice/views/css/onehopsmsservice.css" rel="stylesheet" />
<?php if ($_smarty_tpl->tpl_vars['breadcrumbs']->value!='') {?>
	<p style="display: none;" id="customBreadcrumbs"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['breadcrumbs']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</p>
<?php }?>


	<script type="text/javascript">
	  	$(".menu li").removeClass("active");
        $("#maintab-onehopsmsservice").addClass("active");
        var custoBreadcrumbs = $("#customBreadcrumbs").text();
		$(".page-title").text('');
		$(".page-title").text(custoBreadcrumbs);
		$(".breadcrumb li:last-child").text('');
		$(".breadcrumb li:last-child").html(custoBreadcrumbs);		
	</script>


<?php }} ?>
