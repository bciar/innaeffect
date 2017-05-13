<?php /* Smarty version Smarty-3.1.19, created on 2017-03-09 22:13:57
         compiled from "/home1/innaeffe/public_html/modules/ruqop/views/templates/front/form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:117677719558c219f5615e86-37002971%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '91c6f9b229d1d72152688045050375f98a175de5' => 
    array (
      0 => '/home1/innaeffe/public_html/modules/ruqop/views/templates/front/form.tpl',
      1 => 1489115490,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '117677719558c219f5615e86-37002971',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'err' => 0,
    'error' => 0,
    'step' => 0,
    'address' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58c219f56dc798_22230896',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58c219f56dc798_22230896')) {function content_58c219f56dc798_22230896($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['err']->value)&&$_smarty_tpl->tpl_vars['err']->value) {?>
	<div class="alert alert-danger ruqalert">
		<ul>
		<?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['err']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->_loop = true;
?>
			<li><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['error']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</li>
		<?php } ?>
		</ul>
	</div>
<?php } else { ?>
	<?php if ($_smarty_tpl->tpl_vars['step']->value==1) {?>
		<div class="ruqop unvisible box-cart-bottom" id="ruqop">
		<div class="clearfix">
			<div class="clearfix"></div>
			<div class="clearfix">
				<label for="phone_mobile"><?php echo smartyTranslate(array('s'=>'Order by phone','mod'=>'ruqop'),$_smarty_tpl);?>
</label>
				<div class="required form-group input-group-sm">
					<input class="is_required form-control" type="text" value="<?php if (isset($_smarty_tpl->tpl_vars['address']->value)&&isset($_smarty_tpl->tpl_vars['address']->value->phone_mobile)) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['address']->value->phone_mobile, ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" name="phone_mobile" id="phone_mobile" />
					<button class="btn btn-sm btn-info submit" name="submit" type="submit">
						<span><?php echo smartyTranslate(array('s'=>'Proceed to checkout','mod'=>'ruqop'),$_smarty_tpl);?>
 <i class="icon-chevron-right right"></i></span>
					</button>
				</div>
			</div>
			<div class="submit clearfix">
			</div>
			<div class="clearfix"></div>
		</div>
		</div>
		<div class="clearfix"></div>
	<?php } elseif ($_smarty_tpl->tpl_vars['step']->value==2) {?>
		<div class="box rubox">
			<h1 class="page-heading"><?php echo smartyTranslate(array('s'=>'Your order is complete.','mod'=>'ruqop'),$_smarty_tpl);?>
</h1>

			<?php echo smartyTranslate(array('s'=>'If you have questions, comments or concerns, please contact our','mod'=>'ruqop'),$_smarty_tpl);?>
 
			<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('contact',true), ENT_QUOTES, 'UTF-8', true);?>
"><?php echo smartyTranslate(array('s'=>'expert customer support team.','mod'=>'ruqop'),$_smarty_tpl);?>
</a>
			<br />
		</div>
		<div class="clearfix"></div>
	<?php }?>
<?php }?><?php }} ?>
