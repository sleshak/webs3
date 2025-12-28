<?php
    interface Payable {
        public function pay(float $x): bool;
    }
    class CashPayment implements Payable {
        public function pay(float $x): bool {
            echo "Оплата наличными: " . $x . "\n";
            return true;
        }
    }
    class CryptoPayment implements Payable {
        public function pay(float $x): bool {
            echo "Оплата криптовалютой: " . $x . "\n";
            return true;
        }
    }
    
    $crypt = new CryptoPayment();
    $cash = new CashPayment();

    $crypt->pay(1000.0);
    $cash->pay(0.50);

?>