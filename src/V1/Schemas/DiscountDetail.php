<?php

namespace Entegrator\TrendyolApi\V1\Schemas;

use Entegrator\ApiBase\Response\Util;
use Entegrator\TrendyolApi\V1\Abstracts\SchemaAbstract;

class DiscountDetail extends SchemaAbstract
{
    use Util;

    private float $lineItemPrice;
    private float $liteItemDiscount;

    public function __construct(array $data)
    {
        parent::__construct($data);
    }
}
