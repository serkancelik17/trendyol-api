<?php

namespace Entegrator\TrendyolApi\V1\Models\Product\Brand\Response;

use Entegrator\ApiBase\Abstracts\ResponseAbstract;
use Entegrator\ApiBase\Interfaces\ResponseInterface;
use Entegrator\TrendyolApi\V1\Interfaces\RequestInterface;

class ByNameResponse extends ResponseAbstract implements ResponseInterface
{
    private int $id;
    private  string $name;

    public function __construct(RequestInterface $request)
    {
        parent::__construct($request);
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return ByNameResponse
     */
    public function setId(int $id): ByNameResponse
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return ByNameResponse
     */
    public function setName(string $name): ByNameResponse
    {
        $this->name = $name;
        return $this;
    }



}