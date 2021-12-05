<?php
namespace Entegrator\TrendyolApi\V1\Models\Product\Brand\Response;

use Entegrator\ApiBase\Response\IResponse;
use Entegrator\TrendyolApi\V1\Abstracts\ResponseAbstractAbstract;

class BrandResponseAbstract extends ResponseAbstractAbstract implements IResponse
{
    use \Entegrator\ApiBase\Response\Util;

    public array $brands;

    public function __construct(\Entegrator\TrendyolApi\V1\Models\Product\Brand\Request\BrandRequestAbstract $request)
    {
        parent::__construct($request);
    }

    /**
     * @return array
     */
    public function getBrands(): array
    {
        return $this->brands;
    }

    /**
     * @param array $brands
     * @return BrandResponseAbstract
     */
    private function setBrands(array $brands): BrandResponseAbstract
    {
        foreach ($brands AS $item)
            $this->brands[] = new \Entegrator\TrendyolApi\V1\Schemas\Brand((array) $item);

        return $this;
    }



}