<?php /* Smarty version Smarty-3.1.19, created on 2017-03-07 22:26:52
         compiled from "/home1/innaeffe/public_html/modules/tmsocialfeeds/views/templates/admin/items_facebook.tpl" */ ?>
<?php /*%%SmartyHeaderCode:200538373958bf79fcbac688-72108349%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0f6734d85bd4df81ad5153280f93782fc6b565be' => 
    array (
      0 => '/home1/innaeffe/public_html/modules/tmsocialfeeds/views/templates/admin/items_facebook.tpl',
      1 => 1450858586,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '200538373958bf79fcbac688-72108349',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'hook' => 0,
    'hItem' => 0,
    'id_shop' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58bf79fcecda26_06625248',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58bf79fcecda26_06625248')) {function content_58bf79fcecda26_06625248($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/home1/innaeffe/public_html/tools/smarty/plugins/modifier.escape.php';
?><div class="soc-settings-block <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['hook']->value, ENT_QUOTES, 'UTF-8', true);?>
">
	<form method="post" action="" enctype="multipart/form-data" class="item-form defaultForm form-horizontal">
        <div class="well">
        	<div class="form-group">
                <label class="col-lg-3 control-label"><?php echo smartyTranslate(array('s'=>'Add block to position','mod'=>'tmsocialfeed'),$_smarty_tpl);?>
</label>
                <div class="col-lg-3">
                    <span class="switch prestashop-switch fixed-width-lg">
                        <input type="radio" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['hItem']->value['item_type'], ENT_QUOTES, 'UTF-8', true);?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['hook']->value, ENT_QUOTES, 'UTF-8', true);?>
" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['hItem']->value['item_type'], ENT_QUOTES, 'UTF-8', true);?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['hook']->value, ENT_QUOTES, 'UTF-8', true);?>
_on" value="1" <?php if ($_smarty_tpl->tpl_vars['hItem']->value['active']) {?> checked="checked"<?php }?>>
                        <label for="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['hItem']->value['item_type'], ENT_QUOTES, 'UTF-8', true);?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['hook']->value, ENT_QUOTES, 'UTF-8', true);?>
_on" class="radioCheck">
                            <i class="color_success"></i> <?php echo smartyTranslate(array('s'=>'Yes','mod'=>'tmsocialfeed'),$_smarty_tpl);?>

                        </label>
                        <input type="radio" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['hItem']->value['item_type'], ENT_QUOTES, 'UTF-8', true);?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['hook']->value, ENT_QUOTES, 'UTF-8', true);?>
" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['hItem']->value['item_type'], ENT_QUOTES, 'UTF-8', true);?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['hook']->value, ENT_QUOTES, 'UTF-8', true);?>
_off" value="0" <?php if (!$_smarty_tpl->tpl_vars['hItem']->value['active']) {?> checked="checked"<?php }?>>
                        <label for="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['hItem']->value['item_type'], ENT_QUOTES, 'UTF-8', true);?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['hook']->value, ENT_QUOTES, 'UTF-8', true);?>
_off" class="radioCheck">
                            <i class="color_danger"></i> <?php echo smartyTranslate(array('s'=>'No','mod'=>'tmsocialfeed'),$_smarty_tpl);?>

                        </label>
                        <a class="slide-button btn"></a>
                    </span>
                </div>
            </div>
            <div class="item-field form-group">
            	<label class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Select theme','mod'=>'tmsocialfeed'),$_smarty_tpl);?>
</label>
                <div class="col-lg-3">
                	<select class="select" name="item_theme">
                    	<option value="dark"<?php if ($_smarty_tpl->tpl_vars['hItem']->value['item_theme']=="dark") {?> selected="selected"<?php }?>><?php echo smartyTranslate(array('s'=>'dark','mod'=>'tmsocialfeed'),$_smarty_tpl);?>
</option>
                        <option value="light"<?php if ($_smarty_tpl->tpl_vars['hItem']->value['item_theme']=="light") {?> selected="selected"<?php }?>><?php echo smartyTranslate(array('s'=>'light','mod'=>'tmsocialfeed'),$_smarty_tpl);?>
</option>
                    </select>
                </div>
            </div>
            <div class="selector item-field form-group">
                <label class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Sort order','mod'=>'tmsocialfeed'),$_smarty_tpl);?>
</label>
                <div class="col-lg-3">
                    <input type="text" name="sort_order" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['hItem']->value['item_order'], 'intval');?>
">
                </div>
            </div>
            <div class="item-field form-group">
                <label class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Widget width','mod'=>'tmsocialfeed'),$_smarty_tpl);?>
</label>
                <div class="col-lg-3">
                    <input type="text" name="item_width" value="<?php if ($_smarty_tpl->tpl_vars['hItem']->value['item_width']) {?><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['hItem']->value['item_width'], 'intval');?>
<?php }?>">
                </div>
            </div>
            <div class="item-field form-group">
                <label class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Widget height','mod'=>'tmsocialfeed'),$_smarty_tpl);?>
</label>
                <div class="col-lg-3">
                    <input type="text" name="item_height" value="<?php if ($_smarty_tpl->tpl_vars['hItem']->value['item_height']) {?><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['hItem']->value['item_height'], 'intval');?>
<?php }?>">
                </div>
            </div>
            <div class="form-group">
                <label class="col-lg-3 control-label"><?php echo smartyTranslate(array('s'=>'Enable header','mod'=>'tmsocialfeed'),$_smarty_tpl);?>
</label>
                <div class="col-lg-9">
                    <span class="switch prestashop-switch fixed-width-lg">
                        <input type="radio" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['hItem']->value['item_type'], ENT_QUOTES, 'UTF-8', true);?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['hook']->value, ENT_QUOTES, 'UTF-8', true);?>
_header" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['hItem']->value['item_type'], ENT_QUOTES, 'UTF-8', true);?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['hook']->value, ENT_QUOTES, 'UTF-8', true);?>
_header_on" value="1" <?php if ($_smarty_tpl->tpl_vars['hItem']->value['item_header']) {?> checked="checked"<?php }?>>
                        <label for="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['hItem']->value['item_type'], ENT_QUOTES, 'UTF-8', true);?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['hook']->value, ENT_QUOTES, 'UTF-8', true);?>
_header_on" class="radioCheck">
                            <i class="color_success"></i> <?php echo smartyTranslate(array('s'=>'Yes','mod'=>'tmsocialfeed'),$_smarty_tpl);?>

                        </label>
                        <input type="radio" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['hItem']->value['item_type'], ENT_QUOTES, 'UTF-8', true);?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['hook']->value, ENT_QUOTES, 'UTF-8', true);?>
_header" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['hItem']->value['item_type'], ENT_QUOTES, 'UTF-8', true);?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['hook']->value, ENT_QUOTES, 'UTF-8', true);?>
_header_off" value="0" <?php if (!$_smarty_tpl->tpl_vars['hItem']->value['item_header']) {?> checked="checked"<?php }?>>
                        <label for="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['hItem']->value['item_type'], ENT_QUOTES, 'UTF-8', true);?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['hook']->value, ENT_QUOTES, 'UTF-8', true);?>
_header_off" class="radioCheck">
                            <i class="color_danger"></i> <?php echo smartyTranslate(array('s'=>'No','mod'=>'tmsocialfeed'),$_smarty_tpl);?>

                        </label>
                        <a class="slide-button btn"></a>
                    </span>
                </div>
            </div>
            <div class="form-group">
                <label class="col-lg-3 control-label"><?php echo smartyTranslate(array('s'=>'Enable border','mod'=>'tmsocialfeed'),$_smarty_tpl);?>
</label>
                <div class="col-lg-9">
                    <span class="switch prestashop-switch fixed-width-lg">
                        <input type="radio" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['hItem']->value['item_type'], ENT_QUOTES, 'UTF-8', true);?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['hook']->value, ENT_QUOTES, 'UTF-8', true);?>
_border" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['hItem']->value['item_type'], ENT_QUOTES, 'UTF-8', true);?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['hook']->value, ENT_QUOTES, 'UTF-8', true);?>
_border_on" value="1" <?php if ($_smarty_tpl->tpl_vars['hItem']->value['item_border']) {?> checked="checked"<?php }?>>
                        <label for="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['hItem']->value['item_type'], ENT_QUOTES, 'UTF-8', true);?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['hook']->value, ENT_QUOTES, 'UTF-8', true);?>
_border_on" class="radioCheck">
                            <i class="color_success"></i> <?php echo smartyTranslate(array('s'=>'Yes','mod'=>'tmsocialfeed'),$_smarty_tpl);?>

                        </label>
                        <input type="radio" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['hItem']->value['item_type'], ENT_QUOTES, 'UTF-8', true);?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['hook']->value, ENT_QUOTES, 'UTF-8', true);?>
_border" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['hItem']->value['item_type'], ENT_QUOTES, 'UTF-8', true);?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['hook']->value, ENT_QUOTES, 'UTF-8', true);?>
_border_off" value="0" <?php if (!$_smarty_tpl->tpl_vars['hItem']->value['item_border']) {?> checked="checked"<?php }?>>
                        <label for="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['hItem']->value['item_type'], ENT_QUOTES, 'UTF-8', true);?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['hook']->value, ENT_QUOTES, 'UTF-8', true);?>
_border_off" class="radioCheck">
                            <i class="color_danger"></i> <?php echo smartyTranslate(array('s'=>'No','mod'=>'tmsocialfeed'),$_smarty_tpl);?>

                        </label>
                        <a class="slide-button btn"></a>
                    </span>
                </div>
            </div>
            <div class="form-group">
                <label class="col-lg-3 control-label"><?php echo smartyTranslate(array('s'=>'Show faces','mod'=>'tmsocialfeed'),$_smarty_tpl);?>
</label>
                <div class="col-lg-9">
                    <span class="switch prestashop-switch fixed-width-lg">
                        <input type="radio" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['hItem']->value['item_type'], ENT_QUOTES, 'UTF-8', true);?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['hook']->value, ENT_QUOTES, 'UTF-8', true);?>
_replies" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['hItem']->value['item_type'], ENT_QUOTES, 'UTF-8', true);?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['hook']->value, ENT_QUOTES, 'UTF-8', true);?>
_replies_on" value="1" <?php if ($_smarty_tpl->tpl_vars['hItem']->value['item_replies']) {?> checked="checked"<?php }?>>
                        <label for="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['hItem']->value['item_type'], ENT_QUOTES, 'UTF-8', true);?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['hook']->value, ENT_QUOTES, 'UTF-8', true);?>
_replies_on" class="radioCheck">
                            <i class="color_success"></i> <?php echo smartyTranslate(array('s'=>'Yes','mod'=>'tmsocialfeed'),$_smarty_tpl);?>

                        </label>
                        <input type="radio" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['hItem']->value['item_type'], ENT_QUOTES, 'UTF-8', true);?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['hook']->value, ENT_QUOTES, 'UTF-8', true);?>
_replies" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['hItem']->value['item_type'], ENT_QUOTES, 'UTF-8', true);?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['hook']->value, ENT_QUOTES, 'UTF-8', true);?>
_replies_off" value="0" <?php if (!$_smarty_tpl->tpl_vars['hItem']->value['item_replies']) {?> checked="checked"<?php }?>>
                        <label for="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['hItem']->value['item_type'], ENT_QUOTES, 'UTF-8', true);?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['hook']->value, ENT_QUOTES, 'UTF-8', true);?>
_replies_off" class="radioCheck">
                            <i class="color_danger"></i> <?php echo smartyTranslate(array('s'=>'No','mod'=>'tmsocialfeed'),$_smarty_tpl);?>

                        </label>
                        <a class="slide-button btn"></a>
                    </span>
                </div>
            </div>
            <div class="form-group">
                <label class="col-lg-3 control-label"><?php echo smartyTranslate(array('s'=>'Show posts','mod'=>'tmsocialfeed'),$_smarty_tpl);?>
</label>
                <div class="col-lg-9">
                    <span class="switch prestashop-switch fixed-width-lg">
                        <input type="radio" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['hItem']->value['item_type'], ENT_QUOTES, 'UTF-8', true);?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['hook']->value, ENT_QUOTES, 'UTF-8', true);?>
_scroll" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['hItem']->value['item_type'], ENT_QUOTES, 'UTF-8', true);?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['hook']->value, ENT_QUOTES, 'UTF-8', true);?>
_scroll_on" value="1" <?php if ($_smarty_tpl->tpl_vars['hItem']->value['item_scroll']) {?> checked="checked"<?php }?>>
                        <label for="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['hItem']->value['item_type'], ENT_QUOTES, 'UTF-8', true);?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['hook']->value, ENT_QUOTES, 'UTF-8', true);?>
_scroll_on" class="radioCheck">
                            <i class="color_success"></i> <?php echo smartyTranslate(array('s'=>'Yes','mod'=>'tmsocialfeed'),$_smarty_tpl);?>

                        </label>
                        <input type="radio" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['hItem']->value['item_type'], ENT_QUOTES, 'UTF-8', true);?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['hook']->value, ENT_QUOTES, 'UTF-8', true);?>
_scroll" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['hItem']->value['item_type'], ENT_QUOTES, 'UTF-8', true);?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['hook']->value, ENT_QUOTES, 'UTF-8', true);?>
_scroll_off" value="0" <?php if (!$_smarty_tpl->tpl_vars['hItem']->value['item_scroll']) {?> checked="checked"<?php }?>>
                        <label for="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['hItem']->value['item_type'], ENT_QUOTES, 'UTF-8', true);?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['hook']->value, ENT_QUOTES, 'UTF-8', true);?>
_scroll_off" class="radioCheck">
                            <i class="color_danger"></i> <?php echo smartyTranslate(array('s'=>'No','mod'=>'tmsocialfeed'),$_smarty_tpl);?>

                        </label>
                        <a class="slide-button btn"></a>
                    </span>
                </div>
            </div>
			<input type="hidden" name="feed_type" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['hItem']->value['item_type'], ENT_QUOTES, 'UTF-8', true);?>
" />
            <input type="hidden" name="id_shop" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['id_shop']->value, 'intval');?>
" />
            <input type="hidden" name="hook" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['hook']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
            <div class="form-group">
                <div class="col-lg-7 col-lg-offset-3">
                    <button type="submit" name="newItem" class="button-new-item-save btn btn-success pull-right" onClick="this.form.submit();"><i class="icon-save"></i> <?php echo smartyTranslate(array('s'=>'Save','mod'=>'tmsocialfeed'),$_smarty_tpl);?>
</button>
                </div>
            </div>
        </div>
        
    </form>
</div><?php }} ?>
