<?php

namespace Entegrator\TrendyolApi\V1\Schemas\Address;

use Entegrator\ApiBase\Response\Util;

class DefaultReturningAddress
{
    use Util;

    /**
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->hydrate($data);
    }

    /**
     * @var bool
     */
    private bool $present;


    /**
     * @return bool
     */
    public function isPresent(): bool
    {
        return $this->present;
    }

    /**
     * @param bool $present
     */
    public function setPresent(bool $present)
    {
        $this->present = $present;
    }
}