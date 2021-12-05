<?php
namespace Entegrator\TrendyolApi\V1\Services;

use Entegrator\ApiBase\Interfaces\QueryParameterInterface;
use Entegrator\ApiBase\Request\Url;
use Entegrator\TrendyolApi\V1\Abstracts\ServiceAbstract;
use Entegrator\TrendyolApi\V1\Config;
use Entegrator\TrendyolApi\V1\Models\Order\Request\OrderRequest;
use Entegrator\TrendyolApi\V1\Models\Order\Request\QueryParameter;
use Entegrator\TrendyolApi\V1\Models\Order\Response\OrderResponse;

class OrderService extends ServiceAbstract
{

    public function __construct(Config $config, bool $isTest = false)
    {
        parent::__construct($config, $isTest);
    }

    function getOrders(QueryParameterInterface $queryParameter = null) : OrderResponse
    {
        $queryParameter ??= new QueryParameter();

        $orderRequest = (new OrderRequest())->setQueryParameter($queryParameter);
        $endPoint = '/suppliers/'.self::$config->getSupplierId().'/orders';
        $url = new Url(self::$URL, $endPoint, null, $orderRequest->getQueryParameter());
        $this->setRequestHeaders($orderRequest)->setUrl($url);

        return new OrderResponse($orderRequest);
    }

    function getOrder(string $orderNumber): OrderResponse
    {
        $parameter = new QueryParameter();
        $parameter->setOrderNumber($orderNumber);

        return $this->getOrders($parameter);
    }

}