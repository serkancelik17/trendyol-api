<?php

namespace Serkancelik17\TrendyolApi\V1\Order\Request;


use JetBrains\PhpStorm\Pure;
use Serkancelik17\TrendyolApi\V1\TrendyolRequest;

class OrderRequest extends TrendyolRequest
{
    private QueryParameter $queryParameter;

   #[Pure] public function __construct(QueryParameter $queryParameter = null)
    {
        $this->queryParameter = $queryParameter ?? new QueryParameter();
    }

    /**
     * @return QueryParameter|null
     */
    public function getQueryParameter(): ?QueryParameter
    {
        return $this->queryParameter;
    }

    /**
     * @param QueryParameter|null $queryParameter
     */
    public function setQueryParameter(?QueryParameter $queryParameter): void
    {
        $this->queryParameter = $queryParameter;
    }


}
