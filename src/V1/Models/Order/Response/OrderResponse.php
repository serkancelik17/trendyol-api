<?php

namespace Entegrator\TrendyolApi\V1\Models\Order\Response;

use Entegrator\ApiBase\Abstracts\ResponseAbstract;
use Entegrator\ApiBase\Interfaces\ResponseInterface;
use Entegrator\TrendyolApi\V1\Interfaces\RequestInterface;
use Entegrator\TrendyolApi\V1\Models\Order\Request\OrderRequest;
use Entegrator\TrendyolApi\V1\Schemas\Order\Order;
use Entegrator\ApiBase\Response\Util;

class OrderResponse extends ResponseAbstract implements ResponseInterface
{
    use Util;

    private int $totalElements;
    private int $totalPages;
    private int $page;

    /** @var Order[] $content */
    private array $content = [];

   public function __construct(RequestInterface $orderRequest)
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

    /**
     * @return int
     */
    public function getTotalElements(): int
    {
        return $this->totalElements;
    }

    /**
     * @param int $totalElements
     * @return OrderResponse
     */
    public function setTotalElements(int $totalElements): OrderResponse
    {
        $this->totalElements = $totalElements;
        return $this;
    }

    /**
     * @return int
     */
    public function getTotalPages(): int
    {
        return $this->totalPages;
    }

    /**
     * @param int $totalPages
     * @return OrderResponse
     */
    public function setTotalPages(int $totalPages): OrderResponse
    {
        $this->totalPages = $totalPages;
        return $this;
    }

    /**
     * @return int
     */
    public function getPage(): int
    {
        return $this->page;
    }

    /**
     * @param int $page
     * @return OrderResponse
     */
    public function setPage(int $page): OrderResponse
    {
        $this->page = $page;
        return $this;
    }


}
