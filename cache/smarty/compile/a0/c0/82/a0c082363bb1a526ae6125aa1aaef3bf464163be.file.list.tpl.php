<?php /* Smarty version Smarty-3.1.19, created on 2017-03-07 20:43:53
         compiled from "/home1/innaeffe/public_html/modules/tmmegamenu/views/templates/admin/list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6076438058bf61d9dcf6d7-64628858%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a0c082363bb1a526ae6125aa1aaef3bf464163be' => 
    array (
      0 => '/home1/innaeffe/public_html/modules/tmmegamenu/views/templates/admin/list.tpl',
      1 => 1450858586,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6076438058bf61d9dcf6d7-64628858',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url_enable' => 0,
    'tabs' => 0,
    'tab' => 0,
    'html_items' => 0,
    'item' => 0,
    'links' => 0,
    'banners' => 0,
    'image_baseurl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58bf61da0b6b78_36690490',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58bf61da0b6b78_36690490')) {function content_58bf61da0b6b78_36690490($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/home1/innaeffe/public_html/tools/smarty/plugins/modifier.escape.php';
?><div class="panel tmmegamenu">
    <h3>
        <?php echo smartyTranslate(array('s'=>'Tabs list','mod'=>'tmmegamenu'),$_smarty_tpl);?>

        <span class="panel-heading-action">
        <a id="desc-product-new" class="list-toolbar-btn" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['url_enable']->value, ENT_QUOTES, 'UTF-8', true);?>
&addItem">
            <span class="label-tooltip" data-placement="top" data-html="true" data-original-title="Add new" data-toggle="tooltip" title="">
                <i class="process-icon-new"></i>
            </span>
        </a>
    </span>
    </h3>
    <?php if (isset($_smarty_tpl->tpl_vars['tabs']->value)&&$_smarty_tpl->tpl_vars['tabs']->value) {?>
        <div class="table-responsive-row clearfix">
            <table class="table">
                <thead>
                    <tr>
                        <th><?php echo smartyTranslate(array('s'=>'Tab id','mod'=>'tmmegamenu'),$_smarty_tpl);?>
</th>
                        <th><?php echo smartyTranslate(array('s'=>'Tab name','mod'=>'tmmegamenu'),$_smarty_tpl);?>
</th>
                        <th><?php echo smartyTranslate(array('s'=>'Tab code','mod'=>'tmmegamenu'),$_smarty_tpl);?>
</th>
                        <th><?php echo smartyTranslate(array('s'=>'Sort order','mod'=>'tmmegamenu'),$_smarty_tpl);?>
</th>
                        <th><?php echo smartyTranslate(array('s'=>'Specific class','mod'=>'tmmegamenu'),$_smarty_tpl);?>
</th>
                        <th><?php echo smartyTranslate(array('s'=>'Badge','mod'=>'tmmegamenu'),$_smarty_tpl);?>
</th>
                        <th><?php echo smartyTranslate(array('s'=>'Type','mod'=>'tmmegamenu'),$_smarty_tpl);?>
</th>
                        <th><?php echo smartyTranslate(array('s'=>'Status','mod'=>'tmmegamenu'),$_smarty_tpl);?>
</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php  $_smarty_tpl->tpl_vars['tab'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tab']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tabs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['tab']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['tab']->key => $_smarty_tpl->tpl_vars['tab']->value) {
$_smarty_tpl->tpl_vars['tab']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['tab']['iteration']++;
?>
                        <tr <?php if (!($_smarty_tpl->getVariable('smarty')->value['foreach']['tab']['iteration'] % 2)) {?>class = "odd"<?php }?>>
                            <td><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['tab']->value['id_item'], 'intval');?>
</td>
                            <td><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['tab']->value['title'], 'intval');?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['tab']->value['url'];?>
</td>
                            <td><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['tab']->value['sort_order'], 'intval');?>
</td>
                            <td><?php if ($_smarty_tpl->tpl_vars['tab']->value['specific_class']) {?><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['tab']->value['specific_class'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php } else { ?>-<?php }?></td>
                            <td><?php if ($_smarty_tpl->tpl_vars['tab']->value['badge']) {?><?php echo $_smarty_tpl->tpl_vars['tab']->value['badge'];?>
<?php } else { ?>-<?php }?></td>
                            <td><?php if ($_smarty_tpl->tpl_vars['tab']->value['is_mega']) {?><?php echo smartyTranslate(array('s'=>'Is mega','mod'=>'tmmegamenu'),$_smarty_tpl);?>
<?php } elseif ($_smarty_tpl->tpl_vars['tab']->value['is_simple']) {?><?php echo smartyTranslate(array('s'=>'Is simple','mod'=>'tmmegamenu'),$_smarty_tpl);?>
<?php } else { ?>-<?php }?></td>
                            <td>
                                <a class="list-action-enable<?php if ($_smarty_tpl->tpl_vars['tab']->value['active']) {?> action-enabled<?php } else { ?> action-disabled<?php }?>" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['url_enable']->value, ENT_QUOTES, 'UTF-8', true);?>
&updateItemStatus&id_item=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['tab']->value['id_item'], 'intval');?>
&itemstatus=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['tab']->value['active'], 'intval');?>
" title="<?php if ($_smarty_tpl->tpl_vars['tab']->value['active']) {?><?php echo smartyTranslate(array('s'=>'Enabled','mod'=>'tmmegamenu'),$_smarty_tpl);?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'Disabled','mod'=>'tmmegamenu'),$_smarty_tpl);?>
<?php }?>">
                                    <i class="icon-check<?php if (!$_smarty_tpl->tpl_vars['tab']->value['active']) {?> hidden<?php }?>"></i>
                                    <i class="icon-remove<?php if ($_smarty_tpl->tpl_vars['tab']->value['active']) {?> hidden<?php }?>"></i>
                                </a>
                            </td>
                            <td>
                                <div class="btn-group-action">
                                    <div class="btn-group pull-right">
                                        <a class="edit btn btn-default" title="<?php echo smartyTranslate(array('s'=>'Edit','mod'=>'tmmegamenu'),$_smarty_tpl);?>
" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['url_enable']->value, ENT_QUOTES, 'UTF-8', true);?>
&editItem&id_item=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['tab']->value['id_item'], 'intval');?>
"><i class="icon-pencil"></i> <?php echo smartyTranslate(array('s'=>'Edit','mod'=>'tmmegamenu'),$_smarty_tpl);?>
</a>
                                    <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                        <i class="icon-caret-down"></i>&nbsp;
                                    </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="delete" title="<?php echo smartyTranslate(array('s'=>'Delete','mod'=>'tmmegamenu'),$_smarty_tpl);?>
" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['url_enable']->value, ENT_QUOTES, 'UTF-8', true);?>
&deleteItem&id_item=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['tab']->value['id_item'], 'intval');?>
"><i class="icon-trash"></i> <?php echo smartyTranslate(array('s'=>'Delete','mod'=>'tmmegamenu'),$_smarty_tpl);?>
</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    <?php } else { ?>
    	<?php echo smartyTranslate(array('s'=>'There is no item yet.','mod'=>'tmmegamenu'),$_smarty_tpl);?>

    <?php }?>
</div>
<div class="panel tmmegamenu-html">
	<h3>
        <?php echo smartyTranslate(array('s'=>'HTML list','mod'=>'tmmegamenu'),$_smarty_tpl);?>

        <span class="panel-heading-action">
        <a id="desc-product-new" class="list-toolbar-btn" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['url_enable']->value, ENT_QUOTES, 'UTF-8', true);?>
&addHtml">
            <span class="label-tooltip" data-placement="top" data-html="true" data-original-title="Add new" data-toggle="tooltip" title="">
                <i class="process-icon-new"></i>
            </span>
        </a>
    </span>
    </h3>
	<?php if (isset($_smarty_tpl->tpl_vars['html_items']->value)&&$_smarty_tpl->tpl_vars['html_items']->value) {?>
        <div class="table-responsive-row clearfix">
            <table class="table">
                <thead>
                    <tr>
                        <th><?php echo smartyTranslate(array('s'=>'HTML id','mod'=>'tmmegamenu'),$_smarty_tpl);?>
</th>
                        <th><?php echo smartyTranslate(array('s'=>'HTML name','mod'=>'tmmegamenu'),$_smarty_tpl);?>
</th>
                        <th><?php echo smartyTranslate(array('s'=>'Specific class','mod'=>'tmmegamenu'),$_smarty_tpl);?>
</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['html_items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['html']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['html']['iteration']++;
?>
                        <tr <?php if (!($_smarty_tpl->getVariable('smarty')->value['foreach']['html']['iteration'] % 2)) {?>class = "odd"<?php }?>>
                            <td><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['item']->value['id_item'], 'intval');?>
</td>
                            <td><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['item']->value['title'], 'intval');?>
</td>
                            <td><?php if ($_smarty_tpl->tpl_vars['item']->value['specific_class']) {?><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['specific_class'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php } else { ?>-<?php }?></td>
                            <td>
                                <div class="btn-group-action">
                                    <div class="btn-group pull-right">
                                        <a class="edit btn btn-default" title="<?php echo smartyTranslate(array('s'=>'Edit','mod'=>'tmmegamenu'),$_smarty_tpl);?>
" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['url_enable']->value, ENT_QUOTES, 'UTF-8', true);?>
&editHtml&id_item=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['item']->value['id_item'], 'intval');?>
"><i class="icon-pencil"></i> <?php echo smartyTranslate(array('s'=>'Edit','mod'=>'tmmegamenu'),$_smarty_tpl);?>
</a>
                                    <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                        <i class="icon-caret-down"></i>&nbsp;
                                    </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="delete" title="<?php echo smartyTranslate(array('s'=>'Delete','mod'=>'tmmegamenu'),$_smarty_tpl);?>
" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['url_enable']->value, ENT_QUOTES, 'UTF-8', true);?>
&deleteHtml&id_item=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['item']->value['id_item'], 'intval');?>
"><i class="icon-trash"></i> <?php echo smartyTranslate(array('s'=>'Delete','mod'=>'tmmegamenu'),$_smarty_tpl);?>
</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    <?php } else { ?>
    	<?php echo smartyTranslate(array('s'=>'There is no item yet.','mod'=>'tmmegamenu'),$_smarty_tpl);?>

    <?php }?>
</div>
<div class="panel tmmegamenu-link">
	<h3>
        <?php echo smartyTranslate(array('s'=>'Links list','mod'=>'tmmegamenu'),$_smarty_tpl);?>

        <span class="panel-heading-action">
        <a id="desc-product-new" class="list-toolbar-btn" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['url_enable']->value, ENT_QUOTES, 'UTF-8', true);?>
&addLink">
            <span class="label-tooltip" data-placement="top" data-html="true" data-original-title="Add new" data-toggle="tooltip" title="">
                <i class="process-icon-new"></i>
            </span>
        </a>
    </span>
    </h3>
	<?php if (isset($_smarty_tpl->tpl_vars['links']->value)&&$_smarty_tpl->tpl_vars['links']->value) {?>
        <div class="table-responsive-row clearfix">
            <table class="table">
                <thead>
                    <tr>
                        <th><?php echo smartyTranslate(array('s'=>'Link id','mod'=>'tmmegamenu'),$_smarty_tpl);?>
</th>
                        <th><?php echo smartyTranslate(array('s'=>'Link name','mod'=>'tmmegamenu'),$_smarty_tpl);?>
</th>
                        <th><?php echo smartyTranslate(array('s'=>'Specific class','mod'=>'tmmegamenu'),$_smarty_tpl);?>
</th>
                        <th><?php echo smartyTranslate(array('s'=>'URL','mod'=>'tmmegamenu'),$_smarty_tpl);?>
</th>
                        <th><?php echo smartyTranslate(array('s'=>'Target blank','mod'=>'tmmegamenu'),$_smarty_tpl);?>
</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['links']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['link']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['link']['iteration']++;
?>
                        <tr <?php if (!($_smarty_tpl->getVariable('smarty')->value['foreach']['link']['iteration'] % 2)) {?>class = "odd"<?php }?>>
                            <td><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['item']->value['id_item'], 'intval');?>
</td>
                            <td><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['item']->value['title'], 'intval');?>
</td>
                            <td><?php if ($_smarty_tpl->tpl_vars['item']->value['specific_class']) {?><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['specific_class'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php } else { ?>-<?php }?></td>
                            <td><a href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['url'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['url'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</a></td>
                            <td><?php if ($_smarty_tpl->tpl_vars['item']->value['blank']) {?>true<?php } else { ?>false<?php }?></td>
                            <td>
                                <div class="btn-group-action">
                                    <div class="btn-group pull-right">
                                        <a class="edit btn btn-default" title="<?php echo smartyTranslate(array('s'=>'Edit','mod'=>'tmmegamenu'),$_smarty_tpl);?>
" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['url_enable']->value, ENT_QUOTES, 'UTF-8', true);?>
&editLink&id_item=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['item']->value['id_item'], 'intval');?>
"><i class="icon-pencil"></i> <?php echo smartyTranslate(array('s'=>'Edit','mod'=>'tmmegamenu'),$_smarty_tpl);?>
</a>
                                    <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                        <i class="icon-caret-down"></i>&nbsp;
                                    </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="delete" title="<?php echo smartyTranslate(array('s'=>'Delete','mod'=>'tmmegamenu'),$_smarty_tpl);?>
" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['url_enable']->value, ENT_QUOTES, 'UTF-8', true);?>
&deleteLink&id_item=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['item']->value['id_item'], 'intval');?>
"><i class="icon-trash"></i> <?php echo smartyTranslate(array('s'=>'Delete','mod'=>'tmmegamenu'),$_smarty_tpl);?>
</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    <?php } else { ?>
    	<?php echo smartyTranslate(array('s'=>'There is no item yet.','mod'=>'tmmegamenu'),$_smarty_tpl);?>

    <?php }?>
</div>
<div class="panel tmmegamenu-link">
	<h3>
        <?php echo smartyTranslate(array('s'=>'Banners list','mod'=>'tmmegamenu'),$_smarty_tpl);?>

        <span class="panel-heading-action">
        <a id="desc-product-new" class="list-toolbar-btn" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['url_enable']->value, ENT_QUOTES, 'UTF-8', true);?>
&addBanner">
            <span class="label-tooltip" data-placement="top" data-html="true" data-original-title="Add new" data-toggle="tooltip" title="">
                <i class="process-icon-new"></i>
            </span>
        </a>
    </span>
    </h3>
	<?php if (isset($_smarty_tpl->tpl_vars['banners']->value)&&$_smarty_tpl->tpl_vars['banners']->value) {?>
        <div class="table-responsive-row clearfix">
            <table class="table">
                <thead>
                    <tr>
                        <th><?php echo smartyTranslate(array('s'=>'Banner id','mod'=>'tmmegamenu'),$_smarty_tpl);?>
</th>
                        <th><?php echo smartyTranslate(array('s'=>'Banner name','mod'=>'tmmegamenu'),$_smarty_tpl);?>
</th>
                        <th><?php echo smartyTranslate(array('s'=>'Image','mod'=>'tmmegamenu'),$_smarty_tpl);?>
</th>
                        <th><?php echo smartyTranslate(array('s'=>'Specific class','mod'=>'tmmegamenu'),$_smarty_tpl);?>
</th>
                        <th><?php echo smartyTranslate(array('s'=>'URL','mod'=>'tmmegamenu'),$_smarty_tpl);?>
</th>
                        <th><?php echo smartyTranslate(array('s'=>'Target blank','mod'=>'tmmegamenu'),$_smarty_tpl);?>
</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['banners']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['link']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['link']['iteration']++;
?>
                        <tr <?php if (!($_smarty_tpl->getVariable('smarty')->value['foreach']['link']['iteration'] % 2)) {?>class = "odd"<?php }?>>
                            <td><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['item']->value['id_item'], 'intval');?>
</td>
                            <td><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['item']->value['title'], 'intval');?>
</td>
                            <td><img class="banner-thumbnail" src="<?php echo $_smarty_tpl->tpl_vars['image_baseurl']->value;?>
<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['image'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" alt="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['item']->value['title'], 'intval');?>
" /></td>
                            <td><?php if ($_smarty_tpl->tpl_vars['item']->value['specific_class']) {?><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['specific_class'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php } else { ?>-<?php }?></td>
                            <td><a href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['url'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['url'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</a></td>
                            <td><?php if ($_smarty_tpl->tpl_vars['item']->value['blank']) {?>true<?php } else { ?>false<?php }?></td>
                            <td>
                                <div class="btn-group-action">
                                    <div class="btn-group pull-right">
                                        <a class="edit btn btn-default" title="<?php echo smartyTranslate(array('s'=>'Edit','mod'=>'tmmegamenu'),$_smarty_tpl);?>
" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['url_enable']->value, ENT_QUOTES, 'UTF-8', true);?>
&editBanner&id_item=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['item']->value['id_item'], 'intval');?>
"><i class="icon-pencil"></i> <?php echo smartyTranslate(array('s'=>'Edit','mod'=>'tmmegamenu'),$_smarty_tpl);?>
</a>
                                    <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                        <i class="icon-caret-down"></i>&nbsp;
                                    </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="delete" title="<?php echo smartyTranslate(array('s'=>'Delete','mod'=>'tmmegamenu'),$_smarty_tpl);?>
" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['url_enable']->value, ENT_QUOTES, 'UTF-8', true);?>
&deleteBanner&id_item=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['item']->value['id_item'], 'intval');?>
"><i class="icon-trash"></i> <?php echo smartyTranslate(array('s'=>'Delete','mod'=>'tmmegamenu'),$_smarty_tpl);?>
</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    <?php } else { ?>
    	<?php echo smartyTranslate(array('s'=>'There is no item yet.','mod'=>'tmmegamenu'),$_smarty_tpl);?>

    <?php }?>
</div><?php }} ?>
