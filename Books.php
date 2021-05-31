<?php

require_once __DIR__ . '/Products.php';

    class Books extends Products {
        // override
        public $typology = 'Books';
    }

?>