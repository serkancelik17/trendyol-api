<?php

namespace Serkancelik17\TrendyolApi\V1\Product\Category\Request;

use Serkancelik17\TrendyolApi\TrendyolRequest;

class AttributeRequest extends TrendyolRequest
{
    private string $endPoint = 'product-categories/{categoryId}/attributes';

    public function __construct(int $categoryId)
    {
        $this->endPoint = str_replace('{categoryId}', $categoryId, $this->endPoint);
        parent::__construct($this->endPoint);

        $this->run();
    }

}
