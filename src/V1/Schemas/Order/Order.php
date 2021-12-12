<?php

namespace Entegrator\TrendyolApi\V1\Schemas\Order;

use Entegrator\TrendyolApi\V1\Abstracts\SchemaAbstract;

class Order extends SchemaAbstract
{
    /**
     * @param array $data
     */
    public function __construct(array $data)
    {
        parent::__construct($data);
    }
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

    /**
     * @return string
     */
    public function getOrderNumber(): string
    {
        return $this->orderNumber;
    }

    /**
     * @param string $orderNumber
     * @return Order
     */
    public function setOrderNumber(string $orderNumber): Order
    {
        $this->orderNumber = $orderNumber;
        return $this;
    }

    /**
     * @return float
     */
    public function getGrossAmount(): float
    {
        return $this->grossAmount;
    }

    /**
     * @param float $grossAmount
     * @return Order
     */
    public function setGrossAmount(float $grossAmount): Order
    {
        $this->grossAmount = $grossAmount;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotalDiscount(): float
    {
        return $this->totalDiscount;
    }

    /**
     * @param float $totalDiscount
     * @return Order
     */
    public function setTotalDiscount(float $totalDiscount): Order
    {
        $this->totalDiscount = $totalDiscount;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getTaxNumber(): ?string
    {
        return $this->taxNumber;
    }

    /**
     * @param string|null $taxNumber
     * @return Order
     */
    public function setTaxNumber(?string $taxNumber): Order
    {
        $this->taxNumber = $taxNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getCustomerFirstName(): string
    {
        return $this->customerFirstName;
    }

    /**
     * @param string $customerFirstName
     * @return Order
     */
    public function setCustomerFirstName(string $customerFirstName): Order
    {
        $this->customerFirstName = $customerFirstName;
        return $this;
    }

    /**
     * @return string
     */
    public function getCustomerEmail(): string
    {
        return $this->customerEmail;
    }

    /**
     * @param string $customerEmail
     * @return Order
     */
    public function setCustomerEmail(string $customerEmail): Order
    {
        $this->customerEmail = $customerEmail;
        return $this;
    }

    /**
     * @return int
     */
    public function getCustomerId(): int
    {
        return $this->customerId;
    }

    /**
     * @param int $customerId
     * @return Order
     */
    public function setCustomerId(int $customerId): Order
    {
        $this->customerId = $customerId;
        return $this;
    }

    /**
     * @return string
     */
    public function getCustomerLastName(): string
    {
        return $this->customerLastName;
    }

    /**
     * @param string $customerLastName
     * @return Order
     */
    public function setCustomerLastName(string $customerLastName): Order
    {
        $this->customerLastName = $customerLastName;
        return $this;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Order
     */
    public function setId(int $id): Order
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return int
     */
    public function getCargoTrackingNumber(): int
    {
        return $this->cargoTrackingNumber;
    }

    /**
     * @param int $cargoTrackingNumber
     * @return Order
     */
    public function setCargoTrackingNumber(int $cargoTrackingNumber): Order
    {
        $this->cargoTrackingNumber = $cargoTrackingNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getCargoProviderName(): string
    {
        return $this->cargoProviderName;
    }

    /**
     * @param string $cargoProviderName
     * @return Order
     */
    public function setCargoProviderName(string $cargoProviderName): Order
    {
        $this->cargoProviderName = $cargoProviderName;
        return $this;
    }

    /**
     * @return int
     */
    public function getOrderDate(): int
    {
        return $this->orderDate;
    }

    /**
     * @param int $orderDate
     * @return Order
     */
    public function setOrderDate(int $orderDate): Order
    {
        $this->orderDate = $orderDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getTcIdentityNumber(): string
    {
        return $this->tcIdentityNumber;
    }

    /**
     * @param string $tcIdentityNumber
     * @return Order
     */
    public function setTcIdentityNumber(string $tcIdentityNumber): Order
    {
        $this->tcIdentityNumber = $tcIdentityNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getCurrencyCode(): string
    {
        return $this->currencyCode;
    }

    /**
     * @param string $currencyCode
     * @return Order
     */
    public function setCurrencyCode(string $currencyCode): Order
    {
        $this->currencyCode = $currencyCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getShipmentPackageStatus(): string
    {
        return $this->shipmentPackageStatus;
    }

    /**
     * @param string $shipmentPackageStatus
     * @return Order
     */
    public function setShipmentPackageStatus(string $shipmentPackageStatus): Order
    {
        $this->shipmentPackageStatus = $shipmentPackageStatus;
        return $this;
    }

    /**
     * @return int
     */
    public function getTimeSlotId(): int
    {
        return $this->timeSlotId;
    }

    /**
     * @param int $timeSlotId
     * @return Order
     */
    public function setTimeSlotId(int $timeSlotId): Order
    {
        $this->timeSlotId = $timeSlotId;
        return $this;
    }

    /**
     * @return string
     */
    public function getScheduledDeliveryStoreId(): string
    {
        return $this->scheduledDeliveryStoreId;
    }

    /**
     * @param string $scheduledDeliveryStoreId
     * @return Order
     */
    public function setScheduledDeliveryStoreId(string $scheduledDeliveryStoreId): Order
    {
        $this->scheduledDeliveryStoreId = $scheduledDeliveryStoreId;
        return $this;
    }

    /**
     * @return int
     */
    public function getEstimatedDeliveryStartDate(): int
    {
        return $this->estimatedDeliveryStartDate;
    }

    /**
     * @param int $estimatedDeliveryStartDate
     * @return Order
     */
    public function setEstimatedDeliveryStartDate(int $estimatedDeliveryStartDate): Order
    {
        $this->estimatedDeliveryStartDate = $estimatedDeliveryStartDate;
        return $this;
    }

    /**
     * @return int
     */
    public function getEstimatedDeliveryEndDate(): int
    {
        return $this->estimatedDeliveryEndDate;
    }

    /**
     * @param int $estimatedDeliveryEndDate
     * @return Order
     */
    public function setEstimatedDeliveryEndDate(int $estimatedDeliveryEndDate): Order
    {
        $this->estimatedDeliveryEndDate = $estimatedDeliveryEndDate;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotalPrice(): float
    {
        return $this->totalPrice;
    }

    /**
     * @param float $totalPrice
     * @return Order
     */
    public function setTotalPrice(float $totalPrice): Order
    {
        $this->totalPrice = $totalPrice;
        return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryAddressType(): string
    {
        return $this->deliveryAddressType;
    }

    /**
     * @param string $deliveryAddressType
     * @return Order
     */
    public function setDeliveryAddressType(string $deliveryAddressType): Order
    {
        $this->deliveryAddressType = $deliveryAddressType;
        return $this;
    }

    /**
     * @return int
     */
    public function getAgreedDeliveryDate(): int
    {
        return $this->agreedDeliveryDate;
    }

    /**
     * @param int $agreedDeliveryDate
     * @return Order
     */
    public function setAgreedDeliveryDate(int $agreedDeliveryDate): Order
    {
        $this->agreedDeliveryDate = $agreedDeliveryDate;
        return $this;
    }

    /**
     * @return bool
     */
    public function isFastDelivery(): bool
    {
        return $this->fastDelivery;
    }

    /**
     * @param bool $fastDelivery
     * @return Order
     */
    public function setFastDelivery(bool $fastDelivery): Order
    {
        $this->fastDelivery = $fastDelivery;
        return $this;
    }

    /**
     * @return int
     */
    public function getOriginShipmentDate(): int
    {
        return $this->originShipmentDate;
    }

    /**
     * @param int $originShipmentDate
     * @return Order
     */
    public function setOriginShipmentDate(int $originShipmentDate): Order
    {
        $this->originShipmentDate = $originShipmentDate;
        return $this;
    }

}
