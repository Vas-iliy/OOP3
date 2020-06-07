<?php

error_reporting(-1);

/*require_once 'classes/Product.php';
require_once 'classes/IGadget.php';
require_once 'classes/I3D.php';
require_once 'classes/BookProduct.php';
require_once 'classes/NotebookProduct.php';*/

function autoloder1 ($class) {
    $file = __DIR__ . "/classes/$class.php";
    if (file_exists($file)) {
        require_once $file;
    }
}

function autoloder2 ($class) {
    $file = __DIR__ . "/classes/interfaces/$class.php";
    if (file_exists($file)) {
        require_once $file;
    }
}

spl_autoload_register('autoloder1');
spl_autoload_register('autoloder2');


function debug ($data) {
    echo "<pre>" . print_r($data, 1) , "</pre>";
}

function offCase (IGadget $product) {
    echo "<p>Предлагаем чехол для гаджета {$product->getName()}</p>";
}

$book = new BookProduct('Три пидораса', 1000, 500);
$notebook = new NotebookProduct('Del', 54000, 'AMD');

debug($book);


offCase($book);
offCase($notebook);

echo $book->getProduct();

