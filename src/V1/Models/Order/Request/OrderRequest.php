<?php

namespace Entegrator\TrendyolApi\V1\Models\Order\Request;


use Entegrator\ApiBase\Abstracts\RequestAbstract;

use JetBrains\PhpStorm\Pure;

class OrderRequest extends RequestAbstract
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
     * @return OrderRequest
     */
    public function setQueryParameter(?QueryParameter $queryParameter): OrderRequest
    {
        $this->queryParameter = $queryParameter;

        return $this;
    }


}
