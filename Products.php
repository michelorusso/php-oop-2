<?php

    class Products {
        
        public $typology;

        public $name;

        public $price;

        public $quantity;

        public function __construct( $_name , $_price, $_quantity) {
            $this->name = $_name;
            $this->price = $_price;
            $this->quantity = $_quantity;
        }

        public function getInfoData() {
            return [
                'typology' => $this->typology,
                'name' => $this->name,
                'price' => $this->price,
                'quantity' => $this->quantity,
            ]; 
        }

    }
?>