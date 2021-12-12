<?php

namespace Entegrator\TrendyolApi\V1\Tests\Models\Order\Response;

use Entegrator\TrendyolApi\V1\Models\Order\Request\OrderRequest;
use Entegrator\TrendyolApi\V1\Models\Order\Response\OrderResponse;
use PHPUnit\Framework\TestCase;

class OrderResponseTest extends TestCase
{

    private int $fNumber;
    /**
     * @var OrderRequest
     */
    private mixed $mRequest;
    private OrderResponse $response;

    function setUp(): void
    {
        parent::setUp(); // TODO: Change the autogenerated stub
        $this->fNumber = rand(1000,1000000);
        $this->mRequest = $this->createMock(OrderRequest::class);
    }

    function testSetTotalElements() {
        $this->mRequest->method('run')->willReturn('{}');
        $this->response = new OrderResponse($this->mRequest);

        $this->response->setTotalElements($this->fNumber);

        $this->assertSame($this->fNumber,$this->response->getTotalElements());
    }

    function testSetTotalPages() {
        $this->mRequest->method('run')->willReturn('{"totalPages":"'.$this->fNumber.'"}');
        $this->response = new OrderResponse($this->mRequest);

        $this->response->setTotalPages($this->fNumber);

        $this->assertSame($this->fNumber, $this->response->getTotalPages());
    }

    function testGetTotalPages() {
        $this->mRequest->method('run')->willReturn('{"totalPages":"'.$this->fNumber.'"}');
        $this->response = new OrderResponse($this->mRequest);

        $totalPages = $this->response->getTotalPages();

        $this->assertSame($this->fNumber, $totalPages);
    }
}