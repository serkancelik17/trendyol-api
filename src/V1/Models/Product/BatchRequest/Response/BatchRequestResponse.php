<?php

namespace Entegrator\TrendyolApi\V1\Models\Product\BatchRequest\Response;

use Entegrator\ApiBase\Abstracts\ResponseAbstract;
use Entegrator\ApiBase\Interfaces\ResponseInterface;
use Entegrator\ApiBase\Response\Util;
use Entegrator\TrendyolApi\V1\Models\Product\BatchRequest\Request\BatchRequestRequest;
use Entegrator\TrendyolApi\V1\Schemas\Order\BatchRequest\Item;

class BatchRequestResponse extends ResponseAbstract implements ResponseInterface
{
    use Util;

    public function __construct(BatchRequestRequest $batchRequestRequest)
    {
       parent::__construct($batchRequestRequest);
    }

    /**
     * @var string
     */
    private string $batchRequestId;

    /**
     * @var array
     */
    private array $items = [];

    /**
     * @var ?string
     */
    private ?string $status = null;

    /**
     * @var ?int
     */
    private ?int $creationDate = null;

    /**
     * @var ?int
     */
    private ?int $lastModification = null;

    /**
     * @var ?string
     */
    private ?string $sourceType = null;

    /**
     * @var ?int
     */
    private ?int $itemCount = null;

    /**
     * @var ?int
     */
    private ?int $failedItemCount = null;

    /**
     * @var ?string
     */
    private ?string $batchRequestType = null;


    /**
     * @return string
     */
    public function getBatchRequestId(): string
    {
        return $this->batchRequestId;
    }

    /**
     * @param string $batchRequestId
     *
     * @return BatchRequestResponse
     */
    public function setBatchRequestId(string $batchRequestId): self
    {
        $this->batchRequestId = $batchRequestId;

        return $this;
    }

    /**
     * @return Item[]
     */
    public function getItems(): array
    {
        return $this->items;
    }

    /**
     * @param array $items
     *
     * @return BatchRequestResponse
     */
    public function setItems(array $items): self
    {
        $this->items = [];
        foreach ($items AS $item)
            $this->items[] = new Item($item);

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
     *
     * @return BatchRequestResponse
     */
    public function setStatus(string $status): self
    {
        $this->status = $status;

        return $this;
    }

    /**
     * @return int
     */
    public function getCreationDate(): int
    {
        return $this->creationDate;
    }

    /**
     * @param int $creationDate
     *
     * @return BatchRequestResponse
     */
    public function setCreationDate($creationDate): self
    {
        $this->creationDate = $creationDate;

        return $this;
    }

    /**
     * @return int
     */
    public function getLastModification(): int
    {
        return $this->lastModification;
    }

    /**
     * @param int $lastModification
     *
     * @return BatchRequestResponse
     */
    public function setLastModification($lastModification): self
    {
        $this->lastModification = $lastModification;

        return $this;
    }

    /**
     * @return string
     */
    public function getSourceType(): string
    {
        return $this->sourceType;
    }

    /**
     * @param string $sourceType
     *
     * @return BatchRequestResponse
     */
    public function setSourceType($sourceType): self
    {
        $this->sourceType = $sourceType;

        return $this;
    }

    /**
     * @return int
     */
    public function getItemCount(): int
    {
        return $this->itemCount;
    }

    /**
     * @param int $itemCount
     *
     * @return BatchRequestResponse
     */
    public function setItemCount(int $itemCount): self
    {
        $this->itemCount = $itemCount;

        return $this;
    }

    /**
     * @return int
     */
    public function getFailedItemCount(): int
    {
        return $this->failedItemCount;
    }

    /**
     * @param int $failedItemCount
     *
     * @return BatchRequestResponse
     */
    public function setFailedItemCount(int $failedItemCount): self
    {
        $this->failedItemCount = $failedItemCount;

        return $this;
    }

    /**
     * @return string
     */
    public function getBatchRequestType(): string
    {
        return $this->batchRequestType;
    }

    /**
     * @param string $batchRequestType
     *
     * @return BatchRequestResponse
     */
    public function setBatchRequestType(string $batchRequestType): self
    {
        $this->batchRequestType = $batchRequestType;

        return $this;
    }
}

