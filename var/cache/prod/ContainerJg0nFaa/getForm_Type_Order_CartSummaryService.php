<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'form.type.order.cart_summary' shared service.

return $this->services['form.type.order.cart_summary'] = new \PrestaShopBundle\Form\Admin\Sell\Order\CartSummaryType(($this->services['prestashop.core.form.choice_provider.order_state_by_id'] ?? $this->load('getPrestashop_Core_Form_ChoiceProvider_OrderStateByIdService.php')), ($this->services['prestashop.adapter.form.choice_provider.installed_payment_modules'] ?? ($this->services['prestashop.adapter.form.choice_provider.installed_payment_modules'] = new \PrestaShop\PrestaShop\Adapter\Form\ChoiceProvider\InstalledPaymentModulesChoiceProvider())), ($this->services['translator'] ?? $this->getTranslatorService()));