<?php

class movie {
    public $title;

    public $genre;

    public $length;

    public function __construct(
        string $title,
        array $genre,
        int  $length,
    ){
        $this ->title  = $title;
        $this ->genre = $genre;
        $this ->length = $length;
    }

}

$new_movie = new movie ("Trappola Di Cristallo - Die Hard",["Natalizio,Action,Triller"],132);

var_dump($new_movie);