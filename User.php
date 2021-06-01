<?php
    class User {

        public $name;
    
        public $lastName;

        public $email;
        
        protected $shoppingCart = [];

        public function __construct($_name, $_lastName, $_email ) {
            $this->name = $_name;
            $this->lastName = $_lastName;
            $this->email = $_email;
        }

        public function getInfoData() {
            return [
                'name' => $this->name,
                'lastname' => $this->lastName,
                'email' => $this->email,
            ]; 
        }

        public function addCart($product) {
            $this->shoppingCart[] = $product;
        }

        public function getCart() {
            return $this->shoppingCart;
        }
    }
?>