<?php

namespace Entegrator\TrendyolApi\V1\Schemas\Category;

use Entegrator\ApiBase\Response\Util;

class Attribute
{
    use Util;

    public function __construct(array $data)
    {
        $this->hydrate($data);
    }

    /**
     * @var bool
     */
    private bool $allowCustom;

    /**
     * @var \Entegrator\TrendyolApi\V1\Schemas\Attribute
     */
    private \Entegrator\TrendyolApi\V1\Schemas\Attribute $attribute;

    /**
     * @var array
     */
    private array $attributeValues;

    /**
     * @var int
     */
    private int $categoryId;

    /**
     * @var bool
     */
    private bool $required;

    /**
     * @var bool
     */
    private bool $varianter;

    /**
     * @var bool
     */
    private bool $slicer;


    /**
     * @return bool
     */
    public function isAllowCustom(): bool
    {
        return $this->allowCustom;
    }

    /**
     * @param bool $allowCustom
     *
     * @return $this
     */
    public function setAllowCustom(bool $allowCustom): self
    {
        $this->allowCustom = $allowCustom;

        return $this;
    }

    /**
     * @return \Entegrator\TrendyolApi\V1\Schemas\Attribute
     */
    public function getAttribute(): \Entegrator\TrendyolApi\V1\Schemas\Attribute
    {
        return $this->attribute;
    }

    /**
     * @param array $attribute
     *
     * @return $this
     */
    public function setAttribute(array $attribute): self
    {
        $this->attribute = new \Entegrator\TrendyolApi\V1\Schemas\Attribute($attribute);

        return $this;
    }

    /**
     * @return array
     */
    public function getAttributeValues(): array
    {
        return $this->attributeValues;
    }

    /**
     * @param array $attributeValues
     *
     * @return $this
     */
    public function setAttributeValues(array $attributeValues): self
    {
        $this->attributeValues = $attributeValues;

        return $this;
    }

    /**
     * @return int
     */
    public function getCategoryId(): ?int
    {
        return $this->categoryId;
    }

    /**
     * @param int $categoryId
     *
     * @return self
     */
    public function setCategoryId(int $categoryId): self
    {
        $this->categoryId = $categoryId;

        return $this;
    }

    /**
     * @return bool
     */
    public function isRequired(): bool
    {
        return $this->required;
    }

    /**
     * @param bool $required
     *
     * @return self
     */
    public function setRequired(?bool $required): self
    {
        $this->required = $required;

        return $this;
    }

    /**
     * @return bool
     */
    public function isVarianter(): ?bool
    {
        return $this->varianter;
    }

    /**
     * @param bool $varianter
     *
     * @return self
     */
    public function setVarianter(?bool $varianter): self
    {
        $this->varianter = $varianter;

        return $this;
    }

    /**
     * @return bool
     */
    public function isSlicer(): bool
    {
        return $this->slicer;
    }

    /**
     * @param bool $slicer
     *
     * @return self
     */
    public function setSlicer(?bool $slicer): self
    {
        $this->slicer = $slicer;

        return $this;
    }
}