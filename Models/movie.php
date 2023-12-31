<?php 

class Movie {
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

    public function get_details(){
        $genre_details = implode(" - ",$this -> genre);
        return "Titolo: $this->title <hr> Durata: $this->length minuti <hr> Genere: $genre_details";
    }

}