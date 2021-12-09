<?php

namespace Entegrator\TrendyolApi\V1\Schemas\Order\BatchRequest;

use Entegrator\ApiBase\Response\Util;
use Entegrator\TrendyolApi\V1\Schemas\Order\BatchRequest\Item\RequestItem;

class Item
{
    use Util;

    private RequestItem $requestItem;
    private string $status;
    private array $failureReasons = []; //@TODO içindekileri bulamadim. Bulunca modellenmesi lazim.

    public function __construct(array $data)
    {
        $this->hydrate($data);
    }

    /**
     * @return RequestItem
     */
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