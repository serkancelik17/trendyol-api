<?php

namespace Entegrator\TrendyolApi\V1\Product\Category\Request;

use Entegrator\TrendyolApi\V1\Config;
use Entegrator\TrendyolApi\V1\TrendyolRequest;

class CategoryRequest extends TrendyolRequest
{
    private string $endPoint = 'product-categories';

    public function __construct(Config $config)
    {
        parent::__construct($config, $this->endPoint);

        $this->run();
    }

}
