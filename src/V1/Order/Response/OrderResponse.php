<?php

namespace Serkancelik17\TrendyolApi\V1\Order\Response;

use Serkancelik17\TrendyolApi\V1\Order\Request\OrderRequest;
use Serkancelik17\TrendyolApi\V1\TrendyolResponse;
use Serkancelik17\ApiBase\Response\IResponse;
use Serkancelik17\ApiBase\Response\Util;

class OrderResponse extends TrendyolResponse implements IResponse
{
    use Util;

    public int $totalElements;
    public int $totalPages;
    public int $page;
    /** @var Content[] $content */
    private array $content = [];

   public function __construct(OrderRequest $orderRequest)
   {
       parent::__construct($orderRequest);
   }

    /**
     * @param Content[] $contents
     * @return OrderResponse
     */
    public function setContent(array $contents): OrderResponse
    {
        foreach ($contents AS $content)
            $this->content[] = new Content((array) $content);

        return $this;
    }

}