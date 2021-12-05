<?php

namespace Entegrator\TrendyolApi\V1\Abstracts;

use Entegrator\ApiBase\Response\Util;

class SchemaAbstract
{
    use Util;

    public function __construct(array $data)
    {
        $this->hydrate($data);
    }
}