<?php

$opsworks_file = DRUPAL_ROOT . '/opsworks.php';
if (file_exists($opsworks_file)) {
  require_once($opsworks_file);
  $db = new OpsWorksDb();
  $databases['default']['default'] = array(
    'database' => $db->database,
    'username' => $db->username,
    'password' => $db->password,
    'host' => $db->host,
    'port' => '',
    'driver' => 'mysql',
    'prefix' => '',
  );
}
