<?php

namespace Serkancelik17\TrendyolApi\V1;

use Serkancelik17\ApiBase\Response\BaseResponse;

abstract class TrendyolResponse extends BaseResponse
{
    public function __construct(TrendyolRequest $request)
    {
        parent::__construct($request);
    }

}
