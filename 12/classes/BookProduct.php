<?php

namespace classes;

use classes\interfaces\I3D;


class BookProduct extends Product implements I3D
{
    public $numPages;
    static $discount;
    const TEST = 20;

    public function __construct($name, $price, $numPages)
    {
        parent::__construct($name, $price);
        $this->numPages = $numPages;
        self::TEST;
    }

    public static function setDiscount($discount)
    {
        self::$discount = $discount;
    }

    public function getProduct()
    {
        $out = parent::getProduct();
        $out .= "Кол-во страниц: {$this->numPages}<br>";

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
}