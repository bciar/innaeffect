<?php /* Smarty version Smarty-3.1.19, created on 2017-03-11 03:01:46
         compiled from "/home1/innaeffe/public_html/modules/olark/views/templates/front/configuration.tpl" */ ?>
<?php /*%%SmartyHeaderCode:56657650958c3aeeab45908-32928002%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7cab660a0cee2eec206e9bdf854c78694215c6f1' => 
    array (
      0 => '/home1/innaeffe/public_html/modules/olark/views/templates/front/configuration.tpl',
      1 => 1451345046,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '56657650958c3aeeab45908-32928002',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_dir' => 0,
    'tracking' => 0,
    'form' => 0,
    'siteId' => 0,
    'welcomingTitle' => 0,
    'chattingTitle' => 0,
    'unavailableTitle' => 0,
    'busyTitle' => 0,
    'awayMessage' => 0,
    'loadingTitle' => 0,
    'welcomeMessage' => 0,
    'busyMessage' => 0,
    'chatInputText' => 0,
    'nameInputText' => 0,
    'emailInputText' => 0,
    'offlineNoteMessage' => 0,
    'sendButtonText' => 0,
    'offlineNoteSendingText' => 0,
    'operatorIsTypingText' => 0,
    'operatorStopTypingText' => 0,
    'introductionErrorText' => 0,
    'introductionSubmitButtonText' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58c3aeeadadbd9_13393149',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58c3aeeadadbd9_13393149')) {function content_58c3aeeadadbd9_13393149($_smarty_tpl) {?>
<link href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['module_dir']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
css/olark.css" rel="stylesheet" type="text/css">
<script type="text/javascript">
	/* Fancybox */
	
	$('a.olark-video-btn').live('click', function(){
	    $.fancybox({
	        'type' : 'iframe',
	        'href' : 'https://fast.wistia.com/embed/iframe/79c2daad08?',
	        'swf': {'allowfullscreen':'true', 'wmode':'transparent'},
	        'overlayShow' : true,
	        'centerOnScroll' : true,
	        'speedIn' : 100,
	        'speedOut' : 50,
	        'width' : 768,
	        'height' : 480
	    });
	    return false;
	});
	
</script>
<img src="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['tracking']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" alt="tracking" style="display: none" />
<div class="olark-wrap">
	<p class="olark-intro"><a href="https://www.olark.com/special/prestashop?rid=prestashop&utm_source=prestashop&utm_medium=partner&utm_campaign=cart" class="olark-logo" target="_blank"><img src="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['module_dir']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
img/olark_logo.png" alt="Olark" border="0" /></a><span><?php echo smartyTranslate(array('s'=>'Chat with your Customers','mod'=>'olark'),$_smarty_tpl);?>
</span><br />
	<?php echo smartyTranslate(array('s'=>'Create trust, loyalty &amp; happiness','mod'=>'olark'),$_smarty_tpl);?>
<br />
	<a href="https://www.olark.com/special/prestashop?rid=prestashop&utm_source=prestashop&utm_medium=partner&utm_campaign=cart" class="olark-link" target="_blank"><?php echo smartyTranslate(array('s'=>'Get Started Now','mod'=>'olark'),$_smarty_tpl);?>
</a></p>
	<div class="olark-content">
		<h3><?php echo smartyTranslate(array('s'=>'Get to know your shoppers, create relationships with customers and increase sales.','mod'=>'olark'),$_smarty_tpl);?>
</h3>
		<div class="olark-video">
			<a href="https://fast.wistia.com/embed/iframe/79c2daad08?" class="olark-video-btn"><img src="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['module_dir']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
img/olark-video-screen.png" alt="Olark Video" /><img src="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['module_dir']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
img/btn-video.png" alt="" class="video-icon" /></a>
			<p><?php echo smartyTranslate(array('s'=>'Watch how Olark works...','mod'=>'olark'),$_smarty_tpl);?>
</p>
		</div>
		<ul>
			<li><img src="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['module_dir']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
img/olark-chat.png" alt="" /> <?php echo smartyTranslate(array('s'=>'Chat using your IM client','mod'=>'olark'),$_smarty_tpl);?>
</li>
			<li class="alt"><img src="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['module_dir']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
img/olark-heart.png" alt="" /> <?php echo smartyTranslate(array('s'=>'Satisfying User Experience','mod'=>'olark'),$_smarty_tpl);?>
</li>
			<li><img src="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['module_dir']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
img/olark-team.png" alt="" /> <?php echo smartyTranslate(array('s'=>'Work together as a team','mod'=>'olark'),$_smarty_tpl);?>
</li>
			<li class="alt"><img src="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['module_dir']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
img/olark-stats.png" alt="" /> <?php echo smartyTranslate(array('s'=>'Detailed Reporting &amp; Stats','mod'=>'olark'),$_smarty_tpl);?>
</li>
			<li><img src="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['module_dir']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
img/olark-crm.png" alt="" /> <?php echo smartyTranslate(array('s'=>'CRM &amp; Helpdesk Integration','mod'=>'olark'),$_smarty_tpl);?>
</li>
			<li class="alt"><img src="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['module_dir']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
img/olark-code.png" alt="" /> <?php echo smartyTranslate(array('s'=>'Powerful API','mod'=>'olark'),$_smarty_tpl);?>
</li>
		</ul>
		<p><?php echo smartyTranslate(array('s'=>'Talk to your customers today!','mod'=>'olark'),$_smarty_tpl);?>
 <a href="https://www.olark.com/special/prestashop?rid=prestashop&utm_source=prestashop&utm_medium=partner&utm_campaign=cart" class="olark-link" target="_blank"><?php echo smartyTranslate(array('s'=>'Create an Account','mod'=>'olark'),$_smarty_tpl);?>
</a></p>
	</div>

	<form action="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['form']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" method="post">
		<fieldset>
			<legend><img src="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['module_dir']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
img/icon-config.gif" alt="" /><?php echo smartyTranslate(array('s'=>'Configuration','mod'=>'olark'),$_smarty_tpl);?>
</legend>
			<p><?php echo smartyTranslate(array('s'=>'Use the Site-ID provided to you by Olark to configure the module','mod'=>'olark'),$_smarty_tpl);?>
</p><br/>
			<label for="olarkSiteId"><?php echo smartyTranslate(array('s'=>'Site Id','mod'=>'olark'),$_smarty_tpl);?>
</label>
			<div class="margin-form">
				<input type="text" name="olarkSiteId" id="olarkSiteId" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['siteId']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" /> <sup>*</sup>
			</div>
			<div class="margin-form">
				<input type="submit" class="button" name="submitOlark" value="<?php echo smartyTranslate(array('s'=>'Save','mod'=>'olark'),$_smarty_tpl);?>
" />
			</div>
		</fieldset><br />
		<br />
		<fieldset>
			<legend><img src="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['module_dir']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
img/icon-config.gif" alt="" /><?php echo smartyTranslate(array('s'=>'Additional Configuration (optional)','mod'=>'olark'),$_smarty_tpl);?>
</legend>
			<p><?php echo smartyTranslate(array('s'=>'Feel free to customize the default text below','mod'=>'olark'),$_smarty_tpl);?>
</p><br/>
			<label for="olarkWelcomingTitle"><?php echo smartyTranslate(array('s'=>'Welcoming Title','mod'=>'olark'),$_smarty_tpl);?>
</label>
			<div class="margin-form">
				<input type="text" name="olarkWelcomingTitle" id="olarkWelcomingTitle" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['welcomingTitle']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" />&nbsp;&nbsp;<?php echo smartyTranslate(array('s'=>'Example: "Click to Chat"','mod'=>'olark'),$_smarty_tpl);?>

			</div>
			<label for="olarkChattingTitle"><?php echo smartyTranslate(array('s'=>'Chatting Title','mod'=>'olark'),$_smarty_tpl);?>
</label>
			<div class="margin-form">
				<input type="text" name="olarkChattingTitle" id="olarkChattingTitle" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['chattingTitle']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" />&nbsp;&nbsp;<?php echo smartyTranslate(array('s'=>'Example: "Live Help: Now Chatting"','mod'=>'olark'),$_smarty_tpl);?>

			</div>
			<label for="olarkUnavailableTitle"><?php echo smartyTranslate(array('s'=>'Unavailable Title','mod'=>'olark'),$_smarty_tpl);?>
</label>
			<div class="margin-form">
				<input type="text" name="olarkUnavailableTitle" id="olarkUnavailableTitle" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['unavailableTitle']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" />&nbsp;&nbsp;<?php echo smartyTranslate(array('s'=>'Example: "Live Help: Offline"','mod'=>'olark'),$_smarty_tpl);?>

			</div>
			<label for="olarkBusyTitle"><?php echo smartyTranslate(array('s'=>'Busy Title','mod'=>'olark'),$_smarty_tpl);?>
</label>
			<div class="margin-form">
				<input type="text" name="olarkBusyTitle" id="olarkBusyTitle" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['busyTitle']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" />&nbsp;&nbsp;<?php echo smartyTranslate(array('s'=>'Example: "Live Help: Busy"','mod'=>'olark'),$_smarty_tpl);?>

			</div>
			<label for="olarkAwayMessage"><?php echo smartyTranslate(array('s'=>'Away Message','mod'=>'olark'),$_smarty_tpl);?>
</label>
			<div class="margin-form">
				<input type="text" name="olarkAwayMessage" id="olarkAwayMessage" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['awayMessage']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" />&nbsp;&nbsp;<?php echo smartyTranslate(array('s'=>'Example: "Our live support feature is currently offline, please try again later."','mod'=>'olark'),$_smarty_tpl);?>

			</div>
			<label for="olarkBusyTitle"><?php echo smartyTranslate(array('s'=>'Loading Title','mod'=>'olark'),$_smarty_tpl);?>
</label>
			<div class="margin-form">
				<input type="text" name="olarkLoadingTitle" id="olarkLoadingTitle" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['loadingTitle']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" />&nbsp;&nbsp;<?php echo smartyTranslate(array('s'=>'Example: "Loading Olark..."','mod'=>'olark'),$_smarty_tpl);?>

			</div>
			<label for="olarkWelcomeMessage"><?php echo smartyTranslate(array('s'=>'Welcome Message','mod'=>'olark'),$_smarty_tpl);?>
</label>
			<div class="margin-form">
				<input type="text" name="olarkWelcomeMessage" id="olarkWelcomeMessage" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['welcomeMessage']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" />&nbsp;&nbsp;<?php echo smartyTranslate(array('s'=>'Example: "Welcome to my website.  You can use this chat window to chat with me."','mod'=>'olark'),$_smarty_tpl);?>

			</div>
			<label for="olarkBusyMessage"><?php echo smartyTranslate(array('s'=>'Busy Message','mod'=>'olark'),$_smarty_tpl);?>
</label>
			<div class="margin-form">
				<input type="text" name="olarkBusyMessage" id="olarkBusyMessage" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['busyMessage']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" />&nbsp;&nbsp;<?php echo smartyTranslate(array('s'=>'Example: "All of our representatives are with other customers at this time. We will be with you shortly."','mod'=>'olark'),$_smarty_tpl);?>

			</div>
			<label for="olarkChatInputText"><?php echo smartyTranslate(array('s'=>'Chat Input Text','mod'=>'olark'),$_smarty_tpl);?>
</label>
			<div class="margin-form">
				<input type="text" name="olarkChatInputText" id="olarkChatInputText" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['chatInputText']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" />&nbsp;&nbsp;<?php echo smartyTranslate(array('s'=>'Example: "Type here and hit to chat"','mod'=>'olark'),$_smarty_tpl);?>

			</div>
			<label for="olarkNameInputText"><?php echo smartyTranslate(array('s'=>'Name Input Text','mod'=>'olark'),$_smarty_tpl);?>
</label>
			<div class="margin-form">
				<input type="text" name="olarkNameInputText" id="olarkNameInputText" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['nameInputText']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" />&nbsp;&nbsp;<?php echo smartyTranslate(array('s'=>'Example: " and type your name"','mod'=>'olark'),$_smarty_tpl);?>

			</div>
			<label for="olarkEmailInputText"><?php echo smartyTranslate(array('s'=>'Email Input Text','mod'=>'olark'),$_smarty_tpl);?>
</label>
			<div class="margin-form">
				<input type="text" name="olarkEmailInputText" id="olarkEmailInputText" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['emailInputText']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" />&nbsp;&nbsp;<?php echo smartyTranslate(array('s'=>'Example: " and type your email"','mod'=>'olark'),$_smarty_tpl);?>

			</div>
			<label for="olarkOfflineNoteMessage"><?php echo smartyTranslate(array('s'=>'Offline Note Message','mod'=>'olark'),$_smarty_tpl);?>
</label>
			<div class="margin-form">
				<input type="text" name="olarkOfflineNoteMessage" id="olarkOfflineNoteMessage" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['offlineNoteMessage']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" />&nbsp;&nbsp;<?php echo smartyTranslate(array('s'=>'Example: "We are offline, send us a message"','mod'=>'olark'),$_smarty_tpl);?>

			</div>
			<label for="olarkSendButtonText"><?php echo smartyTranslate(array('s'=>'Send Button Text','mod'=>'olark'),$_smarty_tpl);?>
</label>
			<div class="margin-form">
				<input type="text" name="olarkSendButtonText" id="olarkSendButtonText" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['sendButtonText']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" />&nbsp;&nbsp;<?php echo smartyTranslate(array('s'=>'Example: "Send"','mod'=>'olark'),$_smarty_tpl);?>

			</div>
			<label for="olarkOfflineNoteSendingText"><?php echo smartyTranslate(array('s'=>'Offline Note Sending Text','mod'=>'olark'),$_smarty_tpl);?>
</label>
			<div class="margin-form">
				<input type="text" name="olarkOfflineNoteSendingText" id="olarkOfflineNoteSendingText" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['offlineNoteSendingText']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" />&nbsp;&nbsp;<?php echo smartyTranslate(array('s'=>'Example: "Sending..."','mod'=>'olark'),$_smarty_tpl);?>

			</div>
			<label for="olarkOperatorIsTypingText"><?php echo smartyTranslate(array('s'=>'Is Typing Text','mod'=>'olark'),$_smarty_tpl);?>
</label>
			<div class="margin-form">
				<input type="text" name="olarkOperatorIsTypingText" id="olarkOperatorIsTypingText" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['operatorIsTypingText']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" />&nbsp;&nbsp;<?php echo smartyTranslate(array('s'=>'Example: "is typing..."','mod'=>'olark'),$_smarty_tpl);?>

			</div>
			<label for="olarkOperatorHasStoppedTypingText"><?php echo smartyTranslate(array('s'=>'Has Stopped Typing Text','mod'=>'olark'),$_smarty_tpl);?>
</label>
			<div class="margin-form">
				<input type="text" name="olarkOperatorHasStoppedTypingText" id="olarkOperatorHasStoppedTypingText" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['operatorStopTypingText']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" />&nbsp;&nbsp;<?php echo smartyTranslate(array('s'=>'Example: "has stopped typing"','mod'=>'olark'),$_smarty_tpl);?>

			</div>
			<label for="olarkIntroductionErrorText"><?php echo smartyTranslate(array('s'=>'Introduction Error Text','mod'=>'olark'),$_smarty_tpl);?>
</label>
			<div class="margin-form">
				<input type="text" name="olarkIntroductionErrorText" id="olarkIntroductionErrorText" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['introductionErrorText']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" />&nbsp;&nbsp;<?php echo smartyTranslate(array('s'=>'Example: "Please provide your name and email address so we can contact you in case we get disconnected"','mod'=>'olark'),$_smarty_tpl);?>

			</div>
			<label for="olarkIntroductionSubmitButtonText"><?php echo smartyTranslate(array('s'=>'Introduction Submit Button Text','mod'=>'olark'),$_smarty_tpl);?>
</label>
			<div class="margin-form">
				<input type="text" name="olarkIntroductionSubmitButtonText" id="olarkIntroductionSubmitButtonText" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['introductionSubmitButtonText']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" />&nbsp;&nbsp;<?php echo smartyTranslate(array('s'=>'Example: "Start chat"','mod'=>'olark'),$_smarty_tpl);?>

			</div>
			<div class="margin-form">
				<input type="submit" class="button" name="submitOlark" value="<?php echo smartyTranslate(array('s'=>'Save','mod'=>'olark'),$_smarty_tpl);?>
" />
			</div>
		</fieldset>
	</form>
	<div class="clear"></div>
</div><?php }} ?>
