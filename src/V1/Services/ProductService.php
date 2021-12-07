<?php

namespace Entegrator\TrendyolApi\V1\Services;

use Entegrator\ApiBase\Abstracts\ResponseAbstract;
use Entegrator\ApiBase\Request\Url;
use Entegrator\ApiBase\Response\Util;
use Entegrator\TrendyolApi\V1\Models\Product\BatchRequest\Request\BatchRequestRequest;
use Entegrator\TrendyolApi\V1\Models\Product\BatchRequest\Response\BatchRequestResponse;
use Entegrator\TrendyolApi\V1\Models\Product\Brand\Request\QueryParameter;
use Entegrator\TrendyolApi\V1\Models\Product\Brand\Response\ByNameResponse;
use Entegrator\TrendyolApi\V1\Models\Product\Category\Request\AttributeRequest;
use Entegrator\TrendyolApi\V1\Models\Product\Category\Request\CategoryRequest;
use Entegrator\TrendyolApi\V1\Models\Product\Category\Response\AttributeResponse;
use Entegrator\TrendyolApi\V1\Schemas\Brand;
use Entegrator\TrendyolApi\V1\TrendyolApi;
use Entegrator\TrendyolApi\V1\Models\Product\Brand\Request\BrandRequest;
use Entegrator\TrendyolApi\V1\Models\Product\Brand\Response\BrandResponse;

class ProductService extends TrendyolApi
{
    use Util;

    public function getBrands(string $name = null) : Brand|BrandResponse
    {
        $queryParams = null;
        $endPoint = '/brands';

        if ($name) { // Eger isim filtresi varsa
        $endPoint .= '/by-name';
        $queryParams = new QueryParameter();
        $queryParams->setName($name);
        }

        $request = new BrandRequest($queryParams);

        $url = new Url(self::$URL, $endPoint, null,$queryParams);

        $request->setUrl($url);
        $this->setRequestHeaders($request);
        $response = null;

        if($name) {
            $response = json_decode($request->run(),true);
           $response = new Brand($response[0]);
        } else {
            $response = new BrandResponse($request);
        }

        return $response;
    }

    public function getCategories() : AttributeResponse
    {
        $request = new CategoryRequest();
        $endPoint = '/product-categories';
        $url = new Url(self::$URL, $endPoint);

        $request->setUrl($url);
        $this->setRequestHeaders($request);

        return new AttributeResponse($request);
    }
    public function getBatchRequests(string $batchRequestId): BatchRequestResponse
    {
        $request = new BatchRequestRequest($batchRequestId);
        $endpoint = '/suppliers/'.self::$config->getSupplierId().'/products/batch-requests/'.$batchRequestId;
        $url = new Url(self::$URL,$endpoint);

        $request->setUrl($url);
        $this->setRequestHeaders($request);

        return new BatchRequestResponse($request);
    }

    public function getAttributes(int $categoryId): AttributeResponse
    {

        $request = new AttributeRequest();
        $endPoint = '/product-categories/'.$categoryId.'/attributes';
        $url = new Url(self::$URL, $endPoint);

        $request->setUrl($url);
        $this->setRequestHeaders($request);

        return new AttributeResponse($request);
    }
}