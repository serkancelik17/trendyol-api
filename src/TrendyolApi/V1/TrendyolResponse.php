<?php

namespace Serkancelik17\TrendyolApi\V1;

use App\Libraries\Models\Response\BaseResponse;

abstract class TrendyolResponse extends BaseResponse
{
    public function __construct(TrendyolRequest $request)
    {
        parent::__construct($request);
    }

}
