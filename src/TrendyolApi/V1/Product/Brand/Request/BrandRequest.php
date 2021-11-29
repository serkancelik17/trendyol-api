<?php

namespace Serkancelik17\TrendyolApi\V1\Product\Brand\Request;

use Serkancelik17\TrendyolApi\TrendyolRequest;

class BrandRequest extends TrendyolRequest
{
    private string $endPoint = 'brands';

    public function __construct()
    {
        parent::__construct($this->endPoint);

        $this->run();
    }

}
