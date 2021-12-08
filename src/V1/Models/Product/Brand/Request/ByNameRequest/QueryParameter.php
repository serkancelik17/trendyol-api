<?php

namespace Entegrator\TrendyolApi\V1\Models\Product\Brand\Request\ByNameRequest;

use Entegrator\ApiBase\Interfaces\Arrayable;
use Entegrator\ApiBase\Interfaces\QueryParameterInterface;
use Entegrator\ApiBase\Interfaces\Stringable;
use JetBrains\PhpStorm\ArrayShape;
use JetBrains\PhpStorm\Pure;

class QueryParameter implements QueryParameterInterface, Arrayable,Stringable
{
    private string $name;


    public function __construct(string $name)
    {
        $this->setName($name);
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return QueryParameter
     */
    public function setName(string $name): QueryParameter
    {
        $this->name = $name;
        return $this;
    }


    #[Pure] public function __toString(): string
    {
       return http_build_query((array) $this->toArray());
    }


    /**
     * @return array
     */
    #[Pure] #[ArrayShape(['name' => "string"])]
    public function toArray(): array
    {
        return [
            'name' => $this->getName()
        ];
    }
}