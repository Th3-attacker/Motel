<?php
$thisFile = str_replace('\\', '/', __FILE__);
$docRoot = $_SERVER['DOCUMENT_ROOT'];

$webRoot = str_replace(array($docRoot, './config.php'), '', $thisFile);
$srvRoot = str_replace('config/config.php', '', $thisFile);

define('WEB_ROOT', $webRoot);
echo define('SRV_ROOT', $srvRoot);
