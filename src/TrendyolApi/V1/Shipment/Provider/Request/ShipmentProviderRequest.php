<?php

namespace TrendyolApi\V1\Shipment\Provider\Request;

use TrendyolApi\TrendyolRequest;

class ShipmentProviderRequest extends TrendyolRequest
{
    private string $endPoint = 'shipment-providers';

    public function __construct()
    {
        parent::__construct($this->endPoint);

        $this->run();
    }

}
