<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'ps_checkout.module.version' shared service.

return $this->services['ps_checkout.module.version'] = \PrestaShop\Module\PrestashopCheckout\Version\Version::buildFromString(($this->services['ps_checkout.module'] ?? $this->load('getPsCheckout_ModuleService.php'))->version);