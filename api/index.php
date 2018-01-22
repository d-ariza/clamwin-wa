<?php

require __DIR__ . '/../vendor/jacwright/RestServer/source/Jacwright/RestServer/RestServer.php';
require 'Proxy.php';
// require 'TestController.php';

$server = new \Jacwright\RestServer\RestServer('debug');
// $server->addClass('TestController');
$server->addClass('Proxy');
$server->handle();
