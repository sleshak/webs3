<?php
    namespace App\Models;
     class Order {
        public function __construct(
            public int $id,
            public float $price
        ) {}
        
        public function getInfo(): string {
            return "Заказ #{$this->id}, Сумма: \{$this->price}";
        }
    }
?>