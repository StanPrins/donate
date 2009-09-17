<?php
// auto-generated by sfRootConfigHandler
// date: 2009/09/17 03:47:58

$this->handlers['config/autoload.yml'] = new sfAutoloadConfigHandler();
$this->handlers['config/autoload.yml']->initialize();
$this->handlers['config/php.yml'] = new sfPhpConfigHandler();
$this->handlers['config/php.yml']->initialize();
$this->handlers['config/databases.yml'] = new sfDatabaseConfigHandler();
$this->handlers['config/databases.yml']->initialize();
$this->handlers['config/settings.yml'] = new sfDefineEnvironmentConfigHandler();
$this->handlers['config/settings.yml']->initialize(array (
  'prefix' => 'sf_',
));
$this->handlers['config/app.yml'] = new sfDefineEnvironmentConfigHandler();
$this->handlers['config/app.yml']->initialize(array (
  'prefix' => 'app_',
));
$this->handlers['config/factories.yml'] = new sfFactoryConfigHandler();
$this->handlers['config/factories.yml']->initialize();
$this->handlers['config/bootstrap_compile.yml'] = new sfCompileConfigHandler();
$this->handlers['config/bootstrap_compile.yml']->initialize();
$this->handlers['config/core_compile.yml'] = new sfCompileConfigHandler();
$this->handlers['config/core_compile.yml']->initialize();
$this->handlers['config/filters.yml'] = new sfFilterConfigHandler();
$this->handlers['config/filters.yml']->initialize();
$this->handlers['config/logging.yml'] = new sfLoggingConfigHandler();
$this->handlers['config/logging.yml']->initialize(array (
  'prefix' => 'sf_logging_',
));
$this->handlers['config/routing.yml'] = new sfRoutingConfigHandler();
$this->handlers['config/routing.yml']->initialize();
$this->handlers['config/i18n.yml'] = new sfDefineEnvironmentConfigHandler();
$this->handlers['config/i18n.yml']->initialize(array (
  'prefix' => 'sf_i18n_',
));
$this->handlers['modules/*/config/generator.yml'] = new sfGeneratorConfigHandler();
$this->handlers['modules/*/config/generator.yml']->initialize();
$this->handlers['modules/*/config/view.yml'] = new sfViewConfigHandler();
$this->handlers['modules/*/config/view.yml']->initialize();
$this->handlers['modules/*/config/mailer.yml'] = new sfDefineEnvironmentConfigHandler();
$this->handlers['modules/*/config/mailer.yml']->initialize(array (
  'prefix' => 'sf_mailer_',
  'module' => true,
));
$this->handlers['modules/*/config/security.yml'] = new sfSecurityConfigHandler();
$this->handlers['modules/*/config/security.yml']->initialize();
$this->handlers['modules/*/config/cache.yml'] = new sfCacheConfigHandler();
$this->handlers['modules/*/config/cache.yml']->initialize();
$this->handlers['modules/*/validate/*.yml'] = new sfValidatorConfigHandler();
$this->handlers['modules/*/validate/*.yml']->initialize();
$this->handlers['modules/*/config/module.yml'] = new sfDefineEnvironmentConfigHandler();
$this->handlers['modules/*/config/module.yml']->initialize(array (
  'prefix' => 'mod_',
  'module' => true,
));
