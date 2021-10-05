<?php 

class Movie{
    public $title;
    public $year;
    public $director;
    public $length;

    public function sequel($num){
        return "$this->title $num";
    }

    public function __construct($_title, $_year, $_director, $_length){
        $this->title = $_title;
        $this->year = $_year;
        $this->director = $_director;
        $this->length = $_length;
    }
};

$movie = new Movie('Avatar', '2009', 'Mario Rossi', '4h');

$new_movie = new Movie('Godzilla', '1960', 'Luigi Verdi', '3.5h');

$movies = [$movie, $new_movie];

foreach($movies as $movie){
    echo $movie->title . "</br>";
    echo $movie->year . "</br>";
    echo $movie->director . "</br>";
    echo $movie->length . "</br>";
    echo $movie->sequel(2) . "</br> </br>";
}



?>