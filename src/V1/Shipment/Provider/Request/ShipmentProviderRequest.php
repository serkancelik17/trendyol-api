<?php

namespace Serkancelik17\TrendyolApi\V1\Shipment\Provider\Request;

use Serkancelik17\TrendyolApi\V1\Config;
use Serkancelik17\TrendyolApi\V1\TrendyolRequest;

class ShipmentProviderRequest extends TrendyolRequest
{
    private string $endPoint = 'shipment-providers';

    public function __construct(Config $config)
    {
        parent::__construct($config, $this->endPoint);

        $this->run();
    }

}
