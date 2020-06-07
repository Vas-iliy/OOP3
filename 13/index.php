<?php

use wfm\interfaces\IGadget;
use app\{BookProduct, NotebookProduct};

error_reporting(-1);

require_once __DIR__ . '/vendor/autoload.php';

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

$book->setDiscount(20);
echo $book->getProduct();
echo $book->getDiscount();

$mail = new \PHPMailer\PHPMailer\PHPMailer();
debug($mail);



