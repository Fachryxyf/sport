<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'ps_checkout.cache.paypal.capture' shared service.

return $this->services['ps_checkout.cache.paypal.capture'] = new \Symfony\Component\Cache\Simple\ChainCache([0 => new \Symfony\Component\Cache\Simple\ArrayCache(), 1 => new \Symfony\Component\Cache\Simple\FilesystemCache('paypal-capture', 3600, ($this->services['PrestaShop\\ModuleLibCacheDirectoryProvider\\Cache\\CacheDirectoryProvider'] ?? ($this->services['PrestaShop\\ModuleLibCacheDirectoryProvider\\Cache\\CacheDirectoryProvider'] = new \PrestaShop\ModuleLibCacheDirectoryProvider\Cache\CacheDirectoryProvider('8.0.1', \dirname(__DIR__, 4), false)))->getPath())]);
