<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.core.grid.factory.supplier' shared service.

return $this->services['prestashop.core.grid.factory.supplier'] = new \PrestaShop\PrestaShop\Core\Grid\GridFactory(($this->services['prestashop.core.grid.definition.factory.supplier'] ?? $this->load('getPrestashop_Core_Grid_Definition_Factory_SupplierService.php')), ($this->services['prestashop.core.grid.factory.supplier_decorator'] ?? $this->load('getPrestashop_Core_Grid_Factory_SupplierDecoratorService.php')), ($this->services['prestashop.core.grid.filter.form_factory'] ?? $this->load('getPrestashop_Core_Grid_Filter_FormFactoryService.php')), ($this->services['prestashop.core.hook.dispatcher'] ?? $this->getPrestashop_Core_Hook_DispatcherService()));