<?php

namespace Entegrator\TrendyolApi\V1\Product\Brand\Request;

use Entegrator\TrendyolApi\V1\TrendyolRequest;

class BrandRequest extends TrendyolRequest
{
    private string $endPoint = 'brands';

    public function __construct($config)
    {
        parent::__construct($config,$this->endPoint);

        $this->run();
    }

}
