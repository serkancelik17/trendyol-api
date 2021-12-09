<?php

namespace Entegrator\TrendyolApi\V1;

use Entegrator\ApiBase\Abstracts\RequestAbstract;
use Entegrator\ApiBase\Interfaces\ResponseInterface;
use Entegrator\ApiBase\Parameter;
use Entegrator\ApiBase\Request\Authorization\BasicAuthorization;
use Entegrator\ApiBase\Request\Header;
use Entegrator\TrendyolApi\V1\Interfaces\RequestInterface;
use Entegrator\TrendyolApi\V1\Services\OrderService;
use Entegrator\TrendyolApi\V1\Services\ProductService;

class TrendyolApi
{
    protected ?RequestInterface $request = null;
    public static Config $config;
    protected static bool $isTest;

    protected static string $TEST_URL = 'https://stageapi.trendyol.com/stagesapigw';
    protected static string $PROD_URL = 'https://api.trendyol.com/sapigw';
    public static string $URL  = '';

    public function __construct(Config $config, bool $isTest = false,RequestInterface $request = null)
    {
        self::$URL = ($isTest) ? self::$TEST_URL : self::$PROD_URL;
        self::$config = $config;
        self::$isTest = $isTest;
        if($request)
            $this->request = $request;
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
    public function setRequestHeaders(): self
    {
        $this->request->setHeader($this->createHeader());
        $this->request->setAuthorization($this->createAuthorization());
        return $this;
    }

    public function getOrderService(): OrderService
    {
        return new OrderService($this);
    }

    public function getProductService(): ProductService
    {
        return new ProductService($this);
    }



    /**
     * @return RequestInterface|null
     */
    public function getRequest(): RequestInterface|null
    {
        return $this->request;
    }

    /**
     * @param RequestInterface $request
     * @return TrendyolApi
     */
    public function setRequest(RequestInterface $request): TrendyolApi
    {
        $this->request = $request;
        return $this;
    }

}