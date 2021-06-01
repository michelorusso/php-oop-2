<?php

require_once __DIR__ . '/Product.php';

    class VideogamesConsole extends Product {
        // override
        public $typology = 'Videogames or Console';

        public $category;

        // override
        public function getInfoData() {
            $data_array = parent::getInfoData(); 
            $data_array['category'] = $this->category;
    
            return $data_array;
        }
    }

?>