<?php
// auto-generated by sfViewConfigHandler
// date: 2009/09/18 15:59:37
$context  = $this->getContext();
$response = $context->getResponse();

if ($this->actionName.$this->viewName == 'loginSuccess')
{
  $templateName = $response->getParameter($this->moduleName.'_'.$this->actionName.'_template', $this->actionName, 'symfony/action/view');
  $this->setTemplate($templateName.$this->viewName.$this->getExtension());
}
else
{
  $templateName = $response->getParameter($this->moduleName.'_'.$this->actionName.'_template', $this->actionName, 'symfony/action/view');
  $this->setTemplate($templateName.$this->viewName.$this->getExtension());
}

if ($templateName.$this->viewName == 'loginSuccess')
{
  if (!$context->getRequest()->isXmlHttpRequest())
  {
    $this->setDecoratorTemplate('layout'.$this->getExtension());
  }
  $response->addHttpMeta('content-type', 'text/html', false);
  $response->addMeta('title', 'Login', false, false);
  $response->addMeta('robots', 'index, follow', false, false);
  $response->addMeta('description', 'Vhome', false, false);
  $response->addMeta('keywords', 'XBV,SNS', false, false);
  $response->addMeta('language', 'en', false, false);

  $response->addStylesheet('main', '', array ());
  $response->addJavascript('web');
}
else
{
  if (!$context->getRequest()->isXmlHttpRequest())
  {
    $this->setDecoratorTemplate('layout'.$this->getExtension());
  }
  $response->addHttpMeta('content-type', 'text/html', false);
  $response->addMeta('title', 'Vhome', false, false);
  $response->addMeta('robots', 'index, follow', false, false);
  $response->addMeta('description', 'Vhome', false, false);
  $response->addMeta('keywords', 'XBV,SNS', false, false);
  $response->addMeta('language', 'en', false, false);

  $response->addStylesheet('main', '', array ());
  $response->addJavascript('web');
}

