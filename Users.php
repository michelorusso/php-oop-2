<?php

    class Users {

        public $name;
    
        public $lastName;

        public $creditCard;

        public $shoppingCart;

        public function __construct($_name, $_lastName, $_creditCard) {
            $this->name = $_name;
            $this->lastName = $_lastName;
            $this->creditCard = $_creditCard;
        }

        public function getInfoData() {
            return [
                'name' => $this->name,
                'lastname' => $this->lastName,
                'creditcard' => $this->creditCard,
                'shoppingcart' => $this->shoppingCart,
            ]; 
        }
    }


?>