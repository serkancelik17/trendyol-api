<?php

namespace Entegrator\TrendyolApi\V1\Tests\Models\Product\Category\Response;

use Entegrator\TrendyolApi\V1\Models\Product\Brand\Response\ByNameResponse;
use Entegrator\TrendyolApi\V1\Models\Product\Category\Request\AttributeRequest;
use Entegrator\TrendyolApi\V1\Models\Product\Category\Response\AttributeResponse;
use PHPUnit\Framework\TestCase;

class AttributeResponseTest extends TestCase
{
    private AttributeRequest $mRequest;
    private int $fInt;
    private string $fString;
    private bool $fBool;

    public function setUp() : void
    {
        $this->mRequest = $this->createMock(AttributeRequest::class);
        $this->fInt = rand(1000,1000000);
        $this->fString = uniqid();
        $this->fBool = (bool) rand(0,1);
    }

    public function testGetId()
    {
        $this->mRequest->method('run')->willReturn('{"id":"'.$this->fInt.'"}');
        $response = new AttributeResponse($this->mRequest);

        $expected = $this->fInt;
        $actual = $response->getId();

        $this->assertSame($expected,$actual);
    }

    public function testSetId()
    {
        $this->mRequest->method('run')->willReturn('{}');
        $response = new AttributeResponse($this->mRequest);

        $response->setId($this->fInt);
        $expected = $this->fInt;
        $actual = $response->getId();

        $this->assertSame($expected,$actual);
    }

    public function testGetDisplayName()
    {
        $randValue = $this->fString;
        $this->mRequest->method('run')->willReturn('{"displayName":"'. $randValue .'"}');
        $response = new AttributeResponse($this->mRequest);

        $expected = $randValue;
        $actual = $response->getDisplayName();

        $this->assertSame($expected,$actual);
    }


    public function testSetDisplayName()
    {
        $this->mRequest->method('run')->willReturn('{}');
        $response = new AttributeResponse($this->mRequest);

        $response->setDisplayName($this->fString);
        $expected = $this->fString;
        $actual = $response->getDisplayName();

        $this->assertSame($expected,$actual);
    }

    public function testGetCategoryAttributes()
    {
        $this->mRequest->method('run')->willReturn('{"categoryAttributes" : [{"categoryId" : '.$this->fInt.'}]}');
        $response = new AttributeResponse($this->mRequest);

        $expected = $this->fInt;
        $actual = $response->getCategoryAttributes()[0]->getCategoryId();

        $this->assertSame($expected,$actual);

    }

}