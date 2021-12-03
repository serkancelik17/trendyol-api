<?php

namespace Entegrator\TrendyolApi\V1\Order\Shipment\Provider\Request;

use Entegrator\TrendyolApi\V1\Config;
use Entegrator\TrendyolApi\V1\TrendyolRequest;

class ShipmentProviderRequest extends TrendyolRequest
{
    private string $endPoint = 'shipment-providers';

    public function __construct(Config $config)
    {
        parent::__construct($config, $this->endPoint);

        $this->run();
    }

}
