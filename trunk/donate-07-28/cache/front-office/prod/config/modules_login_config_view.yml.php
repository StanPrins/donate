<?php
// auto-generated by sfViewConfigHandler
// date: 2009/07/24 18:03:56
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
  $response->addMeta('title', '用户登录', false, false);
  $response->addMeta('robots', 'index, follow', false, false);
  $response->addMeta('description', 'symfony project', false, false);
  $response->addMeta('keywords', 'symfony, project', false, false);
  $response->addMeta('language', 'zh', false, false);

  $response->addStylesheet('main', '', array ());
  $response->addStylesheet('admin_db', '', array ());
}
else
{
  if (!$context->getRequest()->isXmlHttpRequest())
  {
    $this->setDecoratorTemplate('layout'.$this->getExtension());
  }
  $response->addHttpMeta('content-type', 'text/html', false);
  $response->addMeta('title', '自由天空', false, false);
  $response->addMeta('robots', 'index, follow', false, false);
  $response->addMeta('description', 'symfony project', false, false);
  $response->addMeta('keywords', 'symfony, project', false, false);
  $response->addMeta('language', 'zh', false, false);

  $response->addStylesheet('main', '', array ());
  $response->addStylesheet('admin_db', '', array ());
}

