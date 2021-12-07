<?php
namespace Entegrator\TrendyolApi\V1\Models\Product\Brand\Response;

use Entegrator\ApiBase\Abstracts\ResponseAbstract;
use Entegrator\ApiBase\Interfaces\ResponseInterface;
use Entegrator\ApiBase\Response\Util;
use Entegrator\TrendyolApi\V1\Models\Product\Brand\Request\BrandRequest;
use Entegrator\TrendyolApi\V1\Schemas\Brand;

class BrandResponse extends ResponseAbstract implements ResponseInterface
{
    use Util;

    /** @var Brand[] */
    public array $brands;

    public function __construct(BrandRequest $request)
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
     * @return BrandResponse
     */
    private function setBrands(array $brands): BrandResponse
    {
        foreach ($brands AS $item)
            $this->brands[] = new \Entegrator\TrendyolApi\V1\Schemas\Brand((array) $item);

        return $this;
    }
}