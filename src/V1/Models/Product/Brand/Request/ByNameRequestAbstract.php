<?php

namespace Entegrator\TrendyolApi\V1\Models\Product\Brand\Request;


use Entegrator\TrendyolApi\V1\Config;
use Entegrator\TrendyolApi\V1\RequestAbstract;
use Entegrator\ApiBase\Parameter;

class ByNameRequestAbstract extends RequestAbstract
{
    private string $endPoint = 'brands/by-name';

    public function __construct(Config $config,string $name)
    {
        parent::__construct($config,$this->endPoint);
        $this->getUrl()->setQueryParameter([new Parameter('name', $name)]);

        $this->run();
    }

}
