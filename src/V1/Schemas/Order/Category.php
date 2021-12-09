<?php

namespace Entegrator\TrendyolApi\V1\Schemas\Order;

use Entegrator\ApiBase\Response\Util;

class Category
{
    use Util;
    /**
     * @var int
     */
    private int $id;

    /**
     * @var string
     */
    private string $name;

    /**
     * @var int|null
     */
    private ?int $parentId = null;

    /**
     * @var array
     */
    private array $subCategories = [];


    public function __construct(array $data)
    {
        $this->hydrate($data);
    }


    /**
     * @param array|null $subCategories
     *
     * @return Category
     */
    public function setSubCategories(?array $subCategories): self
    {
        foreach ($subCategories as $subCategory)
            $this->subCategories[] = new self($subCategory);
        return $this;
    }
}