<?php
    namespace App\Models;
    use App\Models\Product;
    class Cart {
        private array $items = [];

        public function add(Product $product): void {
            $this->items[] = $product;
            echo "{$product->getInfo()}\n";
        }

        public function getTotal(): float {
            $total = 0;
            foreach ($this->items as $item) {
                $total += $item->price;
            }
            return $total;
        }
        
        public function getItemCount(): int {
            return count($this->items);
        }

        public function showItems(): void {
            if (empty($this->items)) {
                echo "Корзина пуста";
                return;
            }
            
            echo "Корзина:\n";
            foreach ($this->items as $index => $item) {
                echo ($index + 1) . ". {$item->getInfo()}\n";
            }
        }
    }
?>