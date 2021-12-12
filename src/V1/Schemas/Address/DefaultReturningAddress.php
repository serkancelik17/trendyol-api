<?php

namespace Entegrator\TrendyolApi\V1\Schemas\Address;

use Entegrator\ApiBase\Response\Util;
use Entegrator\TrendyolApi\V1\Abstracts\SchemaAbstract;

class DefaultReturningAddress extends  SchemaAbstract
{
    /**
     * @param array $data
     */
    public function __construct(array $data)
    {
        parent::__construct($data);
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