<?php

namespace Entegrator\TrendyolApi\V1\Abstracts;

use Entegrator\ApiBase\Abstracts\RequestAbstract;
use Entegrator\ApiBase\Interfaces\AuthorizationInterface;
use Entegrator\ApiBase\Parameter;
use Entegrator\ApiBase\Request\Authorization\BasicAuthorization;
use Entegrator\ApiBase\Request\Header;
use Entegrator\TrendyolApi\V1\Config;

abstract class ServiceAbstract
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
     * @param RequestAbstract $request
     * @return RequestAbstract
     */
    public function setRequestHeaders(RequestAbstract $request): RequestAbstract
    {
        $request->setHeader($this->createHeader());
        $request->setAuthorization($this->createAuthorization());

        return $request;
    }
}