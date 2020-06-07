<?php

namespace classes;

abstract class Product
{
    private $name;
    protected $price;
    const TEST = 10;


    public function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    public function getProduct ()
    {
        $out = "<hr><b>О товаре:</b><br>
                Наименование: {$this->name}<br>
                Цена: {$this->price}<br>";

        return $out;
    }

    public function getName()
    {
        return $this->name;
    }

    abstract protected function addProduct ($name, $text);


}