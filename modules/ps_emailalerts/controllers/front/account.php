<?php
/**
 * 2007-2015 PrestaShop.
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License (AFL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/afl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2015 PrestaShop SA
 * @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 */

/**
 * @since 1.5.0
 */
class Ps_EmailAlertsAccountModuleFrontController extends ModuleFrontController
{
    public function init()
    {
        parent::init();

        require_once $this->module->getLocalPath().'MailAlert.php';
    }

    public function initContent()
    {
        parent::initContent();

        if (!Context::getContext()->customer->isLogged()) {
            Tools::redirect('index.php?controller=authentication&redirect=module&module=ps_emailalerts&action=account');
        }

        if (Context::getContext()->customer->id) {
            $this->context->smarty->assign('id_customer', Context::getContext()->customer->id);
            $this->context->smarty->assign(
                'mailAlerts',
                MailAlert::getMailAlerts((int) Context::getContext()->customer->id, (int) Context::getContext()->language->id)
            );

            $this->setTemplate('module:ps_emailalerts/views/templates/front/mailalerts-account.tpl');
        }
    }
}
