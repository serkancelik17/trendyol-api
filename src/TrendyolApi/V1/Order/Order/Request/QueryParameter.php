<?php

namespace TrendyolApi\V1\Order\Order\Request;

use TrendyolApi\V1\Order\Order\Request\QueryParameter\OrderByDirectionQueryParameter;
use TrendyolApi\V1\Order\Order\Request\QueryParameter\StatusQueryParameter;
use App\Libraries\Models\Request\QueryParameter\IQueryParameter;
use DateTime;
use JetBrains\PhpStorm\ArrayShape;
use JetBrains\PhpStorm\Pure;
use Webmozart\Assert\Assert;

class QueryParameter implements IQueryParameter
{
    private int|null $startDate = null;
    private int|null $endDate = null;
    /**
     * @var int|null $page
     * @min(1)
     */
    private int|null $page = null;

    /**
     * @var integer|null
     * @range(1, 200)
     * @label('Number of PageSize')
     */
    private int|null $size = null;
    /** @var string|null $status */
    private string|null $status = null;
    private string|null $orderByField = null;
    private string|null $orderByDirection = null;
    private int|null $shipmentPackageIds = null;

    /**
     * @return int|null
     */
    public function getStartDate(): int|null
    {
        return $this->startDate;
    }

    /**
     * @param DateTime $startDate
     * @return QueryParameter
     */
    public function setStartDate(DateTime $startDate): QueryParameter
    {
        $this->startDate = $startDate->getTimestamp();
        return $this;
    }

    /**
     * @return int|null
     */
    public function getEndDate(): int|null
    {
        return $this->endDate;
    }

    /**
     * @param DateTime $endDate
     * @return QueryParameter
     */
    public function setEndDate(DateTime $endDate): QueryParameter
    {
        $this->endDate = $endDate->getTimestamp();
        return $this;
    }

    /**
     * @return int|null
     */
    public function getPage(): int|null
    {
        return $this->page;
    }

    /**
     * @param int $page
     * @return QueryParameter
     */
    public function setPage(int $page): QueryParameter
    {
        Assert::greaterThan($page, 0);

        $this->page = $page;
        return $this;
    }

    /**
     *
     * @return int|null
     */
    public function getSize(): int|null
    {
        return $this->size;
    }

    /**
     * @param int $size
     * @return QueryParameter
     */
    public function setSize(int $size): QueryParameter
    {
        Assert::range($size, 1, 200);

        $this->size = $size;
        return $this;
    }

    /**
     * @return array
     */
    public function getStatus(): string|null
    {
        return $this->status;
    }

    /**
     * @param string|null $status
     * @return QueryParameter
     */
    public function setStatus(string|null $status): QueryParameter
    {
        $this->status =  $status;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getOrderByField(): string|null
    {
        return $this->orderByField;
    }

    /**
     * @param string $orderByField
     * @return QueryParameter
     */
    public function setOrderByField(string $orderByField): QueryParameter
    {
        $this->orderByField = $orderByField;
        return $this;
    }

    /**
     * @return OrderByDirectionQueryParameter|null
     */
    public function getOrderByDirection(): string|null
    {
        return $this->orderByDirection;
    }

    /**
     * @param string $orderByDirection
     * @return QueryParameter
     */
    public function setOrderByDirection(string $orderByDirection): QueryParameter
    {
        $this->orderByDirection = $orderByDirection;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getShipmentPackageIds(): int|null
    {
        return $this->shipmentPackageIds;
    }

    /**
     * @param int $shipmentPackageIds
     * @return QueryParameter
     */
    public function setShipmentPackageIds(int $shipmentPackageIds): QueryParameter
    {
        $this->shipmentPackageIds = $shipmentPackageIds;
        return $this;
    }

        #[Pure] #[ArrayShape(['startDate' => "int", 'endDate' => "int", 'page' => "int", 'size' => "int", 'status' => "\TrendyolApi\V1\Order\Order\Request\QueryParameter\StatusQueryParameter[]", 'orderByField' => "string", 'orderByDirection' => "\TrendyolApi\V1\Order\Order\Request\QueryParameter\OrderByDirectionQueryParameter", 'shipmentPackageIds' => "int"])]
        private function toArray() :array {
        return [
                'startDate' => $this->getStartDate(),
                'endDate' => $this->getEndDate(),
                'page' => $this->getPage(),
                'size' => $this->getSize(),
                'status' =>$this->getStatus(),
                'orderByField' => $this->getOrderByField(),
                'orderByDirection' => $this->getOrderByDirection(),
                'shipmentPackageIds' => $this->getShipmentPackageIds(),
        ];
    }

    #[Pure] public function __toString(): string
    {
        return http_build_query($this->toArray());
    }
}
