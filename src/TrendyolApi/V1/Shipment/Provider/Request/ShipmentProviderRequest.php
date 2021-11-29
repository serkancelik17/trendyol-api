<?php

namespace Serkancelik17\TrendyolApi\V1\Shipment\Provider\Request;

use Serkancelik17\TrendyolApi\TrendyolRequest;

class ShipmentProviderRequest extends TrendyolRequest
{
    private string $endPoint = 'shipment-providers';

    public function __construct()
    {
        parent::__construct($this->endPoint);

        $this->run();
    }

}
