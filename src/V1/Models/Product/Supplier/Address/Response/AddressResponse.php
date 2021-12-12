<?php
namespace Entegrator\TrendyolApi\V1\Models\Product\Supplier\Address\Response;

use Entegrator\ApiBase\Abstracts\RequestAbstract;
use Entegrator\ApiBase\Abstracts\ResponseAbstract;
use Entegrator\ApiBase\Interfaces\ResponseInterface;
use Entegrator\ApiBase\Response\Util;
use Entegrator\TrendyolApi\V1\Schemas\Address\Address;
use Entegrator\TrendyolApi\V1\Schemas\Address\DefaultReturningAddress;

class  AddressResponse extends ResponseAbstract implements ResponseInterface
{
    use Util;

    public function __construct(RequestAbstract $request)
    {
        parent::__construct($request);
    }

    /**
     * @var Address[]
     */
    private array $supplierAddresses;

    /**
     * @var Address
     */
    private Address $defaultShipmentAddress;

    /**
     * @var Address
     */
    private Address $defaultInvoiceAddress;

    /**
     * @var DefaultReturningAddress
     */
    private DefaultReturningAddress $defaultReturningAddress;


    /**
     * @return array
     */
    public function getSupplierAddresses(): array
    {
        return $this->supplierAddresses;
    }

    /**
     * @param array $supplierAddresses
     * @return AddressResponse
     */
    public function setSupplierAddresses(array $supplierAddresses) : self
    {
        $this->supplierAddresses = [];
        foreach ($supplierAddresses AS $address)
            $this->supplierAddresses[] = new Address($address);

        return $this;
    }

    /**
     * @return Address
     */
    public function getDefaultShipmentAddress(): Address
    {
        return $this->defaultShipmentAddress;
    }

    /**
     * @param array $defaultShipmentAddress
     * @return AddressResponse
     */
    public function setDefaultShipmentAddress(array $defaultShipmentAddress) : self
    {
        $this->defaultShipmentAddress = new Address($defaultShipmentAddress);

        return $this;
    }

    /**
     * @return Address
     */
    public function getDefaultInvoiceAddress(): Address
    {
        return $this->defaultInvoiceAddress;
    }

    /**
     * @param array $defaultInvoiceAddress
     * @return AddressResponse
     */
    public function setDefaultInvoiceAddress(array $defaultInvoiceAddress) : self
    {
        $this->defaultInvoiceAddress = new Address($defaultInvoiceAddress);

        return $this;
    }

    /**
     * @return DefaultReturningAddress
     */
    public function getDefaultReturningAddress(): DefaultReturningAddress
    {
        return $this->defaultReturningAddress;
    }

    /**
     * @param array $defaultReturningAddress
     * @return AddressResponse
     */
    public function setDefaultReturningAddress(array $defaultReturningAddress) : self
    {
        $this->defaultReturningAddress = new DefaultReturningAddress($defaultReturningAddress);

        return $this;
    }
}