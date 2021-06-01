<?php

    class Product {
        
        public $typology;

        public $name;

        public $price;

        public function __construct( $_name , $_price) {
            $this->name = $_name;
            $this->price = $_price;
        }

        public function getInfoData() {
            return [
                'typology' => $this->typology,
                'name' => $this->name,
                'price' => $this->price,
            ]; 
        }

    }
?>