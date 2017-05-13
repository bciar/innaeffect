<?php /* Smarty version Smarty-3.1.19, created on 2017-03-05 12:11:24
         compiled from "/home1/innaeffe/public_html/modules/tmproductvideos/views/templates/hooks/tmproductvideos_tab_content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:111518370658bc46bc281b76-37458813%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4cd46ad5922df82524044648a57deb9510f286ab' => 
    array (
      0 => '/home1/innaeffe/public_html/modules/tmproductvideos/views/templates/hooks/tmproductvideos_tab_content.tpl',
      1 => 1450858586,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '111518370658bc46bc281b76-37458813',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'videos' => 0,
    'video' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58bc46bc2ae907_97703152',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58bc46bc2ae907_97703152')) {function content_58bc46bc2ae907_97703152($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['videos']->value)&&$_smarty_tpl->tpl_vars['videos']->value) {?>
	<div id="product-video-tab-content" class="product-video-tab-content tab-pane">
        <?php  $_smarty_tpl->tpl_vars['video'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['video']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['videos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['video']->key => $_smarty_tpl->tpl_vars['video']->value) {
$_smarty_tpl->tpl_vars['video']->_loop = true;
?>
            <?php if ($_smarty_tpl->tpl_vars['video']->value['type']=='youtube') {?>
                <div class="videowrapper">
                    <iframe type="text/html" 
                        src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['video']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
?enablejsapi=1&version=3&html5=1&wmode=transparent"
                        frameborder="0"
                        wmode="Opaque"></iframe>
                </div>
           <?php } elseif ($_smarty_tpl->tpl_vars['video']->value['type']=='vimeo') {?>
                <div class='embed-container'>
                    <iframe 
                        src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['video']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
"
                        frameborder="0"
                        webkitAllowFullScreen
                        mozallowfullscreen
                        allowFullScreen>
                    </iframe>
                </div>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['video']->value['name']) {?>
                <h4 class="video-name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['video']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</h4>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['video']->value['description']) {?>
                <p class="video-description"><?php echo $_smarty_tpl->tpl_vars['video']->value['description'];?>
</p>
            <?php }?>
        <?php } ?>
    </div>
<?php }?><?php }} ?>
