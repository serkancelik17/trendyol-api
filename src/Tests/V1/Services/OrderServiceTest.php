<?php
namespace Entegrator\TrendyolApi\Tests\V1\Services;

use Entegrator\ApiBase\Abstracts\RequestAbstract;
use Entegrator\TrendyolApi\V1\Config;
use Entegrator\TrendyolApi\V1\Models\Order\Request\OrderRequest;
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
        $page = 999;

        $this->mOrderRequest->expects($this->once())->method('run')->willReturn('{"page":'.$page.'}');

        $this->assertEquals($page,$this->orderService->getOrders()->getPage());
    }

    function testGetOrderOrderNoDogruGeliyorMu() {
        $orderNumber = rand(100,1000);

        $this->mOrderRequest->expects($this->once())->method('run')->willReturn('{"content":[{"orderNumber" : '.$orderNumber.'}]}');

        $this->assertEquals($orderNumber,$this->orderService->getOrder(123)->getContent()[0]->getOrderNumber());
    }
}