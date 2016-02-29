<?php

phpinfo();

$cfgDir = getenv('CONFIG_DIR');
if ($cfgDir) {
  $cfg = parse_ini_file($cfgDir . DIRECTORY_SEPARATOR . 'config.ini');
  var_dump($cfg);
}
