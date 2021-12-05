<?php

namespace Entegrator\TrendyolApi\V1\Abstracts;


use Entegrator\ApiBase\Abstracts\RequestAbstract;
use Entegrator\ApiBase\Abstracts\ResponseAbstract;

abstract class ResponseAbstractAbstract extends ResponseAbstract
{
    public function __construct(RequestAbstract $request)
    {
        parent::__construct($request);
    }

}
