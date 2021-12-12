<?php

namespace Entegrator\TrendyolApi\V1\Schemas\Order;

use Entegrator\TrendyolApi\V1\Abstracts\SchemaAbstract;

class Address extends SchemaAbstract
{

    private int $id;
    private string $firstName;
    private string $lastName;
    private string $company;
    private string $address1;
    private string $address2;
    private string $city;
    private int $cityCode;
    private string $district;
    private int $districtId;
    private string $postalCode;
    private string $countryCode;
    private int $neighborhoodId;
    private string $neighborhood;
    private string|null $phone;
    private string $fullAddress;
    private string $fillName;

    /**
     * @param array $data
     */
    public function __construct(array $data)
    {
        parent::__construct($data);
    }

}
