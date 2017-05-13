<?php
/**
* Quick order on product page (via phone)
*
* NOTICE OF LICENSE
*
* This source file is subject to the Open Software License (OSL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/osl-3.0.php
*
* @author    Alex
* @copyright Copyright &copy; 2008-2016 PrestaDev.ru
* @license   http://www.opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
* @version 1.0.0
*/

class RuQOP extends Module
{
    private $_html = '';
    private $_err = array();

    public function __construct()
    {
        $this->name = 'ruqop';
        $this->tab = 'front_office_features';
        $this->version = '1.0.0';
        $this->author = 'PrestaDevRu';
        $this->ps_versions_compliancy = array('min' => '1.6', 'max' => _PS_VERSION_);
        $this->module_key = '74e2d1a9b990ccf5af3670c2a0a3f5b2';

        $this->bootstrap = true;
        parent::__construct();

        $this->displayName = $this->l('Quick order on product page (via phone)');
        $this->description = $this->l('Module allows you to embed order form on product page');

        if (!Configuration::get('RUQOP_ORDER_EMAIL')) {
            $this->warning = $this->l('Please, enter email address administrator');
        }
        if (Configuration::get('RUQOP_MIN') < 0) {
            $this->warning = $this->l('Please, specify minimum value of the product');
        }
    }

    public function install()
    {
        Configuration::updateValue('RUQOP_MIN', 0);
        return parent::install() && $this->registerHook('displayHeader') && $this->registerHook('displayProductButtons') && $this->registerHook('displayRuQOP');
    }

    public function getContent()
    {
        foreach (Language::getLanguages(true) as $l) {
            if (!file_exists($this->local_path.'mails/' . $l['iso_code'] . '/new_order.html')) {
                $this->_html .= $this->displayError($this->l('Error: the following template email does not exist:') . ' ' . $this->_path.'mails/' . $l['iso_code'] . '/new_order.html');
            }
            if (!file_exists($this->local_path.'mails/' . $l['iso_code'] . '/new_order.txt')) {
                $this->_html .= $this->displayError($this->l('Error: the following template email does not exist:') . ' ' . $this->_path.'mails/' . $l['iso_code'] . '/new_order.txt');
            }
        }

        if (Tools::isSubmit('submit')) {
            if (!Validate::isInt(Tools::getValue('RUQOP_MIN'))) {
                $this->_html .= $this->displayError($this->l('Invalid minimum price value.'));
            } elseif (!Validate::isEmail(Tools::getValue('RUQOP_ORDER_EMAIL'))) {
                $this->_html .= $this->displayError($this->l('Invalid email address.'));
            } else {
                foreach ($_POST as $k => $v) {
                    if (strpos($k, 'RUQOP_') !== false) {
                        Configuration::updateValue($k, Tools::getValue($k));
                    }
                }

                $this->_html .= $this->displayConfirmation($this->l('Settings updated.'));
            }
        }

        $h = new HelperForm();
        $h->submit_action = 'submit';
        $h->currentIndex = AdminController::$currentIndex.'&configure='.$this->name;
        $h->token = Tools::getAdminTokenLite('AdminModules');
        $h->fields_value = Configuration::getMultiple(array(
            'RUQOP_ORDER_EMAIL',
            'RUQOP_CREATE_CART',
            'RUQOP_MIN',
        ));

        return $this->_html . $h->generateForm(array(array(
            'form' => array(
                'legend' => array(
                    'title' => $this->l('Settings'),
                    'icon' => 'icon-cogs'
                ),
                'input' => array(
                    array(
                        'type' => 'text',
                        'label' => $this->l('Email address'),
                        'name' => 'RUQOP_ORDER_EMAIL',
                        'desc' => $this->l('Email address on which will send data about the order.'),
                        'required' => true,
                        'class' => 'fixed-width-xl',
                    ),
                    array(
                        'type' => 'switch',
                        'label' => $this->l('Create cart'),
                        'name' => 'RUQOP_CREATE_CART',
                        'desc' => $this->l('Create a cart of goods.'),
                        'values' => array(
                            array(
                                'id' => 'active_on',
                                'value' => 1,
                                'label' => $this->l('Yes'),
                            ),
                            array(
                                'id' => 'active_off',
                                'value' => 0,
                                'label' => $this->l('No'),
                            )
                        ),
                    ),
                    array(
                        'type' => 'text',
                        'label' => $this->l('Minimum price of product'),
                        'name' => 'RUQOP_MIN',
                        'required' => true,
                        'desc' => $this->l('Minimum price of the product to display the form of the order. If the value of the goods below a specified form for ordering will not be displayed.'),
                        'class' => 'fixed-width-sm',
                    ),
                ),
                'submit' => array(
                    'title' => $this->l('Save settings'),
                ),
            ),
        )));
    }

    public function hookDisplayHeader($p)
    {
        $this->context->controller->addCSS($this->_path . 'views/css/ruqop.css', 'all');
        $this->context->controller->addJS(array(
            _PS_JS_DIR_.'validate.js',
            $this->_path.'views/js/jquery.maskedinput.min.js',
            $this->_path.'views/js/ruqop.js'
        ));
    }

    public function form()
    {
        if (!$this->context->controller->isTokenValid()) {
            die('bad token');
        }

        $step = 1;
        if (!$id = (int)Tools::getValue('id_product')) {
            $this->_err[] = $this->l('Not defined product.');
        }
        if (!$phone = Tools::getValue('phone_mobile')) {
            $this->_err[] = $this->l('Please, enter a phone number.');
        }
        if (Tools::getValue('phone_mobile') && !Validate::isPhoneNumber(Tools::getValue('phone_mobile'))) {
            $this->_err[] = $this->l('Phone number contains an error.');
        }

        if (empty($this->_err)) {
            if (Configuration::get('RUQOP_CREATE_CART')) {
                $cart = new Cart();
                $cart->id_lang = $this->context->cookie->id_lang;
                $cart->id_currency = $this->context->cookie->id_currency;
                $cart->id_guest = $this->context->cookie->id_guest;
                $cart->id_shop_group = $this->context->shop->id_shop_group;
                $cart->id_shop = $this->context->shop->id;
                $cart->id_address_delivery = 0;
                $cart->id_address_invoice = 0;
                if (isset($this->context->cookie->id_customer)) {
                    $cart->id_customer = $this->context->cookie->id_customer;
                }
                if ($cart->save()) {
                    $cart->updateQty(Tools::getValue('qty', 1), $id, Tools::getValue('id_product_attribute', null));
                }
            }

            $step = 2;
            $price = Product::getPriceStatic($id, false, Tools::getValue('id_product_attribute', null), 6, null, false, true, 1, false);
            $price_wt = Product::getPriceStatic($id, true, Tools::getValue('id_product_attribute', null), 2, null, false, true, 1, false);
            $product_price = Product::getTaxCalculationMethod() == PS_TAX_EXC ? Tools::ps_round($price, 2) : $price_wt;
            $product_list_txt = '';
            $product_list_html = '';
            $this->context->smarty->assign('list', array(array(
                'id' => $id,
                'name' => Product::getProductName($id, Tools::getValue('id_product_attribute', null), $this->context->cookie->id_lang),
                'unit_price' => Tools::displayPrice($product_price, $this->context->currency, false),
                'price' => Tools::displayPrice($product_price, $this->context->currency, false),
                'quantity' => 1,
                'customization' => array(),
            )));
            if (file_exists($this->local_path.'mails/'.$this->context->language->iso_code.'/new_order_product_list.txt')) {
                $product_list_txt = $this->context->smarty->fetch($this->local_path.'mails/'.$this->context->language->iso_code.'/new_order_product_list.txt');
            } else {
                $product_list_txt = $this->context->smarty->fetch($this->local_path.'mails/en/new_order_product_list.txt');
            }

            if (file_exists($this->local_path.'mails/'.$this->context->language->iso_code.'/new_order_product_list.html')) {
                $product_list_html = $this->context->smarty->fetch($this->local_path.'mails/'.$this->context->language->iso_code.'/new_order_product_list.html');
            } else {
                $product_list_html = $this->context->smarty->fetch($this->local_path.'mails/en/new_order_product_list.html');
            }

            $data = array(
                '{id_cart}' => (isset($cart) && Validate::isLoadedObject($cart) ? $cart->id : ''),
                '{phone}' => $phone,
                '{date}' => Tools::displayDate(date('Y-m-d H:i:s'), null, 1),
                '{products}' => $product_list_html,
                '{products_txt}' => $product_list_txt,
            );

            if (Configuration::get('RUQOP_ORDER_EMAIL')) {
                if (file_exists($this->local_path.'mails/'.$this->context->language->iso_code.'/new_order.html') && file_exists($this->local_path.'mails/'.$this->context->language->iso_code.'/new_order.html')) {
                    Mail::Send((int)$this->context->language->id, 'new_order', Mail::l('New order from product page', (int)$this->context->language->id), $data, Configuration::get('RUQOP_ORDER_EMAIL'), '', null, null, null, null, $this->local_path.'mails/');
                } else {
                    Mail::Send(Language::getIdByIso('en'), 'new_order', Mail::l('New order from product page', (int)$this->context->language->id), $data, Configuration::get('RUQOP_ORDER_EMAIL'), '', null, null, null, null, $this->local_path.'mails/');
                }
            }
        }

        $this->smarty->assign('step', $step);
        if (!empty($this->_err)) {
            $this->context->smarty->assign('err', $this->_err);
        }
        $result = $this->display(__FILE__, 'form.tpl');
        die(Tools::jsonEncode(array(
            'hasError' => !empty($this->_err),
            'result' => $result,
        )));
    }

    public function hookDisplayRuQOP($p = array())
    {
        if (!Configuration::get('RUQOP_ORDER_EMAIL')) {
            return;
        }
        if (!$id = (int)Tools::getValue('id_product')) {
            return;
        }
        $min = Configuration::get('RUQOP_MIN');
        if (!isset($min)) {
            return;
        }
        if ($min > 0 && Product::getPriceStatic((int)$id, true, null, 2, null, false, true, 1, false) < $min) {
            return;
        }

        $this->smarty->assign(array('path' => $this->_path, 'step' => 1, 'id_product' => $id));
        return $this->display(__FILE__, 'form.tpl');
    }

    public function hookDisplayProductButtons($p)
    {
        return $this->hookDisplayRuQOP($p);
    }

    public function hookDisplayLeftColumnProduct($p)
    {
        return $this->hookDisplayRuQOP($p);
    }

    public function hookDisplayRightColumnProduct($p)
    {
        return $this->hookDisplayRuQOP($p);
    }
}
