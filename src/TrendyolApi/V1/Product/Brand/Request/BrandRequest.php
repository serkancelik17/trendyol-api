<?php

namespace TrendyolApi\V1\Product\Brand\Request;

use TrendyolApi\TrendyolRequest;

class BrandRequest extends TrendyolRequest
{
    private string $endPoint = 'brands';

    public function __construct()
    {
        parent::__construct($this->endPoint);

        $this->run();
    }

}
