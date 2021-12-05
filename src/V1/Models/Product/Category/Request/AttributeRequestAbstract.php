<?php

namespace Entegrator\TrendyolApi\V1\Orders\Product\Category\Request;

use Entegrator\TrendyolApi\V1\Config;
use Entegrator\TrendyolApi\V1\RequestAbstract;

class AttributeRequestAbstract extends RequestAbstract
{
    private string $endPoint = 'product-categories/{categoryId}/attributes';

    public function __construct(Config $config,int $categoryId)
    {
        $this->endPoint = str_replace('{categoryId}', $categoryId, $this->endPoint);
        parent::__construct($config,$this->endPoint);

        $this->run();
    }

}
