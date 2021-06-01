<?php

require_once __DIR__ . '/Product.php';

    class Book extends Product {
        // override
        public $typology = 'Book';
    }

?>