<?php
// auto-generated by sfFilterConfigHandler
// date: 2009/07/24 18:03:56

list($class, $parameters) = (array) sfConfig::get('sf_rendering_filter', array('sfRenderingFilter', array (
)));
$filter = new $class();
$filter->initialize($this->context, $parameters);
$filterChain->register($filter);

// does this action require security?
if ($actionInstance->isSecure())
{
  if (!in_array('sfSecurityUser', class_implements($this->context->getUser())))
  {
    $error = 'Security is enabled, but your sfUser implementation does not implement sfSecurityUser interface';
    throw new sfSecurityException($error);
  }
  
list($class, $parameters) = (array) sfConfig::get('sf_security_filter', array('sfBasicSecurityFilter', array (
)));
$filter = new $class();
$filter->initialize($this->context, $parameters);
$filterChain->register($filter);
}

list($class, $parameters) = (array) sfConfig::get('sf_common_filter', array('sfCommonFilter', null));
$filter = new $class();
$filter->initialize($this->context, $parameters);
$filterChain->register($filter);

list($class, $parameters) = (array) sfConfig::get('sf_flash_filter', array('sfFlashFilter', array (
)));
$filter = new $class();
$filter->initialize($this->context, $parameters);
$filterChain->register($filter);

list($class, $parameters) = (array) sfConfig::get('sf_execution_filter', array('sfExecutionFilter', array (
)));
$filter = new $class();
$filter->initialize($this->context, $parameters);
$filterChain->register($filter);

