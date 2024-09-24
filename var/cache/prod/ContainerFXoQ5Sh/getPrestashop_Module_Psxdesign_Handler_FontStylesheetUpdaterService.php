<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.module.psxdesign.handler.font_stylesheet_updater' shared service.

return $this->services['prestashop.module.psxdesign.handler.font_stylesheet_updater'] = new \PrestaShop\Module\PsxDesign\Handler\FontStylesheetUpdater(($this->services['prestashop.module.psxdesign.provider.theme_configuration_provider'] ?? $this->load('getPrestashop_Module_Psxdesign_Provider_ThemeConfigurationProviderService.php')), ($this->services['psxdesign.module'] ?? $this->load('getPsxdesign_ModuleService.php'))->getLocalPath(), ($this->services['filesystem'] ?? ($this->services['filesystem'] = new \Symfony\Component\Filesystem\Filesystem())), ($this->services['prestashop.module.psxdesign.processor.font_stylesheets_processor'] ?? $this->load('getPrestashop_Module_Psxdesign_Processor_FontStylesheetsProcessorService.php')));
