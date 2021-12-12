<?php

namespace Entegrator\Trendyol\V1\Tests\Models\Order\Request;

use Entegrator\TrendyolApi\V1\Models\Order\Request\OrderRequest;
use Entegrator\TrendyolApi\V1\Models\Order\Request\QueryParameter;
use PHPUnit\Framework\TestCase;

class OrderRequestTest extends TestCase
{

    public function testGetQueryParameter() {
        $queryParams = new QueryParameter();
        $queryParams->setPage($fNumber = rand(100,1000));
        $queryParams->setStatus($fString = uniqid());
        $queryParams->setSize($fNumber);
        $req = new OrderRequest($queryParams);

        $this->assertEquals($fNumber, $req->getQueryParameter()->getPage());
        $this->assertEquals($fNumber, $req->getQueryParameter()->getSize());
        $this->assertEquals($fString, $req->getQueryParameter()->getStatus());
    }

    public function testSetQueryParameter() {
        $param1 = new QueryParameter();
        $param2 = new QueryParameter();
        $param2->setPage(rand());

        $req = new OrderRequest($param1);

        $req->setQueryParameter($param2);

        $this->assertSame($param2,$req->getQueryParameter());
    }


}