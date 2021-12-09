<?php
namespace Entegrator\TrendyolApi\V1\Schemas\Order;

use Entegrator\ApiBase\Response\Util;

class Brand
{
    Use Util;

    private int $id;
    private string $name;

    public function __construct(array $data)
    {
        $this->hydrate($data);
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Brand
     */
    public function setId(int $id): Brand
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
     * @return Brand
     */
    public function setName(string $name): Brand
    {
        $this->name = $name;
        return $this;
    }



}