<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'ps_billings.context_wrapper' shared service.

return $this->services['ps_billings.context_wrapper'] = new \PrestaShopCorp\Billing\Wrappers\BillingContextWrapper(($this->services['ps_edition_basic.ps_accounts.facade'] ?? $this->load('getPsEditionBasic_PsAccounts_FacadeService.php')), (($this->get("smb_edition.context")) ? ($this->get("smb_edition.context")) : (null)));