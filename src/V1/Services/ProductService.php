<?php

namespace Entegrator\TrendyolApi\V1\Services;

use Entegrator\ApiBase\Request\Url;
use Entegrator\TrendyolApi\V1\Abstracts\ServiceAbstract;
use Entegrator\TrendyolApi\V1\Config;
use Entegrator\TrendyolApi\V1\Models\Product\Brand\Request\BrandRequestAbstract;
use Entegrator\TrendyolApi\V1\Models\Product\Brand\Response\BrandResponseAbstract;

class ProductService extends ServiceAbstract
{

    public function __construct(Config $config, bool $isTest = false)
    {
        parent::__construct($config, $isTest);
    }

    public function getBrands() {
        $request = new BrandRequestAbstract();
        $endPoint = '/brands';
        $url = new Url(self::$URL, $endPoint, null);

        $request->setUrl($url);
        $this->setRequestHeaders($request);

        return new BrandResponseAbstract($request);
    }
}