<?php

namespace Entegrator\TrendyolApi\V1\Models\Product\Brand\Request;


use Entegrator\ApiBase\Abstracts\RequestAbstract;
use JetBrains\PhpStorm\Pure;

class BrandRequest extends RequestAbstract
{
    private QueryParameter|null $queryParameter;

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
     * @return BrandRequest
     */
    public function setQueryParameter(?QueryParameter $queryParameter): BrandRequest
    {
        $this->queryParameter = $queryParameter;
        return $this;
    }


}
