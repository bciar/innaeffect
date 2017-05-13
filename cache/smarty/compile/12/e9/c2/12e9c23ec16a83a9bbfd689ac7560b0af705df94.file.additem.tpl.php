<?php /* Smarty version Smarty-3.1.19, created on 2017-03-07 20:54:59
         compiled from "/home1/innaeffe/public_html/modules/tmmegamenu/views/templates/admin/additem.tpl" */ ?>
<?php /*%%SmartyHeaderCode:129842958458bf6473e27977-63675903%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '12e9c23ec16a83a9bbfd689ac7560b0af705df94' => 
    array (
      0 => '/home1/innaeffe/public_html/modules/tmmegamenu/views/templates/admin/additem.tpl',
      1 => 1450858586,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '129842958458bf6473e27977-63675903',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item' => 0,
    'languages' => 0,
    'language' => 0,
    'title_text' => 0,
    'categTree' => 0,
    'child' => 0,
    'active' => 0,
    'cmsCatTree' => 0,
    'badge_text' => 0,
    'option_select' => 0,
    'option_selected' => 0,
    'megamenu' => 0,
    'url_enable' => 0,
    'default_language' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58bf64741b72e4_70619128',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58bf64741b72e4_70619128')) {function content_58bf64741b72e4_70619128($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/home1/innaeffe/public_html/tools/smarty/plugins/modifier.escape.php';
?><form method="post" action="" enctype="multipart/form-data" class="defaultForm form-horizontal">
	<div class="panel tmmegamenu">
        <div class="panel-heading">
            <?php if (isset($_smarty_tpl->tpl_vars['item']->value)&&$_smarty_tpl->tpl_vars['item']->value) {?><?php echo smartyTranslate(array('s'=>'Update tab','mod'=>'tmmegamenu'),$_smarty_tpl);?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'Add new tab','mod'=>'tmmegamenu'),$_smarty_tpl);?>
<?php }?>
        </div>
        <div class="form-wrapper">
        	<div class="form-group">
                <label class="control-label col-lg-3 text-right required"> <?php echo smartyTranslate(array('s'=>'Enter tab name','mod'=>'tmmegamenu'),$_smarty_tpl);?>
</label>
                <?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
?>
                	<?php ob_start();?><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['language']->value['id_lang'], 'intval');?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['title_text'] = new Smarty_variable("title_".$_tmp1, null, 0);?>
                    <div class="translatable-field lang-<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['language']->value['id_lang'], 'intval');?>
">
                        <div class="col-lg-2">
                            <input type="text" id="name_<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['language']->value['id_lang'], 'intval');?>
" class="tagify CurrentText" name="name_<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['language']->value['id_lang'], 'intval');?>
" value="<?php if (isset($_smarty_tpl->tpl_vars['item']->value)&&$_smarty_tpl->tpl_vars['item']->value) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->tpl_vars['title_text']->value], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" />
                        </div>
                        <div class="col-lg-1">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['iso_code'], ENT_QUOTES, 'UTF-8', true);?>

                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
?>
                                <li>
                                    <a href="javascript:hideOtherLanguage(<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
);"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</a>
                                </li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                <?php } ?>
            </div>
        	<div class="form-group">
                <label class="col-lg-3 control-label"><?php echo smartyTranslate(array('s'=>'Active','mod'=>'tmmegamenu'),$_smarty_tpl);?>
</label>
                <div class="col-lg-9">
                    <span class="switch prestashop-switch fixed-width-lg">
                        <input type="radio" name="addnewactive" id="addnewactive_on" value="1" <?php if (isset($_smarty_tpl->tpl_vars['item']->value)&&$_smarty_tpl->tpl_vars['item']->value&&$_smarty_tpl->tpl_vars['item']->value['active']==1) {?>checked="checked"<?php }?>>
                        <label for="addnewactive_on" class="radioCheck">
                            <i class="color_success"></i> <?php echo smartyTranslate(array('s'=>'Yes','mod'=>'tmmegamenu'),$_smarty_tpl);?>

                        </label>
                        <input type="radio" name="addnewactive" id="addnewactive_off" value="0" <?php if (isset($_smarty_tpl->tpl_vars['item']->value)&&$_smarty_tpl->tpl_vars['item']->value) {?><?php if ($_smarty_tpl->tpl_vars['item']->value['active']==0) {?>checked="checked"<?php }?><?php } else { ?>checked="checked"<?php }?>>
                        <label for="addnewactive_off" class="radioCheck">
                            <i class="color_danger"></i> <?php echo smartyTranslate(array('s'=>'No','mod'=>'tmmegamenu'),$_smarty_tpl);?>

                        </label>
                        <a class="slide-button btn"></a>
                    </span>
                </div>
            </div>
            <div class="form-group">
            	<label class="control-label col-lg-3 text-right"><?php echo smartyTranslate(array('s'=>'Link','mod'=>'tmmegamenu'),$_smarty_tpl);?>
</label>
            	<div class="col-lg-2">
            		<select id="tmmegamenu_url_type" name="tab_url_type">
            			<option value="1" <?php if (isset($_smarty_tpl->tpl_vars['item']->value)&&$_smarty_tpl->tpl_vars['item']->value&&$_smarty_tpl->tpl_vars['item']->value['is_custom_url']) {?>selected="selected"<?php }?>>Url</option>
            			<option value="0" <?php if (isset($_smarty_tpl->tpl_vars['item']->value)&&$_smarty_tpl->tpl_vars['item']->value&&!$_smarty_tpl->tpl_vars['item']->value['is_custom_url']) {?>selected="selected"<?php }?>>Existing Url</option>
            		</select>
            	</div>
            </div>
            <div class="form-group tmmegamenu_url_text">
            	<label class="control-label col-lg-3 text-right"></label>
            	<div class="col-lg-2">
                	<?php if (isset($_smarty_tpl->tpl_vars['item']->value)&&$_smarty_tpl->tpl_vars['item']->value) {?>
                    	<?php if ($_smarty_tpl->tpl_vars['item']->value['url']) {?>
                    		<?php $_smarty_tpl->tpl_vars['active'] = new Smarty_variable($_smarty_tpl->tpl_vars['item']->value['url'], null, 0);?>
                        <?php } else { ?>
                        	<?php $_smarty_tpl->tpl_vars['active'] = new Smarty_variable('', null, 0);?>
                        <?php }?>
                    <?php } else { ?>
                    	<?php $_smarty_tpl->tpl_vars['active'] = new Smarty_variable('', null, 0);?>
                    <?php }?>
                	<input name="tab_url_custom" value="<?php if (isset($_smarty_tpl->tpl_vars['item']->value)&&$_smarty_tpl->tpl_vars['item']->value&&$_smarty_tpl->tpl_vars['item']->value['is_custom_url']) {?><?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
<?php }?>" type="text" placeholder="<?php echo smartyTranslate(array('s'=>'Custom Url','mod'=>'tmmegamenu'),$_smarty_tpl);?>
" autocomplete="off" style="display:none;" />
            		<select name="tab_url" style="display:none;">
                    	<option disabled="disabled"><?php echo smartyTranslate(array('s'=>'Categories','mod'=>'tmmegamenu'),$_smarty_tpl);?>
</option>
            			<?php  $_smarty_tpl->tpl_vars['child'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['child']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categTree']->value['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['child']->key => $_smarty_tpl->tpl_vars['child']->value) {
$_smarty_tpl->tpl_vars['child']->_loop = true;
?>
                            <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['branche_tpl_path']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('node'=>$_smarty_tpl->tpl_vars['child']->value,'active'=>$_smarty_tpl->tpl_vars['active']->value), 0);?>

                        <?php } ?>
                        <option disabled="disabled"><?php echo smartyTranslate(array('s'=>'Cms Categories','mod'=>'tmmegamenu'),$_smarty_tpl);?>
</option>
                        <?php  $_smarty_tpl->tpl_vars['child'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['child']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cmsCatTree']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['child']->key => $_smarty_tpl->tpl_vars['child']->value) {
$_smarty_tpl->tpl_vars['child']->_loop = true;
?>
                            <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['branche_tpl_path']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('node'=>$_smarty_tpl->tpl_vars['child']->value,'active'=>$_smarty_tpl->tpl_vars['active']->value), 0);?>

                        <?php } ?>
            		</select>
            	</div>
            </div>
           	<div class="selector item-field form-group">
            	<label class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Sort order','mod'=>'tmmegamenu'),$_smarty_tpl);?>
</label>
            	<div class="col-lg-1">
                    <input type="text" name="sort_order" value="<?php if (isset($_smarty_tpl->tpl_vars['item']->value)&&$_smarty_tpl->tpl_vars['item']->value) {?><?php echo $_smarty_tpl->tpl_vars['item']->value['sort_order'];?>
<?php }?>">
                </div>
            </div>
            <div class="item-field form-group">
                <label class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Specific class','mod'=>'tmmegamenu'),$_smarty_tpl);?>
</label>
                <div class="col-lg-2">
                    <input type="text" name="specific_class" value="<?php if (isset($_smarty_tpl->tpl_vars['item']->value)&&$_smarty_tpl->tpl_vars['item']->value) {?><?php echo $_smarty_tpl->tpl_vars['item']->value['specific_class'];?>
<?php }?>">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-lg-3 text-right"> <?php echo smartyTranslate(array('s'=>'Enter tab badge','mod'=>'tmmegamenu'),$_smarty_tpl);?>
</label>
                <?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
?>
                	<?php if (isset($_smarty_tpl->tpl_vars['item']->value)&&$_smarty_tpl->tpl_vars['item']->value) {?>
                		<?php ob_start();?><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['language']->value['id_lang'], 'intval');?>
<?php $_tmp2=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['badge_text'] = new Smarty_variable("badge_".$_tmp2, null, 0);?>
                    <?php }?>
                    <div class="translatable-field lang-<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['language']->value['id_lang'], 'intval');?>
">
                        <div class="col-lg-2">
                            <input type="text" id="badge_<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['language']->value['id_lang'], 'intval');?>
" class="tagify CurrentText" name="badge_<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['language']->value['id_lang'], 'intval');?>
" value="<?php if (isset($_smarty_tpl->tpl_vars['item']->value)&&$_smarty_tpl->tpl_vars['item']->value) {?><?php echo $_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->tpl_vars['badge_text']->value];?>
<?php }?>" />
                        </div>
                        <div class="col-lg-1">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['iso_code'], ENT_QUOTES, 'UTF-8', true);?>

                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
?>
                                <li>
                                    <a href="javascript:hideOtherLanguage(<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
);"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</a>
                                </li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <div id="is_mega_menu" class="form-group">
                <label class="col-lg-3 control-label"><?php echo smartyTranslate(array('s'=>'It is Mega Menu','mod'=>'tmmegamenu'),$_smarty_tpl);?>
</label>
                <div class="col-lg-9">
                    <span class="switch prestashop-switch fixed-width-lg">
                        <input type="radio" name="addnewmega" id="addnewmega_on" value="1" <?php if (isset($_smarty_tpl->tpl_vars['item']->value)&&$_smarty_tpl->tpl_vars['item']->value&&$_smarty_tpl->tpl_vars['item']->value['is_mega']) {?>checked="checked"<?php }?>>
                        <label for="addnewmega_on" class="radioCheck">
                            <i class="color_success"></i> <?php echo smartyTranslate(array('s'=>'Yes','mod'=>'tmmegamenu'),$_smarty_tpl);?>

                        </label>
                        <input type="radio" name="addnewmega" id="addnewmega_off" value="0" <?php if (isset($_smarty_tpl->tpl_vars['item']->value)&&$_smarty_tpl->tpl_vars['item']->value) {?><?php if (!$_smarty_tpl->tpl_vars['item']->value['is_mega']) {?>checked="checked"<?php }?><?php } else { ?>checked="checked"<?php }?>>
                        <label for="addnewmega_off" class="radioCheck">
                            <i class="color_danger"></i> <?php echo smartyTranslate(array('s'=>'No','mod'=>'tmmegamenu'),$_smarty_tpl);?>

                        </label>
                        <a class="slide-button btn"></a>
                    </span>
                </div>
            </div>
            <div id="is_simple_menu" class="form-group">
                <label class="col-lg-3 control-label"><?php echo smartyTranslate(array('s'=>'Use simple menu','mod'=>'tmmegamenu'),$_smarty_tpl);?>
</label>
                <div class="col-lg-9">
                    <span class="switch prestashop-switch fixed-width-lg">
                        <input type="radio" name="issimplemenu" id="issimplemenu_on" value="1" <?php if (isset($_smarty_tpl->tpl_vars['item']->value)&&$_smarty_tpl->tpl_vars['item']->value&&$_smarty_tpl->tpl_vars['item']->value['is_simple']) {?>checked="checked"<?php }?>>
                        <label for="issimplemenu_on" class="radioCheck">
                            <i class="color_success"></i> <?php echo smartyTranslate(array('s'=>'Yes','mod'=>'tmmegamenu'),$_smarty_tpl);?>

                        </label>
                        <input type="radio" name="issimplemenu" id="issimplemenu_off" value="0" <?php if (isset($_smarty_tpl->tpl_vars['item']->value)&&$_smarty_tpl->tpl_vars['item']->value) {?><?php if (!$_smarty_tpl->tpl_vars['item']->value['is_simple']) {?>checked="checked"<?php }?><?php } else { ?>checked="checked"<?php }?>>
                        <label for="issimplemenu_off" class="radioCheck">
                            <i class="color_danger"></i> <?php echo smartyTranslate(array('s'=>'No','mod'=>'tmmegamenu'),$_smarty_tpl);?>

                        </label>
                        <a class="slide-button btn"></a>
                    </span>
                </div>
            </div>
            <div class="simple_menu">
            	<div class="form-group">
                    <label class="control-label col-lg-3"> </label>
                    <div class="col-lg-9">
                        <div class="row">
                            <div class="col-lg-4">
                                <h4><?php echo smartyTranslate(array('s'=>'Available items','mod'=>'tmmegamenu'),$_smarty_tpl);?>
</h4>
                                <div class="form-group">
                                	<?php echo $_smarty_tpl->tpl_vars['option_select']->value;?>

                                </div>
                                <button id="addItem" class="btn btn-default"><?php echo smartyTranslate(array('s'=>'Add','mod'=>'tmmegamenu'),$_smarty_tpl);?>
 -></button>
                            </div>
                            <div class="col-lg-1 order-buttons">
                            	<button id="menuOrderUp" class="btn btn-default btn-block"><?php echo smartyTranslate(array('s'=>'Up','mod'=>'tmmegamenu'),$_smarty_tpl);?>
</button>
                                <button id="menuOrderDown" class="btn btn-default btn-block"><?php echo smartyTranslate(array('s'=>'Down','mod'=>'tmmegamenu'),$_smarty_tpl);?>
</button>
                            </div>
                            <div class="col-lg-4">	
                                <h4><?php echo smartyTranslate(array('s'=>'Selected items','mod'=>'tmmegamenu'),$_smarty_tpl);?>
</h4>
                                <div class="form-group">
                                	<?php echo $_smarty_tpl->tpl_vars['option_selected']->value;?>

                                </div>
                                <button id="removeItem" class="btn btn-default"><- <?php echo smartyTranslate(array('s'=>'Remove','mod'=>'tmmegamenu'),$_smarty_tpl);?>
</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mega_menu">
            	<div id="megamenu-content">
                	<?php if (isset($_smarty_tpl->tpl_vars['megamenu']->value)&&$_smarty_tpl->tpl_vars['megamenu']->value) {?><?php echo $_smarty_tpl->tpl_vars['megamenu']->value;?>
<?php }?>
                </div>
            	<a class="btn btn-default" id="add-megamenu-row" href="#" onclick="return false;"><?php echo smartyTranslate(array('s'=>'Add row','mod'=>'tmmegamenu'),$_smarty_tpl);?>
</a>
                <input type="hidden" value="" name="megamenu_options" />
            </div>
            <input type="hidden" name="id_tab" value="<?php if (isset($_smarty_tpl->tpl_vars['item']->value)&&$_smarty_tpl->tpl_vars['item']->value) {?><?php echo $_smarty_tpl->tpl_vars['item']->value['id_item'];?>
<?php }?>" />
            <input type="hidden" name="id_item" value="<?php if (isset($_smarty_tpl->tpl_vars['item']->value)&&$_smarty_tpl->tpl_vars['item']->value) {?><?php echo $_smarty_tpl->tpl_vars['item']->value['id_item'];?>
<?php }?>" />
        </div>
        <div class="panel-footer">
        	<button type="submit" name="updateItem" class="button-new-item-save btn btn-default pull-right" onClick="this.form.submit();"><i class="process-icon-save"></i> <?php echo smartyTranslate(array('s'=>'Save','mod'=>'tmmegamenu'),$_smarty_tpl);?>
</button>
          	<button type="submit" name="updateItemStay" class="button-new-item-save-stay btn btn-default pull-right" onClick="this.form.submit();"><i class="process-icon-save"></i> <?php echo smartyTranslate(array('s'=>'Save & Stay','mod'=>'tmmegamenu'),$_smarty_tpl);?>
</button>
            <a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['url_enable']->value;?>
">
            	<i class="process-icon-cancel"></i>
                <?php echo smartyTranslate(array('s'=>'Cancel','mod'=>'tmmegamenu'),$_smarty_tpl);?>

            </a>
        </div>
    </div>
</form>
<script type="text/javascript">
	hideOtherLanguage(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['default_language']->value['id_lang'], ENT_QUOTES, 'UTF-8', true);?>
);
</script>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'product_add_text')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'product_add_text'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'Indicate the ID number for the product','mod'=>'tmmegamenu'),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'product_add_text'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'product_id')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'product_id'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'Product ID #','mod'=>'tmmegamenu'),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'product_id'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'move_warning')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'move_warning'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'Please select just one item','mod'=>'tmmegamenu'),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'move_warning'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'add_megamenu_column')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'add_megamenu_column'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'Add column','mod'=>'tmmegamenu'),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'add_megamenu_column'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'col_width_label')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'col_width_label'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'Set column width','mod'=>'tmmegamenu'),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'col_width_label'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'col_width_text')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'col_width_text'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'Set column width (2 min -> 12 max)','mod'=>'tmmegamenu'),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'col_width_text'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'col_width_alert_min_text')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'col_width_alert_min_text'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'Column width can not be less than 2','mod'=>'tmmegamenu'),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'col_width_alert_min_text'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'col_width_alert_max_text')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'col_width_alert_max_text'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'Column width can not be  less than 2 and more than 12','mod'=>'tmmegamenu'),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'col_width_alert_max_text'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'col_items_text')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'col_items_text'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'Set content','mod'=>'tmmegamenu'),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'col_items_text'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'col_items_selected_text')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'col_items_selected_text'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'Selected item','mod'=>'tmmegamenu'),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'col_items_selected_text'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'col_class_text')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'col_class_text'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'Enter specific class','mod'=>'tmmegamenu'),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'col_class_text'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'col_content_type_text')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'col_content_type_text'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'Content type','mod'=>'tmmegamenu'),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'col_content_type_text'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'col_html_text')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'col_html_text'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'HTML','mod'=>'tmmegamenu'),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'col_html_text'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'col_links_text')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'col_links_text'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'Links','mod'=>'tmmegamenu'),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'col_links_text'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'add_col_content_text')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'add_col_content_text'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'Add content','mod'=>'tmmegamenu'),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'add_col_content_text'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'error_type_text')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'error_type_text'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'Please select column content type!','mod'=>'tmmegamenu'),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'error_type_text'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'btn_add_text')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'btn_add_text'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'Add','mod'=>'tmmegamenu'),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'btn_add_text'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'btn_remove_text')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'btn_remove_text'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'Remove','mod'=>'tmmegamenu'),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'btn_remove_text'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'btn_remove_column_text')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'btn_remove_column_text'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'Remove block','mod'=>'tmmegamenu'),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'btn_remove_column_text'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'btn_remove_row_text')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'btn_remove_row_text'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'Remove row','mod'=>'tmmegamenu'),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'btn_remove_row_text'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'warning_class_text')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'warning_class_text'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'Can not contain special chars, only _ is allowed.(Will be automatically replaced)','mod'=>'tmmegamenu'),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'warning_class_text'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('option_list'=>$_smarty_tpl->tpl_vars['option_select']->value),$_smarty_tpl);?>
<?php }} ?>
