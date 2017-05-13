<?php /* Smarty version Smarty-3.1.19, created on 2017-03-09 22:28:49
         compiled from "/home1/innaeffe/public_html/modules/producttooltip/views/templates/hook/producttooltip.tpl" */ ?>
<?php /*%%SmartyHeaderCode:156513905058bc610d717176-48164464%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e76d92e882b4647bc9b537636b80ff76dfcb70ac' => 
    array (
      0 => '/home1/innaeffe/public_html/modules/producttooltip/views/templates/hook/producttooltip.tpl',
      1 => 1489115493,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '156513905058bc610d717176-48164464',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58bc610d879e63_51793615',
  'variables' => 
  array (
    'nb_people' => 0,
    'date_last_order' => 0,
    'date_last_cart' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58bc610d879e63_51793615')) {function content_58bc610d879e63_51793615($_smarty_tpl) {?>
<script type="text/javascript">
    $(document).ready(function () {
        <?php if (isset($_smarty_tpl->tpl_vars['nb_people']->value)) {?>
        $.growl({title: '', message: '<?php if ($_smarty_tpl->tpl_vars['nb_people']->value==1) {?><?php echo smartyTranslate(array('s'=>'%d person is currently watching this product.','sprintf'=>$_smarty_tpl->tpl_vars['nb_people']->value,'mod'=>'producttooltip','js'=>1),$_smarty_tpl);?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'%d people are currently watching this product.','sprintf'=>$_smarty_tpl->tpl_vars['nb_people']->value,'mod'=>'producttooltip','js'=>1),$_smarty_tpl);?>
<?php }?>'});
        <?php }?>

        <?php if (isset($_smarty_tpl->tpl_vars['date_last_order']->value)) {?>
        $.growl({title: '', message: '<?php echo smartyTranslate(array('s'=>'Last time this product was bought: ','mod'=>'producttooltip','js'=>1),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0][0]->dateFormat(array('date'=>$_smarty_tpl->tpl_vars['date_last_order']->value,'full'=>1),$_smarty_tpl);?>
'});
        <?php }?>

        <?php if (isset($_smarty_tpl->tpl_vars['date_last_cart']->value)) {?>
        $.growl({title: '', message: '<?php echo smartyTranslate(array('s'=>'Last time this product was added to a cart: ','mod'=>'producttooltip','js'=>1),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0][0]->dateFormat(array('date'=>$_smarty_tpl->tpl_vars['date_last_cart']->value,'full'=>1),$_smarty_tpl);?>
'});
        <?php }?>

        });
</script>
<?php }} ?>
