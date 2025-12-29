<?php
    
    require_once __DIR__ . '/../Models/Cart.php';
    require_once __DIR__ . '/../Models/Order.php';
    require_once __DIR__ . '/../Models/Product.php';
    require_once __DIR__ . '/../Models/User.php';

    use App\Models\Product;
    use App\Models\Cart;
    use App\Models\Order;
    use App\Models\User;


    $user = new User("Сашка", "alexkamen2017@gmail.com");
    $computer = new Product("computer", 85000.0);
    $order = new Order(78, ($computer->price));

    echo $user->getInfo() . "\n";
    echo $computer->getInfo() . "\n";
    echo $order->getInfo() . "\n";
?>