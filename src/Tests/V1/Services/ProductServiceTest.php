<?php
namespace Entegrator\TrendyolApi\Tests\V1\Services;

use Entegrator\TrendyolApi\V1\Config;
use Entegrator\TrendyolApi\V1\Models\Order\Request\OrderRequest;
use Entegrator\TrendyolApi\V1\Models\Product\Brand\Request\BrandRequest;
use Entegrator\TrendyolApi\V1\Models\Product\Brand\Request\ByNameRequest;
use Entegrator\TrendyolApi\V1\Models\Product\Category\Request\CategoryRequest;
use Entegrator\TrendyolApi\V1\Services\ProductService;
use Entegrator\TrendyolApi\V1\TrendyolApi;
use PHPUnit\Framework\TestCase;

class ProductServiceTest extends TestCase
{
    private TrendyolApi $trendyolApi;
    /**
     * @var Config
     */
    private mixed $mConfig;

    function setUp(): void
    {
        $this->mConfig = $this->createMock(Config::class);
    }

    public function testGetBrandsAdDogruGeliyorMu() {
        $name = uniqid();
        $mBrandRequest = $this->createMock(BrandRequest::class);
        $this->trendyolApi = new TrendyolApi($this->mConfig, false, $mBrandRequest);
        $productService = $this->trendyolApi->getProductService();

        $mBrandRequest->expects($this->once())->method('run')->willReturn('{"brands":[{"name" : "'.$name.'"}]}');

        $this->assertSame($name,$productService->getBrands()->getBrands()[0]->getName());
    }

    public function testGetBrandsByNameAdDogruGeliyorMu() {
        $name = uniqid();
        $mBrandByNameRequest = $this->createMock(ByNameRequest::class);
        $this->trendyolApi = new TrendyolApi($this->mConfig, false, $mBrandByNameRequest);
        $productService = $this->trendyolApi->getProductService();

        $mBrandByNameRequest->expects($this->once())->method('run')->willReturn('{"name" : "'.$name.'"}');

        $this->assertSame($name,$productService->getBrandsByName(new ByNameRequest\QueryParameter($name))->getName());
    }

    public function testGetCategoriesAdDogruGeliyorMu() {
        $name = uniqid();
        $mCategoryRequest = $this->createMock(CategoryRequest::class);
        $this->trendyolApi = new TrendyolApi($this->mConfig, false, $mCategoryRequest);
        $productService = $this->trendyolApi->getProductService();

        $mCategoryRequest->expects($this->once())->method('run')->willReturn('{"categories" : [{"name" : "'.$name.'"}]}');

        $this->assertSame($name,$productService->getCategories()->getCategories()[0]->getName());
    }
}
