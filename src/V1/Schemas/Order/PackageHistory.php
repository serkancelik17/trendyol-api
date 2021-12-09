<?php

namespace Entegrator\TrendyolApi\V1\Schemas\Order;

use Entegrator\ApiBase\Response\Util;

class PackageHistory
{
    use Util;

    private int $createdDate;
    private string $status;

    public function __construct(array $data)
    {
        $this->hydrate($data);
    }

}
