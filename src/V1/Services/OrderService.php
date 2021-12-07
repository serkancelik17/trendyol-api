<?php
namespace Entegrator\TrendyolApi\V1\Services;

use Entegrator\ApiBase\Abstracts\RequestAbstract;
use Entegrator\ApiBase\Interfaces\QueryParameterInterface;
use Entegrator\ApiBase\Request\Url;
use Entegrator\TrendyolApi\V1\Models\Order\Response\OrderResponse;
use Entegrator\TrendyolApi\V1\TrendyolApi;
use Entegrator\TrendyolApi\V1\Models\Order\Request\OrderRequest;
use Entegrator\TrendyolApi\V1\Models\Order\Request\QueryParameter;

class OrderService extends TrendyolApi
{
    private RequestAbstract $request;

    function getOrders(QueryParameterInterface $queryParameter = null) : OrderResponse
    {
        $queryParameter ??= new QueryParameter();

        $request = (new OrderRequest())->setQueryParameter($queryParameter);
        $this->setRequestHeaders($request);
        $endPoint = '/suppliers/'.self::$config->getSupplierId().'/orders';
        $url = new Url(self::$URL, $endPoint, null, $request->getQueryParameter());
        $request->setUrl($url);

        return new OrderResponse($request);
    }

    function getOrder(string $orderNumber): OrderResponse
    {
        $parameter = new QueryParameter();
        $parameter->setOrderNumber($orderNumber);

        return $this->getOrders($parameter);
    }

}