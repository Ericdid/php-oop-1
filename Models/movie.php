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