<?php 

class Movie{
    public $title;
    public $year;
    public $director;
    public $length;

    public function __construct($_title, $_year, $_director, $_length){
        $this->title = $_title;
        $this->year = $_year;
        $this->director = $_director;
        $this->length = $_length;
    }
};




?>