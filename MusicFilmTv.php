<?php

require_once __DIR__ . '/Products.php';

    class MusicFilmTv extends Products {
        // override
        public $typology = 'Music/Film/Tv';

        public $category;
    }

?>