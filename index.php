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
