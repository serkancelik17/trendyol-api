<?php
namespace Serkancelik17\TrendyolApi\V1\Services;

use Serkancelik17\ApiBase\Request\Url;
use Serkancelik17\TrendyolApi\V1\Config;
use Serkancelik17\TrendyolApi\V1\Order\Request\OrderRequest;
use Serkancelik17\TrendyolApi\V1\Order\Response\OrderResponse;
use Serkancelik17\TrendyolApi\V1\TrendyolService;

class OrderService extends TrendyolService
{

    public function __construct(Config $config, bool $isTest = false)
    {
        parent::__construct($config, $isTest);
    }

    function getOrders(OrderRequest $orderRequest) {
        $endPoint = '/suppliers/'.self::$config->getSupplierId().'/orders';

        $this->setRequest($orderRequest);

        $orderRequest->setUrl(new Url(self::$URL, $endPoint, null, $orderRequest->getQueryParameter()));

        return new OrderResponse($this->getRequest());
    }

}