<?php

namespace Entegrator\TrendyolApi\V1\Schemas\Order;

use Entegrator\ApiBase\Response\Util;

class Attribute
{
    use Util;

    public function __construct(array $data)
    {
        $this->hydrate($data);
    }

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
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     *
     * @return $this
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
     * @return $this
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }
}