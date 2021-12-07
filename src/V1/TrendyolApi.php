<?php

namespace Entegrator\TrendyolApi\V1;

use Entegrator\ApiBase\Abstracts\RequestAbstract;
use Entegrator\ApiBase\Parameter;
use Entegrator\ApiBase\Request\Authorization\BasicAuthorization;
use Entegrator\ApiBase\Request\Header;
use Entegrator\TrendyolApi\V1\Services\OrderService;
use Entegrator\TrendyolApi\V1\Services\ProductService;

class TrendyolApi
{
    protected static Config $config;

    protected static string $TEST_URL = 'https://stageapi.trendyol.com/stagesapigw';
    protected static string $PROD_URL = 'https://api.trendyol.com/sapigw';
    protected static string $URL  = '';

    public function __construct(Config $config, bool $isTest = false)
    {
        self::$URL = ($isTest) ? self::$TEST_URL : self::$PROD_URL;
        self::$config = $config;
    }

    protected function createHeader(): Header
    {
        $parameters[] = new Parameter("Content-Type", "application/json");
        $parameters[] = new Parameter('User-Agent', self::$config->getSupplierId() . ' - SelfIntegration');

        return new Header($parameters);
    }

    protected function createAuthorization(): BasicAuthorization
    {
        return new BasicAuthorization(self::$config->getUsername(),self::$config->getPassword());

    }

    /**
     * @return TrendyolApi
     */
    public function setRequestHeaders(RequestAbstract $requestAbstract): self
    {
        $requestAbstract->setHeader($this->createHeader());
        $requestAbstract->setAuthorization($this->createAuthorization());
        return $this;
    }

    public function getOrderService(): OrderService
    {
        return new OrderService(self::$config);
    }

    public function getProductService(): ProductService
    {
        return new ProductService(self::$config);
    }
}