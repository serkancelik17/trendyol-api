<?php

namespace Entegrator\TrendyolApi\V1\Services;

use Entegrator\ApiBase\Abstracts\RequestAbstract;
use Entegrator\ApiBase\Abstracts\ResponseAbstract;
use Entegrator\ApiBase\Interfaces\QueryParameterInterface;
use Entegrator\ApiBase\Request\Url;
use Entegrator\ApiBase\Response\Util;
use Entegrator\TrendyolApi\V1\Models\Product\BatchRequest\Request\BatchRequestRequest;
use Entegrator\TrendyolApi\V1\Models\Product\BatchRequest\Response\BatchRequestResponse;
use Entegrator\TrendyolApi\V1\Models\Product\Brand\Request\ByNameRequest;
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
    private RequestAbstract $request;
    private ResponseAbstract $response;
    private QueryParameterInterface $queryParameter;

    use Util;

    public function getBrands(QueryParameter $queryParameter = null) : BrandResponse
    {
        $this->queryParameter = $queryParameter ?? new QueryParameter();
        $this->request = new BrandRequest();

        $endPoint = '/brands';

        $url = new Url(self::$URL, $endPoint, null,$this->queryParameter);
        $this->request->setUrl($url);
        $this->setRequestHeaders($this->request);


        $this->response = new BrandResponse($this->request);

        return $this->response;
    }


    public function getBrandsByName(ByNameRequest\QueryParameter $queryParameter) : ByNameResponse
    {
        $this->queryParameter = $queryParameter;
        $this->request = new ByNameRequest();

        $endPoint = '/brands/by-name';

        $url = new Url(self::$URL, $endPoint, null,$this->queryParameter);
        $this->request->setUrl($url);
        $this->setRequestHeaders($this->request);


        $this->response = new ByNameResponse($this->request);

        return $this->response;
    }

    public function getCategories() : AttributeResponse
    {
        $this->request = new CategoryRequest();

        $endPoint = '/product-categories';
        $url = new Url(self::$URL, $endPoint);

        $this->request->setUrl($url);
        $this->setRequestHeaders($this->request);

        return new AttributeResponse($this->request);
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