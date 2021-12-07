<?php

namespace Entegrator\TrendyolApi\V1\Models\Product\Category\Response;

use Entegrator\ApiBase\Abstracts\RequestAbstract;
use Entegrator\ApiBase\Abstracts\ResponseAbstract;
use Entegrator\ApiBase\Interfaces\ResponseInterface;
use Entegrator\TrendyolApi\V1\Schemas\Category;

class AttributeResponse extends ResponseAbstract implements ResponseInterface
{

    public function __construct(RequestAbstract $request)
    {
        parent::__construct($request);
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
     * @var string
     */
    private string $displayName;

    /**
     * @var Category\Attribute[] $categoryAttributes
     */
    private array $categoryAttributes;


    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     *
     * @return self
     */
    public function setId(int $id): self
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
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getDisplayName(): string
    {
        return $this->displayName;
    }

    /**
     * @param string $displayName
     *
     * @return self
     */
    public function setDisplayName(string $displayName): self
    {
        $this->displayName = $displayName;

        return $this;
    }

    /**
     * @return array
     */
    public function getCategoryAttributes(): array
    {
        return $this->categoryAttributes;
    }

    /**
     * @param array $categoryAttributes
     *
     * @return self
     */
    protected function setCategoryAttributes(array $categoryAttributes): self
    {
        $this->categoryAttributes = [];
        foreach ($categoryAttributes AS $categoryAttribute)
        $this->categoryAttributes[] = new Category\Attribute($categoryAttribute);

        return $this;
    }
}