<?php

namespace classes;

use classes\interfaces\I3D;


class BookProduct extends Product implements I3D
{
    private $numPages;
    private $discount;
    const TEST = 20;

    public function __construct($name, $price, $numPages)
    {
        parent::__construct($name, $price);
        $this->numPages = $numPages;
        self::TEST;
    }


    public function getProduct()
    {
        $out = parent::getProduct();
        $out .= "Кол-во страниц: {$this->numPages}<br>";
        if ($this->discount) {
            $this->price = $this->price-$this->price/100*$this->discount;
            $out .= "Цена со скидкой: {$this->price}<br>";
        }

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

    public function test()
    {
    }


    public function getDiscount()
    {

        return 'Скидка: '.$this->discount;
    }


    public function setDiscount($discount)
    {
        $this->discount = $discount;
    }
}