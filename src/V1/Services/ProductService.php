<?php

namespace Entegrator\TrendyolApi\V1\Services;

use Entegrator\ApiBase\Interfaces\QueryParameterInterface;
use Entegrator\ApiBase\Request\Url;
use Entegrator\ApiBase\Response\Util;
use Entegrator\TrendyolApi\V1\Models\Order\Request\OrderRequest;
use Entegrator\TrendyolApi\V1\Models\Product\Address\Request\AddressRequest;
use Entegrator\TrendyolApi\V1\Models\Product\Supplier\Address\Response\AddressResponse;
use Entegrator\TrendyolApi\V1\Models\Product\BatchRequest\Request\BatchRequestRequest;
use Entegrator\TrendyolApi\V1\Models\Product\BatchRequest\Response\BatchRequestResponse;
use Entegrator\TrendyolApi\V1\Models\Product\Brand\Request\BrandRequest;
use Entegrator\TrendyolApi\V1\Models\Product\Brand\Request\ByNameRequest;
use Entegrator\TrendyolApi\V1\Models\Product\Brand\Request\QueryParameter;
use Entegrator\TrendyolApi\V1\Models\Product\Brand\Response\ByNameResponse;
use Entegrator\TrendyolApi\V1\Models\Product\Category\Request\AttributeRequest;
use Entegrator\TrendyolApi\V1\Models\Product\Category\Request\CategoryRequest;
use Entegrator\TrendyolApi\V1\Models\Product\Category\Response\AttributeResponse;
use Entegrator\TrendyolApi\V1\Models\Product\Category\Response\CategoryResponse;
use Entegrator\TrendyolApi\V1\TrendyolApi;
use Entegrator\TrendyolApi\V1\Models\Product\Brand\Response\BrandResponse;
use Exception;

class ProductService
{
    private QueryParameterInterface $queryParameter;
    private TrendyolApi $api;

    use Util;

    /**
     * @param TrendyolApi $api
     */
    public function __construct(TrendyolApi $api)
    {
        $this->api = $api;
    }

    /**
     * @throws Exception
     */
    public function getBrands(QueryParameter $queryParameter = null) : BrandResponse
    {
        $this->queryParameter = $queryParameter ?? new QueryParameter();
        $this->api->setRequest($this->api->getRequest() ?? new BrandRequest());
        $this->api->setRequestHeaders();

        $endPoint = '/brands';

        $url = new Url(TrendyolApi::$URL, $endPoint, null,$this->queryParameter);
        $this->api->getRequest()->setUrl($url);

        $response = new BrandResponse($this->api->getRequest());


        return $response;
    }

    /**
     * @param ByNameRequest\QueryParameter $queryParameter
     * @return ByNameResponse
     */
    public function getBrandsByName(ByNameRequest\QueryParameter $queryParameter) : ByNameResponse
    {
        $this->queryParameter = $queryParameter;
        $this->api->setRequest($this->api->getRequest() ?? new ByNameRequest());

        $endPoint = '/brands/by-name';

        $url = new Url(TrendyolApi::$URL, $endPoint, null,$this->queryParameter);
        $this->api->getRequest()->setUrl($url);
        $this->api->setRequestHeaders();


        $response = new ByNameResponse($this->api->getRequest());

        return $response;
    }

    /**
     * @return AttributeResponse
     */
    public function getCategories() : CategoryResponse
    {
        $this->api->setRequest($this->api->getRequest() ?? new CategoryRequest());

        $endPoint = '/product-categories';
        $url = new Url(TrendyolApi::$URL, $endPoint);

        $this->api->getRequest()->setUrl($url);
        $this->api->setRequestHeaders();

        return new CategoryResponse($this->api->getRequest());
    }

    /**
     * @param string $batchRequestId
     * @return BatchRequestResponse
     */
    public function getBatchRequest(string $batchRequestId): BatchRequestResponse
    {
        $this->api->setRequest($this->api->getRequest() ?? new BatchRequestRequest());
        $endpoint = '/suppliers/'.TrendyolApi::$config->getSupplierId().'/products/batch-requests/'.$batchRequestId;
        $url = new Url(TrendyolApi::$URL,$endpoint);

        $this->api->getRequest()->setUrl($url);
        $this->api->setRequestHeaders();

        return new BatchRequestResponse($this->api->getRequest());
    }

    /**
     * @param int $categoryId
     * @return AttributeResponse
     */
    public function getAttributes(int $categoryId): AttributeResponse
    {

        $this->api->setRequest($this->api->getRequest() ?? new AttributeRequest());
        $endPoint = '/product-categories/'.$categoryId.'/attributes';
        $url = new Url(TrendyolApi::$URL, $endPoint);

        $this->api->getRequest()->setUrl($url);
        $this->api->setRequestHeaders();

        return new AttributeResponse($this->api->getRequest());
    }

    /**
     * @return AddressResponse
     */
    public function getSuppliersAddresses(): AddressResponse
    {
        $this->api->setRequest($this->api->getRequest() ?? new AddressRequest());
        $endPoint = '/suppliers/'.TrendyolApi::$config->getSupplierId().'/addresses';
        $url = new Url(TrendyolApi::$URL, $endPoint);

        $this->api->getRequest()->setUrl($url);
        $this->api->setRequestHeaders();

        return new AddressResponse($this->api->getRequest());
    }
}