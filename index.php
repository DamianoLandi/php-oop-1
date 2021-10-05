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

$new_movie = new Movie('Avatar', '2009', 'Mario Rossi', '4h');

echo $new_movie->title . "</br>";
echo $new_movie->year . "</br>";
echo $new_movie->director . "</br>";
echo $new_movie->length . "</br>";
echo $new_movie->sequel(2);


?>