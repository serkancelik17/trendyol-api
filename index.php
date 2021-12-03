<?php

require_once __DIR__.'/vendor/autoload.php';
use Serkancelik17\TrendyolApi\V1\Config;
use Serkancelik17\TrendyolApi\V1\Order\Request\OrderRequest;

$config = new Config(104967,"zpEYe8qpnB6g05D34IwK","OLRyhXRHmEUIjuvWJgxG");
$service = new \Serkancelik17\TrendyolApi\V1\Services\OrderService($config);
$request = new OrderRequest();

var_dump($service->getOrders($request));