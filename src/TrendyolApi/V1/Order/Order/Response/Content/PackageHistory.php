<?php

namespace Serkancelik17\TrendyolApi\V1\Order\Order\Response\Content;

use App\Libraries\Models\Response\Util;

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
