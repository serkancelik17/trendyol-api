<?php

namespace Serkancelik17\TrendyolApi\V1\Order\Order\Request;


use Serkancelik17\ApiBase\Request\IRequest;
use Serkancelik17\TrendyolApi\V1\TrendyolRequest;

class OrderRequest extends TrendyolRequest implements IRequest
{
    private string $endPoint = 'suppliers/{supplierId}/orders';

    public function __construct(QueryParameter $queryParameter = null)
    {
        parent::__construct($this->endPoint, $queryParameter);
    }
}
