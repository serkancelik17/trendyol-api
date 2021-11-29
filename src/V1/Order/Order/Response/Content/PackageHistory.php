<?php

namespace Serkancelik17\TrendyolApi\V1\Order\Order\Response\Content;

use Serkancelik17\ApiBase\Response\Util;

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
