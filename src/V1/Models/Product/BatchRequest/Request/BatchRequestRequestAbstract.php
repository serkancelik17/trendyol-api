<?php

namespace Entegrator\TrendyolApi\V1\Models\Product\BatchRequest\Request;

use Entegrator\ApiBase\Abstracts\RequestAbstract;
use Entegrator\TrendyolApi\V1\Config;

class BatchRequestRequestAbstract extends RequestAbstract
{
    private string $endPoint = 'suppliers/{supplierId}/products/batch-requests/{batchRequestId}';

    public function __construct(Config $config,string $batchRequestId)
    {
        $this->endPoint = str_replace(['{batchRequestId}'], [$batchRequestId], $this->endPoint);
        parent::__construct($config,$this->endPoint);

        $this->run();
    }

}
