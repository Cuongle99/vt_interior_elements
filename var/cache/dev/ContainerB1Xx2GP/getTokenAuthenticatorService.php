<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'PrestaShop\PrestaShop\Core\Security\TokenAuthenticator' shared service.

return $this->privates['PrestaShop\\PrestaShop\\Core\\Security\\TokenAuthenticator'] = new \PrestaShop\PrestaShop\Core\Security\TokenAuthenticator(new \PrestaShopBundle\Security\OAuth2\ResourceServer(new \League\OAuth2\Server\ResourceServer(($this->privates['PrestaShopBundle\\Security\\OAuth2\\Repository\\AccessTokenRepository'] ?? ($this->privates['PrestaShopBundle\\Security\\OAuth2\\Repository\\AccessTokenRepository'] = new \PrestaShopBundle\Security\OAuth2\Repository\AccessTokenRepository())), new \League\OAuth2\Server\CryptKey('-----BEGIN PUBLIC KEY-----'."\n".'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAr/7KStbGdnXLW1N7KLL0'."\n".'ZrUxC7wgAWtQJVe0rmoUMViHcZ4qyqvJ754+isxVaUbH3gM0vm7Rw+UI7Z0qQnZb'."\n".'S2OcmgEzxnxXoLU0AuRNr7UXeUhwfBV9vLd0jZVXUind9N9LYtFHjKteXOy4hrWr'."\n".'jC8xXgXfbnjIWZAb+DjI+VeutngutDjePYxz3SfFHMzYXK8/SDUCp1+7t2yPva0K'."\n".'4zsaOInnaPL8HGKni3YFwrB2s1cpDyRFcG5UK5w/65I/bAVg8Hp7yzcBr4G9GeOC'."\n".'II8HhSeDKYtUMQ7wjyq3l8ixalXrDKdr2kABDCJy9AQdxb+P2qY6/GfkUSuOWhP3'."\n".'dwIDAQAB'."\n".'-----END PUBLIC KEY-----'."\n".'')), ($this->privates['security.user.provider.concrete.oauth2'] ?? ($this->privates['security.user.provider.concrete.oauth2'] = new \Symfony\Component\Security\Core\User\InMemoryUserProvider([])))), ($this->privates['Symfony\\Bridge\\PsrHttpMessage\\Factory\\PsrHttpFactory'] ?? $this->load('getPsrHttpFactoryService.php')));
