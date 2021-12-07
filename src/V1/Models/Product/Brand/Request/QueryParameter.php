<?php

namespace Entegrator\TrendyolApi\V1\Models\Product\Brand\Request;

use Entegrator\ApiBase\Interfaces\QueryParameterInterface;
use JetBrains\PhpStorm\Pure;

class QueryParameter implements QueryParameterInterface
{
    private string|null $name;

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string|null $name
     * @return QueryParameter
     */
    public function setName(?string $name): QueryParameter
    {
        $this->name = $name;
        return $this;
    }


    #[Pure] public function __toString(): string
    {
       return 'name='.$this->getName();
    }
}