<?php

namespace Serkancelik17\TrendyolApi\V1\Order\Order\Request;


use Serkancelik17\ApiBase\Request\IRequest;
use Serkancelik17\TrendyolApi\V1\Config;
use Serkancelik17\TrendyolApi\V1\TrendyolRequest;

class OrderRequest extends TrendyolRequest implements IRequest
{
    private string $endPoint = 'suppliers/{supplierId}/orders';

    public function __construct(Config $config, QueryParameter $queryParameter = null)
    {
        parent::__construct($config,$this->endPoint, $queryParameter);
    }
}
