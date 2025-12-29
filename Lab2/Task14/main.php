<?php
    
    require_once __DIR__ . '/../Models/Cart.php';
    require_once __DIR__ . '/../Models/Order.php';
    require_once __DIR__ . '/../Models/Product.php';
    require_once __DIR__ . '/../Models/User.php';

    use App\Models\Product;
    use App\Models\Cart;
    use App\Models\Order;
    use App\Models\User;

    $items = [
        new Product("Computer1", 100.00),
        new Product("Computer2", 200.30),
        new Product("Computer3", 300.50)
    ];

    $cart = new Cart();

    echo "Товары:\n";
    foreach ($items as $index => $item) {
        echo ($index + 1) . ". {$item->getInfo()}\n";
    }

    echo "Добавляем товары в корзину\n";

    $cart->add($items[0]);
    $cart->add($items[1]);
    $cart->add($items[2]);

    $cart->showItems();

    echo "Итого\n";
    echo "Количество товаров: " . $cart->getItemCount() . "\n";
    echo "Общая сумма: " . number_format($cart->getTotal(), 2) . "\n";

?>