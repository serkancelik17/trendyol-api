<?php

namespace TrendyolApi\V1\Order\Order\Response;

use TrendyolApi\V1\Order\Order\Request\OrderRequest;
use TrendyolApi\V1\TrendyolResponse;
use App\Libraries\Models\Response\IResponse;
use App\Libraries\Models\Response\Util;

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
