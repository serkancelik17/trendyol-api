<?php

namespace Entegrator\TrendyolApi\V1\Orders\Product\Category\Request;

use Entegrator\TrendyolApi\V1\Config;
use Entegrator\TrendyolApi\V1\RequestAbstract;

class CategoryRequestAbstract extends RequestAbstract
{
    private string $endPoint = 'product-categories';

    public function __construct(Config $config)
    {
        parent::__construct($config, $this->endPoint);

        $this->run();
    }

}
