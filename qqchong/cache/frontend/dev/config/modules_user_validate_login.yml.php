<?php
// auto-generated by sfValidatorConfigHandler
// date: 2009/09/28 19:02:28

if ($_SERVER['REQUEST_METHOD'] == 'GET')
{
  $validators = array();
  $context->getRequest()->setAttribute('fillin', array (
), 'symfony/filter');
}
else if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
  $validators = array();
  $validators['usernameValidator'] = new sfEmailValidator();
  $validators['usernameValidator']->initialize($context, array (
  'strict' => true,
  'email_error' => 'Invalid Email Address',
));
  $validatorManager->registerName('username', 1, 'Please enter your registered E-mail', null, null, false);
  $validatorManager->registerValidator('username', $validators['usernameValidator'], null);
  $validatorManager->registerName('password', 1, 'Please enter your password', null, null, false);
  $context->getRequest()->setAttribute('fillin', array (
), 'symfony/filter');
}
