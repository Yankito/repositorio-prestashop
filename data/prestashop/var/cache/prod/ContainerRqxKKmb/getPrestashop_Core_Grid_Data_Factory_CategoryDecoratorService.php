<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.core.grid.data.factory.category_decorator' shared service.

return $this->services['prestashop.core.grid.data.factory.category_decorator'] = new \PrestaShop\PrestaShop\Core\Grid\Data\Factory\CategoryDataFactory(($this->services['prestashop.core.grid.data.factory.category'] ?? $this->load('getPrestashop_Core_Grid_Data_Factory_CategoryService.php')));
