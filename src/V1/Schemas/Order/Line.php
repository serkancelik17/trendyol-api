<?php

namespace Entegrator\TrendyolApi\V1\Schemas\Order;

use Entegrator\TrendyolApi\V1\Schemas\Order\DiscountDetail;
use Entegrator\ApiBase\Response\Util;

class Line
{
    use Util;

    private int $quantity;
    private int $salesCampaignId;
    private string $productSize;
    private string $merchantSku;
    private string $productName;
    private int $productCode;
    private int $merchantId;
    private float $amount;
    private float $discount;
    /** @var DiscountDetail[] */
    private array $discountDetails;
    private string $currencyCode;
    private string $productColor;
    private int $id;
    private string $sku;
    private string $vatBaseAmount;
    private string $barcode;
    private string $orderLineItemStatusName;
    private float $price;

    public function __construct(array $data)
    {
        $this->hydrate($data);
    }


}
