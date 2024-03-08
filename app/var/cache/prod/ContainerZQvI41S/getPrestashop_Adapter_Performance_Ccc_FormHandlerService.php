<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.adapter.performance.ccc.form_handler' shared service.

return $this->services['prestashop.adapter.performance.ccc.form_handler'] = new \PrestaShop\PrestaShop\Core\Form\Handler(($this->services['form.factory'] ?? $this->load('getForm_FactoryService.php')), ($this->services['PrestaShop\\PrestaShop\\Core\\Hook\\HookDispatcher'] ?? $this->getHookDispatcherService()), ($this->services['prestashop.adapter.performance.ccc.form_provider'] ?? $this->load('getPrestashop_Adapter_Performance_Ccc_FormProviderService.php')), 'PrestaShopBundle\\Form\\Admin\\AdvancedParameters\\Performance\\CombineCompressCacheType', 'PerformancePageCombineCompressCache', 'ccc');