<?php

namespace TrendyolApi\V1\Product\Brand\Request;


use TrendyolApi\V1\TrendyolRequest;
use App\Libraries\Models\Parameter;

class ByNameRequest extends TrendyolRequest
{
    private string $endPoint = 'brands/by-name';

    public function __construct(string $name)
    {
        parent::__construct($this->endPoint);
        $this->getUrl()->setQueryParameter([new Parameter('name', $name)]);

        $this->run();
    }

}
