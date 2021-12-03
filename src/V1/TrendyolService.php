<?php

namespace Serkancelik17\TrendyolApi\V1;

use Serkancelik17\ApiBase\Parameter;
use Serkancelik17\ApiBase\Request\Authorization\BasicAuthorization;
use Serkancelik17\ApiBase\Request\Authorization\IAuthorization;
use Serkancelik17\ApiBase\Request\Header;

class TrendyolService
{
    protected static Config $config;
    private TrendyolRequest $request;

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

    protected function createAuthorization(): IAuthorization
    {
        return new BasicAuthorization(self::$config->getUsername(),self::$config->getPassword());

    }

    /**
     * @return TrendyolRequest
     */
    public function getRequest(): TrendyolRequest
    {
        return $this->request;
    }

    /**
     * @param TrendyolRequest $request
     */
    public function setRequest(TrendyolRequest $request): void
    {
        $request->setHeader($this->createHeader());
        $request->setAuthorization($this->createAuthorization());
        $this->request = $request;
    }


}