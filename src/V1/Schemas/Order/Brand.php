<?php
namespace Entegrator\TrendyolApi\V1\Schemas\Order;

use Entegrator\ApiBase\Response\Util;

class Brand
{
    Use Util;

    public int $id;
    public string $name;

    public function __construct(array $data)
    {
        $this->hydrate($data);
    }

}