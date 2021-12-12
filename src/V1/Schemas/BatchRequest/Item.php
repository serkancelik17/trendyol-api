<?php

namespace Entegrator\TrendyolApi\V1\Schemas\BatchRequest;

use Entegrator\TrendyolApi\V1\Abstracts\SchemaAbstract;
use Entegrator\TrendyolApi\V1\Schemas\BatchRequest\Item\RequestItem;

class Item extends SchemaAbstract
{

    private RequestItem $requestItem;
    private string $status;
    private array $failureReasons = []; //@TODO içindekileri bulamadim. Bulunca modellenmesi lazim.

    /**
     * @param array $data
     */
    public function __construct(array $data)
    {
        parent::__construct($data);
    }


    public function getRequestItem(): RequestItem
    {
        return $this->requestItem;
    }

    /**
     * @param array $data
     * @return Item
     */
    public function setRequestItem(array $data): Item
    {
        $this->requestItem = new RequestItem($data);
        return $this;
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @param string $status
     * @return Item
     */
    public function setStatus(string $status): Item
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return array
     */
    public function getFailureReasons(): array
    {
        return $this->failureReasons;
    }

    /**
     * @param array $failureReasons
     * @return Item
     */
    public function setFailureReasons(array $failureReasons): Item
    {
        $this->failureReasons = $failureReasons;
        return $this;
    }



}