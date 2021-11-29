<?php

namespace Serkancelik17\TrendyolApi\V1\Order\Order\Response;

use Serkancelik17\TrendyolApi\V1\Order\Order\Response\Content\Address;
use Serkancelik17\TrendyolApi\V1\Order\Order\Response\Content\Line;
use Serkancelik17\TrendyolApi\V1\Order\Order\Response\Content\PackageHistory;
use Serkancelik17\ApiBase\Response\Util;

class Content
{
    use Util;

    private Address $shipmentAddress;
    private string $orderNumber;
    private float $grossAmount;
    private float $totalDiscount;
    private string|null $taxNumber;
    private Address $invoiceAddress;
    private string $customerFirstName;
    private string $customerEmail;
    private int $customerId;
    private string $customerLastName;
    private int $id;
    private int $cargoTrackingNumber; //@TODO CODE128 formatında göre typelanacak.
    private string $cargoProviderName;
    /** @var Line[] $lines  */
    private array $lines;
    private int $orderDate;
    private string $tcIdentityNumber;
    private string $currencyCode;
    /** @var PackageHistory[] $packageHistories */
    private array $packageHistories;
    private string $shipmentPackageStatus;
    private int $timeSlotId;
    private string $scheduledDeliveryStoreId;
    private int $estimatedDeliveryStartDate;
    private int $estimatedDeliveryEndDate;
    private float $totalPrice;
    private string $deliveryAddressType;
    private int $agreedDeliveryDate;
    private bool $fastDelivery;
    private int $originShipmentDate;

    public function __construct(array $data)
    {
        $this->hydrate($data);
    }

    /**
     * @param array $shipmentAddress
     */
    public function setShipmentAddress(array $shipmentAddress): void
    {
        $this->shipmentAddress = new Address($shipmentAddress);
    }

    /**
     * @param array $invoiceAddress
     */
    public function setInvoiceAddress(array $invoiceAddress): void
    {
        $this->shipmentAddress = new Address($invoiceAddress);
    }

    /**
     * @param array $lines
     * @return Content
     */
    public function setLines(array $lines): Content
    {
        foreach ($lines AS $line)
            $this->lines[] = new Line($line);

        return $this;
    }

    /**
     * @param array $packageHistories
     * @return Content
     */
    public function setPackageHistories(array $packageHistories): Content
    {
        foreach ($packageHistories AS $item)
            $this->packageHistories[] = new PackageHistory($item);

        return $this;
    }


}
