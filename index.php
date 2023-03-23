<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;
header('Access-Control-Allow-Origin: *');
require __DIR__ . '/vendor/autoload.php';


$app = AppFactory::create();
$app->setBasePath("/jt-services");
require __DIR__ . '/dbconnect.php';
require __DIR__ . '/api/foods.php';
require __DIR__ . '/api/type.php';
require __DIR__ . '/api/iOrder.php';
require __DIR__ . '/api/cart.php';
require __DIR__ . '/api/customer.php';
require __DIR__ . '/api/admin.php';

$app->run();