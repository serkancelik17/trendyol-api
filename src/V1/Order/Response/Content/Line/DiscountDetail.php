<?php

namespace Entegrator\TrendyolApi\V1\Order\Response\Content\Line;

use Entegrator\ApiBase\Response\Util;

class DiscountDetail
{
    use Util;

    private float $lineItemPrice;
    private float $liteItemDiscount;

    public function __construct(array $data)
    {
        $this->hydrate($data);
    }
}
