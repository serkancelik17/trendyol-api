<?php

namespace TrendyolApi\V1\Order\Order\Request;


use TrendyolApi\V1\Order\Order\Request\QueryParameter;
use App\Libraries\Models\Request\IRequest;
use TrendyolApi\V1\TrendyolRequest;

class OrderRequest extends TrendyolRequest implements IRequest
{
    private string $endPoint = 'suppliers/{supplierId}/orders';

    public function __construct(QueryParameter $queryParameter = null)
    {
        parent::__construct($this->endPoint, $queryParameter);
    }
}
