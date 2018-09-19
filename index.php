<?php
require 'vendor/autoload.php';

$app = new \Slim\App();

$app->get('/', function ($request, $response, $args) {
  return $response->write("Hello SlimFrameWork");
});

$app->run();
