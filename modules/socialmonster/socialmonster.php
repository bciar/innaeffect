<?php
/**
 * 2016 Vasyl Pominchuk http://pominchuk.com
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the GNU GENERAL PUBLIC LICENSE (v2)
 * It is available through the world-wide-web at this URL:
 * http://www.gnu.org/licenses/gpl-2.0.html
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to vpominchuk@gmail.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade module to newer
 * versions in the future.
 *
 * @author    Vasyl Pominchuk <vpominchuk@gmail.com>
 * @copyright 2016 Vasyl Pominchuk
 * @license   http://www.gnu.org/licenses/gpl-2.0.html  GNU GENERAL PUBLIC LICENSE (v2)
 */

if (!defined('_PS_VERSION_')) {
    exit;
}

class SocialMonster extends Module
{
    public $socMap = array(
        'fb' => array(
            'name' => 'Facebook',
            'url' => 'https://www.facebook.com/sharer/sharer.php?u=%URL',
            'prim' => true
        ),
        'gp' => array(
            'name' => 'Google+',
            'url' => 'https://plus.google.com/share?url=%URL',
            'prim' => true
        ),
        'tw' => array(
            'name' => 'Twitter',
            'url' => 'https://twitter.com/intent/tweet?text=%MESSAGE&url=%URL',
            'prim' => true
        ),
        'wa' => array(
            'name' => 'WhatsApp',
            'url' => 'whatsapp://send?text=%URL'
        ),
        'vb' => array(
            'name' => 'Viber',
            'url' => 'viber://forward?text=%URL'
        ),
        'go' => array(
            'name' => 'Google Bookmarks',
            'url' => 'https://www.google.com/bookmarks/mark?op=add&bkmk=%URL&title=%MESSAGE',
            'newTab' => true
        ),
        'sms' => array(
            'name' => 'SMS',
            'url' => 'sms:?body=%URL',
            'mobileOnly' => true
        ),
        'li' => array(
            'name' => 'LinkedIn',
            'url' => 'https://www.linkedin.com/shareArticle?ro=false&mini=true&url=%URL&source=&title=%MESSAGE',
            'win' => '{w : 600}'
        ),
        'tu' => array(
            'name' => 'Tumblr',
            'url' => 'https://www.tumblr.com/share?v=3&u=%URL&t=%MESSAGE'
        ),
        'vk' => array(
            'name' => 'VKontakte',
            'url' => 'http://vk.com/share.php?url=%URL&title=%MESSAGE'
        ),
        'ok' => array(
            'name' => 'Odnoklassniki',
            'url' => 'http://www.odnoklassniki.ru/dk?st.cmd=addShare&st.s=1&st.comments=%MESSAGE&st._surl=%URL'
        ),
        'di' => array(
            'name' => 'Digg',
            'url' => 'http://digg.com/submit?partner=%WE&url=%URL&title=%MESSAGE'
        ),
        're' => array(
            'name' => 'Reddit',
            'url' => 'http://www.reddit.com/submit?url=%URL&title=%MESSAGE'
        ),
        'mr' => array(
            'name' => 'Mail.ru',
            'url' => 'http://connect.mail.ru/share?url=%URL&title=%MESSAGE'
        ),
        'de' => array(
            'name' => 'Delicious',
            'url' => 'https://delicious.com/post?partner=%WE&url=%URL&title=%MESSAGE'
        ),
        'gm' => array(
            'name' => 'GMail',
            'url' => 'https://mail.google.com/mail/u/0/?view=cm&fs=1&to&su=%MESSAGE&body=%URL&ui=2&tf=1'
        ),
        'yh' => array(
            'name' => 'Yahoo Mail',
            'url' => 'http://compose.mail.yahoo.com/?To=&Subject=%MESSAGE&body=%URL'
        ),
        'bl' => array(
            'name' => 'Blogger',
            'url' => 'https://www.blogger.com/blog_this.pyra?t&u=%URL&n=%MESSAGE'
        ),
        'lj' => array(
            'name' => 'LiveJournal',
            'url' => 'http://www.livejournal.com/update.bml?subject=%MESSAGE&event=%FUNC',
            'newTab' => true,
            'func' => 'function() {return encodeURIComponent(\'<a href="\' + location.href + \'">\' + document.title + \'</a>\');}'
        ),
        'ba' => array(
            'name' => 'Baidu',
            'url' => 'http://cang.baidu.com/do/add?it=%MESSAGE&iu=%URL&fr=ien&dc='
        ),
        'am' => array(
            'name' => 'Amazon',
            'url' => 'http://www.amazon.com/gp/wishlist/static-add?u=%URL&t=%MESSAGE'
        ),
        'bi' => array(
            'name' => 'Bit.ly',
            'url' => 'https://bitly.com/a/bitmarklet?u=%URL',
            'newTab' => true
        ),
        'wh' => array(
            'name' => 'Whois Lookup',
            'url' => 'http://whois.domaintools.com/%HOST',
            'newTab' => true
        ),
        'gt' => array(
            'name' => 'Google Translate',
            'url' => 'http://translate.google.com/translate?hl=ru-RU&u=%URL&sl=auto&tl=ru-RU',
            'newTab' => true
        ),
        'w3' => array(
            'name' => 'W3C Validator',
            'url' => 'http://validator.w3.org/check?uri=%URL&charset=%28detect+automatically%29&doctype=Inline&group=0,',
            'newTab' => true
        ),
        'st' => array(
            'name' => 'Stumble',
            'url' => 'http://www.stumbleupon.com/submit?url=%URL&title=%MESSAGE'
        )
    );
    
    public function __construct()
    {
        $this->name = 'socialmonster';
        $this->tab = 'social_networks';
        $this->version = '1.0.8';
        $this->author = 'Pominchuk Vasyl';
        $this->need_instance = 0;
        $this->bootstrap = true;
        $this->module_key = '9190b4313a438146c382d0c19e5147b4';

        parent::__construct();

        $this->displayName = $this->l('Social Share buttons');
        $this->description = $this->l('Increase your visibility by allowing your customers to easily share your products with their friends and get free traffic to your shop.');
        $this->ps_versions_compliancy = array('min' => '1.5.0', 'max' => '1.7.9');
    }

    public function install()
    {
        if (!parent::install() || !$this->registerHook('header')) {
            return false;
        }
        
        Configuration::updateValue('SM_TOP', '150');
        Configuration::updateValue('SM_MOB_TOP', '150');
        Configuration::updateValue('SM_BUTTONS_VISIBILITY', '');
        Configuration::updateValue('SM_BUTTONS_PRIM', '');
        Configuration::updateValue('SM_BUTTONS_ORDER', '');

        return true;
    }

    public function uninstall()
    {
        Configuration::deleteByName('SM_TOP');
        Configuration::deleteByName('SM_MOB_TOP');
        Configuration::deleteByName('SM_BUTTONS_VISIBILITY');
        Configuration::deleteByName('SM_BUTTONS_PRIM');
        Configuration::deleteByName('SM_BUTTONS_ORDER');
        
        return parent::uninstall();
    }

    public function hookHeader($params)
    {
        $this->context->controller->addCSS($this->_path . 'views/css/socialmonster.css', 'all');
        
        $buttonsVisibility = unserialize(Configuration::get('SM_BUTTONS_VISIBILITY'));
        $buttonsPrimary = unserialize(Configuration::get('SM_BUTTONS_PRIM'));
        $buttonsOrder = unserialize(Configuration::get('SM_BUTTONS_ORDER'));
        
        $map = array();
        
        if ($buttonsOrder) {
            $orderKeys = array_keys($buttonsOrder);
            foreach ($orderKeys as $key) {
                $map[$key] = $this->socMap[$key];
                
                unset($this->socMap[$key]);
            }
            
            if (count($this->socMap) > 0) {
                $map = array_merge($map, $this->socMap);
            }
        }
        $this->socMap = $map;
        
        $socMap = "var socMap = {";
        foreach ($this->socMap as $key => $params) {
            if (array_key_exists($key, $buttonsVisibility) && $buttonsVisibility[$key] == 0) {
                continue;
            }
            
            if (array_key_exists($key, $buttonsPrimary) && $buttonsPrimary[$key] == 1) {
                $params['prim'] = true;
            } else {
                $params['prim'] = false;
            }
            
            $socMap .= $key . ": {";
            
            foreach ($params as $paramName => $value) {
                $socMap .= "\t";
                if (is_bool($value)) {
                    $socMap .= $paramName . ": " . ($value === true ? 'true' : 'false') . ",";
                } elseif (strpos($value, '{') === 0) {
                    $socMap .= $paramName . ": " . $value . ",";
                } elseif ($paramName == 'func') {
                    $socMap .= $paramName . ": " . $value . ",";
                } else {
                    $socMap .= $paramName . ": '" . $value . "',";
                }
            }
            
            $socMap = rtrim($socMap, ",");
            
            $socMap .= "},";
        }
        
        $socMap = rtrim($socMap, ',') . "}";
        
        $top = (int)Configuration::get('SM_TOP');
        $mtop = (int)Configuration::get('SM_MOB_TOP');
        $ga_name = Configuration::get('SM_GA_NAME');
        
        if ($ga_name == '') {
            $ga_name = 'Social Buttons';
        }
        
        if ($top <= 0) {
            $top = 150;
        }
        
        if ($mtop <= 0) {
            $mtop = 150;
        }
        
        return '<script>
            var socialMonsterWindowTitle = "' . $this->l('Find a service to share:') .'";
            ' . $socMap . '
            var SM_Top = "' . $top . 'px";
            var SM_MTop = "' . $mtop . 'px";
        </script>
        <script type="text/javascript" src="' . $this->_path . 'views/js/socialmonster.js"></script>';
    }
    
    public function checkFormDataCheckboxes($arr)
    {
        $keys = array_keys($this->socMap);
        foreach ($keys as $key) {
            if (array_key_exists($key, (array)$arr) && Tools::strtolower($arr[$key]) == 'on') {
                $arr[$key] = 1;
            } else {
                $arr[$key] = 0;
            }
        }
        
        return $arr;
    }
    
    public function saveForm()
    {
        if (Tools::isSubmit('submit' . $this->name)) {
            $do_save = Tools::getValue('do_save');

            $states = Tools::getValue('SM_BUTTONS_VISIBILITY');
            $prim = Tools::getValue('SM_BUTTONS_PRIM');
            $orders = Tools::getValue('SM_BUTTONS_ORDER');
            
            $states = $this->checkFormDataCheckboxes($states);
            $prim = $this->checkFormDataCheckboxes($prim);
            
            if ($do_save) {
                if ($states) {
                    Configuration::updateValue('SM_BUTTONS_VISIBILITY', serialize($states));
                }
                
                if ($prim) {
                    Configuration::updateValue('SM_BUTTONS_PRIM', serialize($prim));
                }
                
                if ($orders) {
                    Configuration::updateValue('SM_BUTTONS_ORDER', serialize($orders));
                }
                
                Configuration::updateValue('SM_TOP', (int)Tools::getValue('SM_TOP'));
                Configuration::updateValue('SM_MOB_TOP', (int)Tools::getValue('SM_MOB_TOP'));
            }
        }

        return $this->displayConfirmation($this->l('Settings updated.'));
    }
    
    public function form()
    {
        $this->context->controller->addJQueryPlugin('fancybox');
        $this->context->controller->addJQueryUI('ui.sortable');
        $this->context->controller->addJQueryUI('ui.draggable');
        $this->context->controller->addJQueryUI('effects.transfer');
        
        $templatePath = '../../../..' . $this->_path . 'views/templates/admin/';
        
        $tpl = $this->context->controller->createTemplate($templatePath . 'module_configuration_form.tpl');
        
        $buttonsVisibility = unserialize(Configuration::get('SM_BUTTONS_VISIBILITY'));
        $buttonsPrimary = unserialize(Configuration::get('SM_BUTTONS_PRIM'));
        
        foreach ($this->socMap as $key => &$value) {
            if (array_key_exists($key, (array)$buttonsVisibility)) {
                $value['visible'] = (int)$buttonsVisibility[$key];
            } else {
                $value['visible'] = 1;
            }
            
            if (array_key_exists($key, (array)$buttonsPrimary)) {
                $value['prim'] = (int)$buttonsPrimary[$key];
            } elseif (!array_key_exists('prim', $value)) {
                $value['prim'] = 0;
            }
        }
        
        $buttonsOrder = unserialize(Configuration::get('SM_BUTTONS_ORDER'));
        
        $map = array();
        if ($buttonsOrder) {
            $orderKeys = array_keys($buttonsOrder);
            foreach ($orderKeys as $key) {
                $map[$key] = $this->socMap[$key];
                
                unset($this->socMap[$key]);
            }
            
            if (count($this->socMap) > 0) {
                $map = array_merge($map, $this->socMap);
            }
            
            $this->socMap = $map;
        }
        
        $this->context->smarty->assign('submit_name', 'submit' . $this->name);
        $this->context->smarty->assign('sm_top', (int)Configuration::get('SM_TOP'));
        $this->context->smarty->assign('sm_mob_top', (int)Configuration::get('SM_MOB_TOP'));
        $this->context->smarty->assign('buttons', $this->socMap);
        $this->context->smarty->assign('form_action', AdminController::$currentIndex . '&configure=' . $this->name . '&token=' . Tools::getAdminTokenLite('AdminModules'));
        
        if (_PS_VERSION_ >= 1.6) {
            $this->context->smarty->assign('showCSS', 0);
        } else {
            $this->context->smarty->assign('showCSS', 1);
        }

        return $tpl->fetch();
    }
    
    public function getContent()
    {
        $html = $this->saveForm();
//
//        return $output . $this->displayForm();

        $html .= $this->form();
        return $html;
    }
}
