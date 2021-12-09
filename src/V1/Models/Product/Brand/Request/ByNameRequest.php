<?php

namespace Entegrator\TrendyolApi\V1\Models\Product\Brand\Request;


use Entegrator\ApiBase\Abstracts\RequestAbstract;
use Entegrator\TrendyolApi\V1\Config;
use Entegrator\ApiBase\Parameter;
use Entegrator\TrendyolApi\V1\Interfaces\RequestInterface;

class ByNameRequest extends RequestAbstract implements RequestInterface
{
    private string $endPoint = 'brands/by-name';

    public function __construct()
    {
    }

}
