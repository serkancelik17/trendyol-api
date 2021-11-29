<?php

namespace Serkancelik17\TrendyolApi\V1\Order\Order\Response\Content;

use Serkancelik17\ApiBase\Response\Util;

class Address
{
    use Util;

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

    public function __construct(array $data)
    {
        $this->hydrate($data);
    }

}
