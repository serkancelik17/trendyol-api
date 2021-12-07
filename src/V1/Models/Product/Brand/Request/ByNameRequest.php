<?php

namespace Entegrator\TrendyolApi\V1\Models\Product\Brand\Request;


use Entegrator\ApiBase\Abstracts\RequestAbstract;
use Entegrator\TrendyolApi\V1\Config;
use Entegrator\ApiBase\Parameter;

class ByNameRequest extends RequestAbstract
{
    private string $endPoint = 'brands/by-name';

    public function __construct()
    {

        $this->run();
    }

}
