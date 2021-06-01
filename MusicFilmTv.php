<?php

require_once __DIR__ . '/Product.php';

    class MusicFilmTv extends Product {
        // override
        public $typology = 'Music/Movie/Tv';

        public $category;
    
        // override
        public function getInfoData() {
            $data_array = parent::getInfoData(); 
            $data_array['category'] = $this->category;

            return $data_array;
        }
}
?>