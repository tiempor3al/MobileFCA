<?php

require_once __DIR__.'/vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

$app = new Silex\Application();

$app->get('/', function () use ($app) {
  return 'Welcome to API 0.1';
});

$app->post('/login', function (Request $request) use ($app) {
  
  $user = $request->get('user');
  $password = $request->get('password');
  
  if($user == 'xamarin' && $password == 'xamarin'){
   
    return $app->json(array("status"=>"ok"));
  }
  
  return $app->json(array("status"=>"error"));
});

$app->run();  