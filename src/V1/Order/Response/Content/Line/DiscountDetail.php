<?php

namespace Serkancelik17\TrendyolApi\V1\Order\Response\Content\Line;

use Serkancelik17\ApiBase\Response\Util;

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
