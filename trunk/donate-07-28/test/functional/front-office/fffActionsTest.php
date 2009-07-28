<?php

include(dirname(__FILE__).'/../../bootstrap/functional.php');

// create a new test browser
$browser = new sfTestBrowser();
$browser->initialize();

$browser->
get('/fff/index')->
isStatusCode(200)->
isRequestParameter('module', 'fff')->
isRequestParameter('action', 'index')->
checkResponseElement('body', '!/This is a temporary page/')
;
