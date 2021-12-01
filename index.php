<?php

require_once __DIR__.'/vendor/autoload.php';

$config = new \Serkancelik17\TrendyolApi\V1\Config(104967,"zpEYe8qpnB6g05D34IwK","OLRyhXRHmEUIjuvWJgxG");

$request = new \Serkancelik17\TrendyolApi\V1\Order\Order\Request\OrderRequest($config);
$response = new \Serkancelik17\TrendyolApi\V1\Order\Order\Response\OrderResponse($request);

var_dump($response);