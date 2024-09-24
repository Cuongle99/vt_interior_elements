<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.adapter.pdf.generator.credit_slip' shared service.

return $this->services['prestashop.adapter.pdf.generator.credit_slip'] = new \PrestaShop\PrestaShop\Adapter\PDF\PDFGenerator(($this->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? $this->getLegacyContextService())->getSmarty(), ($this->services['prestashop.adapter.pdf.type_provider.credit_slip'] ?? ($this->services['prestashop.adapter.pdf.type_provider.credit_slip'] = new \PrestaShop\PrestaShop\Adapter\CreditSlip\CreditSlipTemplateTypeProvider())));
