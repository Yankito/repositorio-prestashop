<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'PrestaShopBundle\Form\Admin\Sell\Product\Combination\CombinationManagerType' shared autowired service.

return $this->privates['PrestaShopBundle\\Form\\Admin\\Sell\\Product\\Combination\\CombinationManagerType'] = new \PrestaShopBundle\Form\Admin\Sell\Product\Combination\CombinationManagerType(($this->services['translator'] ?? $this->getTranslatorService()), ($this->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? $this->getLegacyContextService())->getLanguages(), ($this->services['PrestaShop\\PrestaShop\\Adapter\\Feature\\MultistoreFeature'] ?? $this->load('getMultistoreFeatureService.php')));
