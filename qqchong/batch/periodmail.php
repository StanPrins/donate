<?php

/**
 * periodmail batch script
 *
 * Here goes a brief description of the purpose of the batch script
 *
 * @package    BookSystem
 * @subpackage batch
 * @version    $Id$
 */

define('SF_ROOT_DIR',    realpath(dirname(__file__).'/..'));
define('SF_APP',         'frontend');
define('SF_ENVIRONMENT', 'dev');
define('SF_DEBUG',       1);

require_once(SF_ROOT_DIR.DIRECTORY_SEPARATOR.'apps'.DIRECTORY_SEPARATOR.SF_APP.DIRECTORY_SEPARATOR.'config'.DIRECTORY_SEPARATOR.'config.php');

// initialize database manager
//$databaseManager = new sfDatabaseManager();
//$databaseManager->initialize();

// batch process here
//echo "it runing\n";
//sfContext::getInstance()->getController()->getAction('mail', 'sendPassword')->executeSendPassword();

$action = sfContext::getInstance()->getController()->getAction('mail', 'sendNotice')->executeSendNotice();
?>