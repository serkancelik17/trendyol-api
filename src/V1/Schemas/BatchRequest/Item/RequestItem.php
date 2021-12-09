<?php
namespace Entegrator\TrendyolApi\V1\Schemas\Order\BatchRequest\Item;

use Entegrator\ApiBase\Response\Util;

class RequestItem
{
    use Util;

    public function __construct(array $data)
    {
        $this->hydrate($data);
    }

    /**
     * @var string
     */
    private string $updateRequestDate;

    /**
     * @var int
     */
    private int $quantity;

    /**
     * @var float
     */
    private float $salePrice;

    /**
     * @var string
     */
    private string $barcode;

    /**
     * @var float
     */
    private float $listPrice;


    /**
     * @return string
     */
    public function getUpdateRequestDate(): ?string
    {
        return $this->updateRequestDate;
    }

    /**
     * @param string $updateRequestDate
     *
     * @return $this
     */
    public function setUpdateRequestDate(string $updateRequestDate) : self
    {
        $this->updateRequestDate = $updateRequestDate;

        return $this;
    }

    /**
     * @return int
     */
    public function getQuantity(): int
    {
        return $this->quantity;
    }

//    /**
//     * @param int $quantity
//     *
//     * @return RequestItem
//     */
//    public function setQuantity(int $quantity): self
//    {
//        $this->quantity = $quantity;
//
//        return $this;
//    }

    /**
     * @return float
     */
    public function getSalePrice(): float
    {
        return $this->salePrice;
    }

    /**
     * @param float $salePrice
     *
     * @return RequestItem
     */
    public function setSalePrice(float $salePrice) : self
    {
        $this->salePrice = $salePrice;

        return $this;
    }

    /**
     * @return string
     */
    public function getBarcode(): string
    {
        return $this->barcode;
    }

    /**
     * @param string $barcode
     *
     * @return RequestItem
     */
    public function setBarcode(string $barcode) : self
    {
        $this->barcode = $barcode;

        return $this;
    }

    /**
     * @return float
     */
    public function getListPrice(): float
    {
        return $this->listPrice;
    }

    /**
     * @param float $listPrice
     *
     * @return RequestItem
     */
    public function setListPrice(float $listPrice) : self
    {
        $this->listPrice = $listPrice;

        return $this;
    }
}
