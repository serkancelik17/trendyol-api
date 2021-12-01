<?php

namespace Serkancelik17\TrendyolApi\V1\Product\Brand\Request;


use Serkancelik17\TrendyolApi\V1\Config;
use Serkancelik17\TrendyolApi\V1\TrendyolRequest;
use Serkancelik17\ApiBase\Parameter;

class ByNameRequest extends TrendyolRequest
{
    private string $endPoint = 'brands/by-name';

    public function __construct(Config $config,string $name)
    {
        parent::__construct($config,$this->endPoint);
        $this->getUrl()->setQueryParameter([new Parameter('name', $name)]);

        $this->run();
    }

}
