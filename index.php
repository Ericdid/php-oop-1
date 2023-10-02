<?php

require_once __DIR__ . "/Models/movie.php";

$new_movie = new movie ("Trappola Di Cristallo - Die Hard",["Natalizio,Action,Triller"],132);

var_dump($new_movie);