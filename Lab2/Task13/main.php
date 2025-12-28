<?php
    namespace App\Models;
    use App\Models\{User, Product, Order};

    require_once __DIR__ . '/../vendor/autoload.php';

        $user = new User("Сашка", "alexkamen2017@gmail.com");
        $computer = new Product("computer", 85000.0);
        $order = new Order(78, ($computer->price));

        echo $user->getInfo() . "\n";
        echo $computer->getInfo() . "\n";
        echo $order->getInfo() . "\n";
?>