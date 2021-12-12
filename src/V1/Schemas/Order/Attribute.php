<?php

namespace Entegrator\TrendyolApi\V1\Schemas\Order;

use Entegrator\TrendyolApi\V1\Abstracts\SchemaAbstract;

class Attribute extends SchemaAbstract
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