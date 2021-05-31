<?php

    class Users {

        public $name;
    
        public $lastName;

        public $email;

        private $creditCard;

        public function __construct($_name, $_lastName, $_email , $_creditCard) {
            $this->name = $_name;
            $this->lastName = $_lastName;
            $this->email = $_email;
            $this->creditCard = $_creditCard;
        }

        public function getInfoData() {
            return [
                'name' => $this->name,
                'lastname' => $this->lastName,
                'email' => $this->email,
                'creditcard' => $this->creditCard,
            ]; 
        }
    }


?>