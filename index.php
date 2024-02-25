<?php
class Movie
{
    public $title;
    public $year;
    public $director;
    public $actors;

    function __construct($title, $year, Director $director, $actor)
    {
        $this->title = $title;
        $this->year = $year;
        $this->director = $director->getFullName();
        $this->actors = $actor;
    }
}

class Director
{
    public $first_name;
    public $last_name;

    function __construct($name, $last_name)
    {
        $this->first_name = $name;
        $this->last_name = $last_name;
    }

    public function getFullName()
    {
        return $this->first_name . ' ' . $this->last_name;
    }
}

$director1 = new Director('Christopher', 'Nolan');

$film1 = new Movie('Interstellar', 2014, $director1, '');

$director2 = new Director('Ridley', 'Scott');

$film2 = new Movie('Alien: Covenant', 2017, $director2, '');

var_dump($film1);
var_dump($film2);
