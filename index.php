<?php

require_once __DIR__ . "/Models/movie.php";
require __DIR__ . "/Movie_data/Movie_db.php";

$movie_list= [];



foreach ($Movies_db as $movie) {
    $movie_list [] = new Movie ($movie ["title"],$movie ["genre"],$movie ["length"]);
};
var_dump($movie_list);