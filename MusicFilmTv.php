<?php

require_once __DIR__ . '/Products.php';

    class MusicFilmTv extends Products {
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