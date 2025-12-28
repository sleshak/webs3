<?php
    namespace App\Models;
        class User {
        public function __construct(
            public string $name,
            public string $email
        ) {}
        
        public function getInfo(): string {
            return "Имя: {$this->name}, Email: {$this->email}";
        }
    }
?>
