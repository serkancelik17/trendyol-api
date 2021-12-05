<?php

namespace Entegrator\TrendyolApi\V1\Models\Order\Shipment\Provider\Request;

use Entegrator\ApiBase\Abstracts\RequestAbstract;

class ShipmentProviderRequestAbstract extends RequestAbstract
{
    private string $endPoint = 'shipment-providers';

    public function __construct()
    {
        $this->run();
    }

}
