<?php

class Product {
    public function __construct(
        public string $name,
        public float $price
    ) {}
}

$p = new Product("Молоко", 65.5);
$p->name = "";
$p->price = 0;

?>
