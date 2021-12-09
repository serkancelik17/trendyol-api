<?php

namespace Entegrator\TrendyolApi\V1\Models\Order\Response;

use Entegrator\ApiBase\Abstracts\ResponseAbstract;
use Entegrator\ApiBase\Interfaces\ResponseInterface;
use Entegrator\TrendyolApi\V1\Models\Order\Request\OrderRequest;
use Entegrator\TrendyolApi\V1\Schemas\Order\Order;
use Entegrator\ApiBase\Response\Util;

class OrderResponse extends ResponseAbstract implements ResponseInterface
{
    use Util;

    public int $totalElements;
    public int $totalPages;
    public int $page;
    /** @var Order[] $content */
    private array $content = [];

   public function __construct(OrderRequest $orderRequest)
   {
       parent::__construct($orderRequest);
   }

    /**
     * @param Order[] $contents
     * @return OrderResponse
     */
    public function setContent(array $contents): OrderResponse
    {
        foreach ($contents AS $content)
            $this->content[] = new Order((array) $content);

        return $this;
    }

    /**
     * @return Order[]
     */
    public function getContent(): array
    {
        return $this->content;
    }

}
