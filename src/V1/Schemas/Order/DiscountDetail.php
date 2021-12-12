<?php

namespace Entegrator\TrendyolApi\V1\Schemas\Order;

use Entegrator\TrendyolApi\V1\Abstracts\SchemaAbstract;

class DiscountDetail extends SchemaAbstract
{
    /**
     * @param array $data
     */
    public function __construct(array $data)
    {
        parent::__construct($data);
    }

    private float $lineItemPrice;
    private float $liteItemDiscount;
}
