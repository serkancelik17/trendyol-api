<?php

namespace Entegrator\TrendyolApi\V1\Models\Product\Brand\Response;

use Entegrator\ApiBase\Abstracts\RequestAbstract;
use Entegrator\ApiBase\Abstracts\ResponseAbstract;
use Entegrator\ApiBase\Interfaces\ResponseInterface;

class ByNameResponse extends ResponseAbstract implements ResponseInterface
{
    public int $id;
    public string $name;

    public function __construct(RequestAbstract $request)
    {
        parent::__construct($request);
    }

}