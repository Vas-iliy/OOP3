<?php

namespace classes;

class BookProduct extends Product
{
    public $numPages;
    const TEST = 20;

    public function __construct($name, $price, $numPages)
    {
        parent::__construct($name, $price);
        $this->numPages = $numPages;
        var_dump(self::class);
    }

    public function getProduct()
    {
        $out = parent::getProduct();
        $out .= "Кол-во страниц: {$this->numPages}<br>
                   Цена без скидки: {$this->price}<br>";

        return $out;
    }

    public function getNumPages()
    {
        return $this->numPages;
    }

    public function addProduct($name, $text)
    {
        var_dump($name);
        var_dump($text);
    }

}