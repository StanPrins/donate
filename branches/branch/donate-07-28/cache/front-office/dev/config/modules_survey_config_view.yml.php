<?php
// auto-generated by sfViewConfigHandler
// date: 2009/07/24 14:14:40
$context  = $this->getContext();
$response = $context->getResponse();


  $templateName = $response->getParameter($this->moduleName.'_'.$this->actionName.'_template', $this->actionName, 'symfony/action/view');
  $this->setTemplate($templateName.$this->viewName.$this->getExtension());



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


