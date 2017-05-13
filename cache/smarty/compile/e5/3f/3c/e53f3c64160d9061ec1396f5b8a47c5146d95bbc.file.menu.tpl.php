<?php /* Smarty version Smarty-3.1.19, created on 2017-03-05 11:06:46
         compiled from "/home1/innaeffe/public_html/modules/tmmegamenu/views/templates/hook/menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:34203498458bc3796de6e39-33750352%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e53f3c64160d9061ec1396f5b8a47c5146d95bbc' => 
    array (
      0 => '/home1/innaeffe/public_html/modules/tmmegamenu/views/templates/hook/menu.tpl',
      1 => 1450858586,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '34203498458bc3796de6e39-33750352',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MENU' => 0,
    'hook' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58bc3796e3b842_20332243',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58bc3796e3b842_20332243')) {function content_58bc3796e3b842_20332243($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['MENU']->value)&&$_smarty_tpl->tpl_vars['MENU']->value!='') {?> 
    <?php if ($_smarty_tpl->tpl_vars['hook']->value=='left_column'||$_smarty_tpl->tpl_vars['hook']->value=='right_column') {?>
        <section class="<?php echo $_smarty_tpl->tpl_vars['hook']->value;?>
_menu block">
            <h4 class="title_block"><?php echo smartyTranslate(array('s'=>'Menu','mod'=>'tmmegamenu'),$_smarty_tpl);?>
</h4>
            <div class="block_content">
    <?php } else { ?>
        <div class="<?php echo $_smarty_tpl->tpl_vars['hook']->value;?>
_menu">
            <div class="menu-title"><?php echo smartyTranslate(array('s'=>'Menu','mod'=>'tmmegamenu'),$_smarty_tpl);?>
</div>
    <?php }?>
        <?php echo $_smarty_tpl->tpl_vars['MENU']->value;?>

    
    <?php if ($_smarty_tpl->tpl_vars['hook']->value=='left_column'||$_smarty_tpl->tpl_vars['hook']->value=='right_column') {?>
            </div>
        </section>
    <?php } else { ?>
        </div>
    <?php }?>
<?php }?><?php }} ?>
