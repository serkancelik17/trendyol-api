<?php

namespace Entegrator\TrendyolApi\V1\Models\Product\Brand\Request;

use Entegrator\ApiBase\Interfaces\QueryParameterInterface;
use JetBrains\PhpStorm\ArrayShape;
use JetBrains\PhpStorm\Pure;

class QueryParameter implements QueryParameterInterface
{
    private int $page; //Servis cevabınında hangi sayfadaki markaların getirileceği bilgisi
    private int $size; //Bir servis cevabında yer alacak Marka sayısı

    public function __construct(int $page = 1, int $size = 500)
    {
        $this->page = $page;
        $this->size = $size;

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
     * @return QueryParameter
     */
    public function setPage(int $page): QueryParameter
    {
        $this->page = $page;
        return $this;
    }

    /**
     * @return int
     */
    public function getSize(): int
    {
        return $this->size;
    }

    /**
     * @param int $size
     * @return QueryParameter
     */
    public function setSize(int $size): QueryParameter
    {
        $this->size = $size;
        return $this;
    }

    #[Pure] #[ArrayShape(['page' => "int", 'size' => "int"])]
    public function toArray(): array
    {
        return [
            'page' => $this->getPage(),
            'size' => $this->getSize()
        ];
    }


    #[Pure] public function __toString(): string
    {
       return http_build_query($this->toArray());
    }
}