<?php
// auto-generated by sfDatabaseConfigHandler
// date: 2009/07/28 10:54:15

$database = new sfPropelDatabase();
$database->initialize(array (
  'phptype' => 'mysql',
  'host' => 'localhost',
  'database' => 'donate',
  'username' => 'root',
  'password' => 'pangbo',
  'encoding' => 'utf8',
), 'propel');
$this->databases['propel'] = $database;
