<?php

namespace Serkancelik17\TrendyolApi\V1\Product\Category\Request;

use Serkancelik17\TrendyolApi\TrendyolRequest;

class CategoryRequest extends TrendyolRequest
{
    private string $endPoint = 'product-categories';

    public function __construct()
    {
        parent::__construct($this->endPoint);

        $this->run();
    }

}
