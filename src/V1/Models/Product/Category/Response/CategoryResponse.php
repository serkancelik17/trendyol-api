<?php

namespace Entegrator\TrendyolApi\V1\Models\Product\Category\Response;

use Entegrator\ApiBase\Abstracts\ResponseAbstract;
use Entegrator\ApiBase\Interfaces\ResponseInterface;
use Entegrator\ApiBase\Response\Util;
use Entegrator\TrendyolApi\V1\Models\Product\Category\Request\CategoryRequest;
use Entegrator\TrendyolApi\V1\Schemas\Category;

class CategoryResponse extends ResponseAbstract implements ResponseInterface
{
    use Util;

    /** @var Category[] $categories */
    private array $categories = [];

    public function __construct(CategoryRequest $categoryRequest)
    {
        parent::__construct($categoryRequest);
    }

    /**
     * @return Category[]
     */
    public function getCategories(): array
    {
        return $this->categories;
    }

    /**
     * @param Category[] $categories
     * @return CategoryResponse
     */
    public function setCategories(array $categories): self
    {
        foreach ($categories AS $category)
        $this->categories[] = new Category($category);
        return $this;
    }


}