<?php

include(dirname(__FILE__).'/../../bootstrap/functional.php');

// create a new test browser
$browser = new sfTestBrowser();
$browser->initialize();

$browser->
get('/bbb/index')->
isStatusCode(200)->
isRequestParameter('module', 'bbb')->
isRequestParameter('action', 'index')->
checkResponseElement('body', '!/This is a temporary page/')
;
