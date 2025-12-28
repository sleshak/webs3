<?php
    namespace App\Models;
    class Product {
    public function __construct(
        public string $name,
        public float $price
    ) {}
    
    public function getInfo(): string {
        return "Товар: {$this->name}, Цена: {$this->price}";
    }
    }
?>
