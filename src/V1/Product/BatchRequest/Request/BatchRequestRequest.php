<?php

namespace Serkancelik17\TrendyolApi\V1\Product\BatchRequest\Request;

use Serkancelik17\TrendyolApi\TrendyolRequest;

class BatchRequestRequest extends TrendyolRequest
{
    private string $endPoint = 'suppliers/{supplierId}/products/batch-requests/{batchRequestId}';

    public function __construct(string $batchRequestId)
    {
        $this->endPoint = str_replace(['{batchRequestId}'], [$batchRequestId], $this->endPoint);
        parent::__construct($this->endPoint);

        $this->run();
    }

}
