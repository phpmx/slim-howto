<?php

require 'vendor/autoload.php';

$app = new \Slim\Slim();

$app->get('/', function () {
    echo "Hello	index.php";
});


$app->get('/hello/:name', function ($name) use ($app){
    $dataArray = array('hello' => $name);
	$response = $app->response();
	$response['Content-Type'] = 'application/json';
	$response->body(json_encode($dataArray));
});

#$app->get('/hello/:name', function ($name) {
#    echo "Hello, $name";
#});


$app->run();




