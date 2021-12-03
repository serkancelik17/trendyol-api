<?php
namespace Entegrator\TrendyolApi\V1\Services;

use Entegrator\ApiBase\Request\Url;
use Entegrator\TrendyolApi\V1\Abstracts\ServiceAbstract;
use Entegrator\TrendyolApi\V1\Config;
use Entegrator\TrendyolApi\V1\Order\Request\OrderRequest;
use Entegrator\TrendyolApi\V1\Order\Request\QueryParameter;
use Entegrator\TrendyolApi\V1\Order\Response\OrderResponse;

class OrderService extends ServiceAbstract
{

    public function __construct(Config $config, bool $isTest = false)
    {
        parent::__construct($config, $isTest);
    }

    function getOrders(OrderRequest $orderRequest): OrderResponse
    {
        $endPoint = '/suppliers/'.self::$config->getSupplierId().'/orders';

        $url = new Url(self::$URL, $endPoint, null, $orderRequest->getQueryParameter());
        $this->setHeaderAndFooter($orderRequest);
        $orderRequest->setUrl($url);

        return new OrderResponse($orderRequest);
    }

    function getOrder(string $orderNumber): OrderResponse
    {

        $parameter = new QueryParameter();
        $parameter->setOrderNumber($orderNumber);
        $orderRequest = new OrderRequest($parameter);

        return $this->getOrders($orderRequest);
    }

    /**
     * @param OrderRequest $orderRequest
     */
    private function setHeaderAndFooter(OrderRequest $orderRequest): void
    {
        $orderRequest->setHeader($this->createHeader());
        $orderRequest->setAuthorization($this->createAuthorization());
    }

}