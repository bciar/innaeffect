<?php /* Smarty version Smarty-3.1.19, created on 2017-03-07 10:16:39
         compiled from "/home1/innaeffe/public_html/modules/onehopsmsservice/views/templates/front/menu_tabs.tpl" */ ?>
<?php /*%%SmartyHeaderCode:31998115258beced70cc203-52943858%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a4933eff9e2c25fe456e8838b4c03a2847f740b3' => 
    array (
      0 => '/home1/innaeffe/public_html/modules/onehopsmsservice/views/templates/front/menu_tabs.tpl',
      1 => 1488899783,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31998115258beced70cc203-52943858',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'SMSMenuLink' => 0,
    'SMSGetTab' => 0,
    'SMSIsAPIKey' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58beced7108711_98894524',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58beced7108711_98894524')) {function content_58beced7108711_98894524($_smarty_tpl) {?>
 
 <a href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['SMSMenuLink']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
&smswelcome=yes" class="anchorbutton <?php if ($_smarty_tpl->tpl_vars['SMSGetTab']->value=='smswelcome') {?> activeSMSmenu <?php }?>">Welcome</a>&nbsp;
<?php if ($_smarty_tpl->tpl_vars['SMSIsAPIKey']->value!='') {?>
    <a href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['SMSMenuLink']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
&configuration=yes" class="anchorbutton <?php if ($_smarty_tpl->tpl_vars['SMSGetTab']->value=='configuration') {?> activeSMSmenu <?php }?>">Configuration</a>&nbsp;
    <a href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['SMSMenuLink']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
&smscampaign=yes" class="anchorbutton <?php if ($_smarty_tpl->tpl_vars['SMSGetTab']->value=='smscampaign') {?> activeSMSmenu <?php }?>">Send SMS</a>&nbsp;
    <a href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['SMSMenuLink']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
&smsrulesets=yes" class="anchorbutton <?php if ($_smarty_tpl->tpl_vars['SMSGetTab']->value=='smsrulesets') {?> activeSMSmenu <?php }?>">SMS Automation</a>&nbsp;
    <a href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['SMSMenuLink']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
&smstemplates=yes" class="anchorbutton <?php if ($_smarty_tpl->tpl_vars['SMSGetTab']->value=='smstemplates') {?> activeSMSmenu <?php }?>">Manage Templates</a><br>
<?php } else { ?>
    <a href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['SMSMenuLink']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
&configuration=yes" class="anchorbutton <?php if ($_smarty_tpl->tpl_vars['SMSGetTab']->value=='configuration') {?> activeSMSmenu <?php }?>">Configuration</a><br>

<?php }?>
<?php }} ?>
