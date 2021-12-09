<?php

namespace Entegrator\TrendyolApi\V1\Schemas\Order;

use Entegrator\TrendyolApi\V1\Schemas\Order\Address;
use Entegrator\TrendyolApi\V1\Schemas\Order\Line;
use Entegrator\TrendyolApi\V1\Schemas\Order\PackageHistory;
use Entegrator\ApiBase\Response\Util;

class Order
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
     * @return Order
     */
    public function setLines(array $lines): Order
    {
        foreach ($lines AS $line)
            $this->lines[] = new Line($line);

        return $this;
    }

    /**
     * @param array $packageHistories
     * @return Order
     */
    public function setPackageHistories(array $packageHistories): Order
    {
        foreach ($packageHistories AS $item)
            $this->packageHistories[] = new PackageHistory($item);

        return $this;
    }


}
