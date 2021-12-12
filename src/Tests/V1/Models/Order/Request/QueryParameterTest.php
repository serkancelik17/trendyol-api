<?php

namespace Entegrator\TrendyolApi\Tests\V1\Models\Order\Request;

use Entegrator\TrendyolApi\V1\Models\Order\Request\QueryParameter;
use PHPUnit\Framework\TestCase;

class QueryParameterTest extends TestCase
{
    private QueryParameter $qp;

    public function setUp() : void {
        $this->qp = new QueryParameter();
        $this->qp->setPage(rand())->setSize(rand())->setStatus(uniqid())->setStartDate(new \DateTime())->setEndDate(new \DateTime())->setOrderByField(uniqid())
            ->setShipmentPackageIds(rand())->setSupplierId(rand())->setOrderNumber(uniqid());
    }

    function testGetPage() {
        $this->assertIsInt($this->qp->getPage());
    }

    function testGetSize() {
        $this->assertIsInt($this->qp->getSize());
    }

    function testGetStatus() {
        $this->assertIsString($this->qp->getStatus());
    }

    function testGetStartDate() {
        $this->assertIsInt($this->qp->getStartDate());
    }

    function testGetEndDate() {
    $this->assertIsInt($this->qp->getEndDate());
}

    function testGetOrderByFiled() {
        $this->assertIsString($this->qp->getOrderByField());
    }


    function testShipmentPackageIds() {
        $this->assertIsInt($this->qp->getShipmentPackageIds());
    }

    function testGetSupplierId() {
        $this->assertIsInt($this->qp->getSupplierId());
    }

    function testOrderNumber() {
        $this->assertIsString($this->qp->getOrderNumber());
    }

    function testToString() {

        $string = (string) $this->qp;

        $this->assertStringContainsString('orderNumber',$string);
    }

}