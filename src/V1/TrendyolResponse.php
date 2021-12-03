<?php

namespace Entegrator\TrendyolApi\V1;

use Entegrator\ApiBase\Request\IRequest;
use Entegrator\ApiBase\Response\BaseResponse;

abstract class TrendyolResponse extends BaseResponse
{
    public function __construct(TrendyolRequest $request)
    {
        parent::__construct($request);
    }

}
