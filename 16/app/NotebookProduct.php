<?php

namespace app;

use wfm\interfaces\IGadget;
use wfm\Product;

class NotebookProduct extends Product implements IGadget
{
    public $cpu;

    public function __construct($name, $price, $cpu)
    {
        parent::__construct($name, $price);
        $this->cpu = $cpu;
    }

    public function getProduct()
    {
        $out = parent::getProduct();
        $out .= "Процессор: {$this->cpu}<br>
                 Цена: {$this->price}<br>";

        return $out;
    }

    public function getCpu()
    {
        return $this->cpu;
    }


    protected function addProduct($name, $text)
    {

    }
}