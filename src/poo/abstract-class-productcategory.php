<?php
declare(strict_types=1);

abstract class ProductCategory
{
    protected string $name;
    protected string $type;

    public function __construct(string $name, string $type)
    {
        $this->name = $name;
        $this->type = $type;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getType(): string
    {
        return $this->type;
    }

    abstract public function getTypeName(): string;
}

class Product extends ProductCategory
{
    public function getTypeName(): string
    {
        return $this->name . ': ' . $this->type;
    }
}

$product = new Product('Paper','80g');
echo $product->getTypeName();

//------------------------------------------------------------------------------
// Output for PHP >=7.4.0 / PHP 8
//------------------------------------------------------------------------------
// Paper: 80g
//------------------------------------------------------------------------------
