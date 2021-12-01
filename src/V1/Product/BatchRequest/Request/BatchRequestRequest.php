<?php

namespace Serkancelik17\TrendyolApi\V1\Product\BatchRequest\Request;

use Serkancelik17\TrendyolApi\V1\Config;
use Serkancelik17\TrendyolApi\V1\TrendyolRequest;

class BatchRequestRequest extends TrendyolRequest
{
    private string $endPoint = 'suppliers/{supplierId}/products/batch-requests/{batchRequestId}';

    public function __construct(Config $config,string $batchRequestId)
    {
        $this->endPoint = str_replace(['{batchRequestId}'], [$batchRequestId], $this->endPoint);
        parent::__construct($config,$this->endPoint);

        $this->run();
    }

}
