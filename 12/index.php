<?php

use classes\BookProduct;
use classes\interfaces\IGadget;
use classes\NotebookProduct;

error_reporting(-1);

function autoloder ($class) {
    $class = str_replace('\\', '/', $class);
    $file = __DIR__ . "/$class.php";
    if (file_exists($file)) {
        require_once $file;
    }
}

spl_autoload_register('autoloder');



function debug ($data) {
    echo "<pre>" . print_r($data, 1) , "</pre>";
}

function offCase (IGadget $product) {
    echo "<p>Предлагаем чехол для гаджета {$product->getName()}</p>";
}

$book = new BookProduct('Три пидораса', 1000, 500);
$notebook = new NotebookProduct('Del', 54000, 'AMD');


offCase($notebook);

echo $notebook->getProduct();

echo $book->getProduct();
echo BookProduct::TEST;

