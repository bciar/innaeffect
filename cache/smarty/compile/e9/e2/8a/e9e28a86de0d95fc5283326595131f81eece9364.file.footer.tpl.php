<?php /* Smarty version Smarty-3.1.19, created on 2017-03-05 11:06:49
         compiled from "/home1/innaeffe/public_html/themes/theme1255/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:139353006458bc3799648775-84335128%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e9e28a86de0d95fc5283326595131f81eece9364' => 
    array (
      0 => '/home1/innaeffe/public_html/themes/theme1255/footer.tpl',
      1 => 1450858586,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '139353006458bc3799648775-84335128',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content_only' => 0,
    'left_column_size' => 0,
    'HOOK_LEFT_COLUMN' => 0,
    'right_column_size' => 0,
    'HOOK_RIGHT_COLUMN' => 0,
    'HOOK_HOME' => 0,
    'HOOK_FOOTER' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58bc37996f1d64_78559684',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58bc37996f1d64_78559684')) {function content_58bc37996f1d64_78559684($_smarty_tpl) {?><?php if (!isset($_smarty_tpl->tpl_vars['content_only']->value)||!$_smarty_tpl->tpl_vars['content_only']->value) {?>
						</div><!-- #center_column -->
                        <?php if (isset($_smarty_tpl->tpl_vars['left_column_size']->value)&&!empty($_smarty_tpl->tpl_vars['left_column_size']->value)) {?>
                            <div id="left_column" class="column col-xs-12 col-sm-<?php echo intval($_smarty_tpl->tpl_vars['left_column_size']->value);?>
"><?php echo $_smarty_tpl->tpl_vars['HOOK_LEFT_COLUMN']->value;?>
</div>
                        <?php }?>
                    </div><!--.large-left-->
                    </div><!--.row-->
					<?php if (isset($_smarty_tpl->tpl_vars['right_column_size']->value)&&!empty($_smarty_tpl->tpl_vars['right_column_size']->value)) {?>
						<div id="right_column" class="col-xs-12 col-sm-<?php echo intval($_smarty_tpl->tpl_vars['right_column_size']->value);?>
 column"><?php echo $_smarty_tpl->tpl_vars['HOOK_RIGHT_COLUMN']->value;?>
</div>
					<?php }?>
					</div><!-- .row -->
				</div><!-- #columns -->
                <?php if (isset($_smarty_tpl->tpl_vars['HOOK_HOME']->value)&&trim($_smarty_tpl->tpl_vars['HOOK_HOME']->value)) {?>
                	<div class="home-column">
                        <div class="container">
                            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

                        </div>
                    </div>
                <?php }?>
			</div><!-- .columns-container -->
			<?php if (isset($_smarty_tpl->tpl_vars['HOOK_FOOTER']->value)) {?>
				<!-- Footer -->
				<div class="footer-container">
					<footer id="footer"  class="container">
						<div class="row">
                        <div class="footer-block1 col-xs-12 col-sm-4 col-md-4"></div>
                        <div class="footer-block2 col-xs-12 col-sm-4 col-md-2"></div>
                        <div class="footer-block3 col-xs-12 col-sm-4 col-md-2"></div>
                        <div class="footer-block4 col-xs-12 col-sm-12 col-md-4"></div>
                        
                        
                        <?php echo $_smarty_tpl->tpl_vars['HOOK_FOOTER']->value;?>
</div>
					</footer>
				</div><!-- #footer -->
			<?php }?>
		</div><!-- #page -->
<?php }?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./global.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	</body>
</html><?php }} ?>
