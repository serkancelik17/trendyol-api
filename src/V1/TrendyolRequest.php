<?php

namespace Serkancelik17\TrendyolApi\V1;

use Serkancelik17\ApiBase\Parameter;
use Serkancelik17\TrendyolApi\V1\Order\Order\Request\QueryParameter;
use Serkancelik17\ApiBase\Request\Authorization\BasicAuthorization;
use Serkancelik17\ApiBase\Request\Authorization\IAuthorization;
use Serkancelik17\ApiBase\Request\BaseRequest;
use Serkancelik17\ApiBase\Request\Header;
use Serkancelik17\ApiBase\Request\Url;

abstract class TrendyolRequest extends BaseRequest
{
    private Config $config;
    public function __construct(Config $config, string $endPoint, QueryParameter $queryParameters = null)
    {
        $this->config = $config;
        //Supplier ID varsa degistir
        $endPoint = str_replace(['{supplierId}'], [$this->config->getSupplierId()], $endPoint);

        $url = new Url("https://api.trendyol.com", $endPoint, "sapigw", $queryParameters);
        parent::__construct($this->createHeader(), $this->createAuthorization(), $url);
    }

    function createHeader(): Header
    {
        $parameters[] = new Parameter("Content-Type", "application/json");
        $parameters[] = new Parameter('User-Agent', $this->config->getSupplierId() . ' - SelfIntegration');

        return new Header($parameters);
    }

    function createAuthorization(): IAuthorization
    {
        return new BasicAuthorization($this->config->getUsername(), $this->config->getPassword());

    }

}
