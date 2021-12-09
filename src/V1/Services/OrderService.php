<?php
namespace Entegrator\TrendyolApi\V1\Services;

use Entegrator\ApiBase\Abstracts\RequestAbstract;
use Entegrator\ApiBase\Interfaces\QueryParameterInterface;
use Entegrator\ApiBase\Interfaces\ResponseInterface;
use Entegrator\ApiBase\Request\Url;
use Entegrator\TrendyolApi\V1\Config;
use Entegrator\TrendyolApi\V1\Interfaces\RequestInterface;
use Entegrator\TrendyolApi\V1\Models\Order\Response\OrderResponse;
use Entegrator\TrendyolApi\V1\TrendyolApi;
use Entegrator\TrendyolApi\V1\Models\Order\Request\OrderRequest;
use Entegrator\TrendyolApi\V1\Models\Order\Request\QueryParameter;

class OrderService
{
    private TrendyolApi $api;

    /**
     * @param TrendyolApi $api
     */
    public function __construct(TrendyolApi $api)
    {
        $this->api = $api;

        $this->api->setRequest($this->api->getRequest() ?? new OrderRequest());
        $this->api->setRequestHeaders();
    }

    function getOrders(QueryParameterInterface $queryParameter = null) : OrderResponse
    {
        $queryParameter ??= new QueryParameter();

        $this->api->getRequest()->setQueryParameter($queryParameter);;
        $endPoint = '/suppliers/'.TrendyolApi::$config->getSupplierId().'/orders';

        $url = new Url(TrendyolApi::$URL, $endPoint, null, $this->api->getRequest()->getQueryParameter());
        $this->api->getRequest()->setUrl($url);

        return new OrderResponse($this->api->getRequest());
    }

    function getOrder(string $orderNumber): OrderResponse
    {
        $parameter = new QueryParameter();
        $parameter->setOrderNumber($orderNumber);

        return $this->getOrders($parameter);
    }

}