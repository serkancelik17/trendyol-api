<?php
namespace Entegrator\Trendyol\V1\Tests\Services;

use DateTime;
use Entegrator\ApiBase\Abstracts\RequestAbstract;
use Entegrator\TrendyolApi\V1\Config;
use Entegrator\TrendyolApi\V1\Models\Order\Request\OrderRequest;
use Entegrator\TrendyolApi\V1\Models\Order\Request\QueryParameter;
use Entegrator\TrendyolApi\V1\Services\OrderService;
use Entegrator\TrendyolApi\V1\Services\ProductService;
use Entegrator\TrendyolApi\V1\TrendyolApi;
use PHPUnit\Framework\TestCase;

class OrderServiceTest extends TestCase
{
    private TrendyolApi $trendyolApi;
    private OrderService $orderService;
    /**
     * @var OrderRequest
     */
    private mixed $mOrderRequest;

    function  setUp() : void {
        $mConfig = $this->createMock(Config::class);
        $this->mOrderRequest = $this->createMock(OrderRequest::class);
        $this->trendyolApi = new TrendyolApi($mConfig,false,$this->mOrderRequest);
        $this->orderService = $this->trendyolApi->getOrderService();
}

    function testGetOrdersSayfaNumarasiGeliyorMu() {
        $page = rand(1000,1000000);

        $this->mOrderRequest->expects($this->once())->method('run')->willReturn('{"page":'.$page.'}');
        $queryParams = new QueryParameter();
        $queryParams->setPage($page)->setSupplierId($page)->setShipmentPackageIds($page)->setOrderByDirection(QueryParameter\OrderByDirectionQueryParameter::ASC)->setOrderByField("xxx")
        ->setStartDate(new DateTime())->setEndDate(new DateTime())->setStatus(QueryParameter\StatusQueryParameter::DELIVERED);
        $this->assertEquals($page,$this->orderService->getOrders()->getPage());
    }

    function testGetOrderOrderNoDogruGeliyorMu() {
        $orderNumber = rand(100,1000);

        $this->mOrderRequest->expects($this->once())->method('run')->willReturn('{"content":[{"orderNumber" : '.$orderNumber.'}]}');

        $this->assertEquals($orderNumber,$this->orderService->getOrder(123)->getContent()[0]->getOrderNumber());
    }
}