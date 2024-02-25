<?php
class Movie
{
    public $title;
    public $year;
    public $director;
    public $actors;

    function __construct($title, $year, $director, $actor)
    {
        $this->title = $title;
        $this->year = $year;
        $this->director = $director;
        $this->actors = $actor;
    }
}

$film1 = new Movie('Interstellar', 2014, 'Christopher Nolan', '');

$film2 = new Movie('Alien: Covenant', 2017, 'Ridley Scott', '');

var_dump($film1);
var_dump($film2);
