<?php
// auto-generated by sfDatabaseConfigHandler
// date: 2009/09/15 07:54:03

$database = new sfPropelDatabase();
$database->initialize(array (
  'phptype' => 'mysql',
  'host' => 'localhost',
  'database' => 'qqchong',
  'username' => 'root',
  'encoding' => 'utf8',
), 'propel');
$this->databases['propel'] = $database;
