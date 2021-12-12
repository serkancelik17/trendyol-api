<?php

namespace Entegrator\TrendyolApi\V1\Schemas\Order;

use Entegrator\TrendyolApi\V1\Abstracts\SchemaAbstract;

class Category extends SchemaAbstract
{
    /**
     * @param array $data
     */
    public function __construct(array $data)
    {
        parent::__construct($data);
    }
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


    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Category
     */
    public function setId(int $id): Category
    {
        $this->id = $id;
        return $this;
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
     * @return Category
     */
    public function setName(string $name): Category
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getParentId(): ?int
    {
        return $this->parentId;
    }

    /**
     * @param int|null $parentId
     * @return Category
     */
    public function setParentId(?int $parentId): Category
    {
        $this->parentId = $parentId;
        return $this;
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