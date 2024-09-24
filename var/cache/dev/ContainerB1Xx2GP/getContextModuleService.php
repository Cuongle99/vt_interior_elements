<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'PrestaShop\Module\PrestashopCheckout\Presenter\Store\Modules\ContextModule' shared service.

return $this->services['PrestaShop\\Module\\PrestashopCheckout\\Presenter\\Store\\Modules\\ContextModule'] = new \PrestaShop\Module\PrestashopCheckout\Presenter\Store\Modules\ContextModule(($this->services['ps_checkout.module'] ?? $this->load('getPsCheckout_ModuleService.php'))->name, ($this->services['ps_checkout.module'] ?? $this->load('getPsCheckout_ModuleService.php'))->module_key, ($this->services['PrestaShop\\Module\\PrestashopCheckout\\Context\\PrestaShopContext'] ?? ($this->services['PrestaShop\\Module\\PrestashopCheckout\\Context\\PrestaShopContext'] = new \PrestaShop\Module\PrestashopCheckout\Context\PrestaShopContext())), ($this->services['PrestaShop\\Module\\PrestashopCheckout\\PayPal\\PayPalConfiguration'] ?? $this->load('getPayPalConfigurationService.php')), ($this->services['PrestaShop\\Module\\PrestashopCheckout\\OnBoarding\\Step\\LiveStep'] ?? $this->load('getLiveStepService.php')), ($this->services['PrestaShop\\Module\\PrestashopCheckout\\OnBoarding\\Step\\ValueBanner'] ?? $this->load('getValueBannerService.php')), ($this->services['PrestaShop\\Module\\PrestashopCheckout\\Translations\\Translations'] ?? $this->load('getTranslationsService.php')), ($this->services['PrestaShop\\Module\\PrestashopCheckout\\ShopContext'] ?? $this->load('getShopContextService.php')), ($this->services['PrestaShop\\Module\\PrestashopCheckout\\Shop\\ShopProvider'] ?? ($this->services['PrestaShop\\Module\\PrestashopCheckout\\Shop\\ShopProvider'] = new \PrestaShop\Module\PrestashopCheckout\Shop\ShopProvider())), ($this->services['PrestaShop\\Module\\PrestashopCheckout\\Builder\\ModuleLink\\ModuleLinkBuilder'] ?? ($this->services['PrestaShop\\Module\\PrestashopCheckout\\Builder\\ModuleLink\\ModuleLinkBuilder'] = new \PrestaShop\Module\PrestashopCheckout\Builder\ModuleLink\ModuleLinkBuilder())), ($this->services['PrestaShop\\Module\\PrestashopCheckout\\Repository\\PsAccountRepository'] ?? $this->load('getPsAccountRepositoryService.php')));