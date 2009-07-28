<?php
// auto-generated by sfValidatorConfigHandler
// date: 2009/07/24 18:03:56

if ($_SERVER['REQUEST_METHOD'] == 'GET')
{
  $validators = array();
  $context->getRequest()->setAttribute('fillin', array (
), 'symfony/filter');
}
else if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
  $validators = array();
  $validators['usernameValidator'] = new sfStringValidator();
  $validators['usernameValidator']->initialize($context, array (
  'min' => 5,
  'min_error' => '用户名必须是5个或者5个以上的字母或数字',
));
  $validators['userValidator'] = new myLoginValidator();
  $validators['userValidator']->initialize($context, array (
  'password' => 'password',
  'login_error' => '用户不存在或用户名错误',
));
  $validatorManager->registerName('username', 1, 'Username is required', null, null, false);
  $validatorManager->registerValidator('username', $validators['usernameValidator'], null);
  $validatorManager->registerValidator('username', $validators['userValidator'], null);
  $validatorManager->registerName('password', 1, '请输入密码', null, null, false);
  $context->getRequest()->setAttribute('fillin', array (
), 'symfony/filter');
}
