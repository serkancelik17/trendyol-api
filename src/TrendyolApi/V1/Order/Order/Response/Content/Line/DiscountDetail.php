<?php

namespace Serkancelik17\TrendyolApi\V1\Order\Order\Response\Content\Line;

use App\Libraries\Models\Response\Util;

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
