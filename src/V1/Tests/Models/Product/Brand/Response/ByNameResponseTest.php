<?php

namespace Entegrator\TrendyolApi\V1\Tests\Models\Product\Brand\Response;

use Entegrator\TrendyolApi\V1\Models\Product\Brand\Request\ByNameRequest;
use Entegrator\TrendyolApi\V1\Models\Product\Brand\Response\ByNameResponse;
use PHPUnit\Framework\TestCase;

class ByNameResponseTest extends TestCase
{

    /**
     * @var ByNameRequest
     *
     */
    private mixed $mRequest;
    private int $fInt;

    public function setUp() : void
    {
        $this->mRequest = $this->createMock(ByNameRequest::class);
        $this->fInt = rand(1000,1000000);
    }
    public function testGetId()
    {
        $this->mRequest->method('run')->willReturn('{"id":"'.$this->fInt.'"}');
        $response = new ByNameResponse($this->mRequest);

        $expected = $this->fInt;
        $actual = $response->getId();

        $this->assertSame($expected,$actual);
    }

    public function testSetId()
    {
        $this->mRequest->method('run')->willReturn('{}');
        $response = new ByNameResponse($this->mRequest);

        $response->setId($this->fInt);
        $expected = $this->fInt;
        $actual = $response->getId();

        $this->assertSame($expected,$actual);
    }



}