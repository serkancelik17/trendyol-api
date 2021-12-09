<?php

namespace Entegrator\TrendyolApi\V1\Schemas\Address;

use Entegrator\ApiBase\Response\Util;

class Address
{
    use Util;

    /**
     * @param array $data
     */
    public function __construct(array$data)
    {
        $this->hydrate($data);
    }

    /**
     * @var int
     */
    private int $id;

    /**
     * @var string
     */
    private string $addressType;

    /**
     * @var string
     */
    private string $country;

    /**
     * @var string
     */
    private string $city;

    /**
     * @var int
     */
    private int $cityCode;

    /**
     * @var string
     */
    private string $district;

    /**
     * @var int
     */
    private int $districtId;

    /**
     * @var string
     */
    private string $postCode;

    /**
     * @var string
     */
    private string $address;

    /**
     * @var bool
     */
    private bool $returningAddress;

    /**
     * @var string
     */
    private string $fullAddress;

    /**
     * @var bool
     */
    private bool $shipmentAddress;

    /**
     * @var bool
     */
    private bool $invoiceAddress;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Address
     */
    public function setId(int $id): Address
    {
        $this->id = $id;
        return $this;
    }


    /**
     * @return string
     */
    public function getAddressType(): string
    {
        return $this->addressType;
    }

    /**
     * @param string $addressType
     */
    public function setAddressType(string $addressType)
    {
        $this->addressType = $addressType;
    }

    /**
     * @return string
     */
    public function getCountry(): string
    {
        return $this->country;
    }

    /**
     * @param string $country
     */
    public function setCountry(string $country)
    {
        $this->country = $country;
    }

    /**
     * @return string
     */
    public function getCity(): string
    {
        return $this->city;
    }

    /**
     * @param string $city
     */
    public function setCity(string $city)
    {
        $this->city = $city;
    }

    /**
     * @return int
     */
    public function getCityCode(): int
    {
        return $this->cityCode;
    }

    /**
     * @param int $cityCode
     */
    public function setCityCode(int $cityCode)
    {
        $this->cityCode = $cityCode;
    }

    /**
     * @return string
     */
    public function getDistrict(): string
    {
        return $this->district;
    }

    /**
     * @param string $district
     */
    public function setDistrict(string $district)
    {
        $this->district = $district;
    }

    /**
     * @return int
     */
    public function getDistrictId(): int
    {
        return $this->districtId;
    }

    /**
     * @param int $districtId
     */
    public function setDistrictId(int $districtId)
    {
        $this->districtId = $districtId;
    }

    /**
     * @return string
     */
    public function getPostCode(): string
    {
        return $this->postCode;
    }

    /**
     * @param string $postCode
     */
    public function setPostCode(string $postCode)
    {
        $this->postCode = $postCode;
    }

    /**
     * @return string
     */
    public function getAddress(): string
    {
        return $this->address;
    }

    /**
     * @param string $address
     */
    public function setAddress(string $address)
    {
        $this->address = $address;
    }

    /**
     * @return bool
     */
    public function isReturningAddress(): bool
    {
        return $this->returningAddress;
    }

    /**
     * @param bool $returningAddress
     */
    public function setReturningAddress(bool $returningAddress)
    {
        $this->returningAddress = $returningAddress;
    }

    /**
     * @return string
     */
    public function getFullAddress(): string
    {
        return $this->fullAddress;
    }

    /**
     * @param string $fullAddress
     */
    public function setFullAddress(string $fullAddress)
    {
        $this->fullAddress = $fullAddress;
    }

    /**
     * @return bool
     */
    public function isShipmentAddress(): bool
    {
        return $this->shipmentAddress;
    }

    /**
     * @param bool $shipmentAddress
     */
    public function setShipmentAddress(bool $shipmentAddress)
    {
        $this->shipmentAddress = $shipmentAddress;
    }

    /**
     * @return bool
     */
    public function isInvoiceAddress(): bool
    {
        return $this->invoiceAddress;
    }

    /**
     * @param bool $invoiceAddress
     */
    public function setInvoiceAddress(bool $invoiceAddress)
    {
        $this->invoiceAddress = $invoiceAddress;
    }
}


