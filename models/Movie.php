<?php
class Movie
{
    public $title;
    public $duration;
    public $date;

    public $genere;

    function __construct($_title, $_duration, $_date, Genere $genere)
    {
        $this->title = $_title;
        $this->duration = $_duration;
        $this->date = $_date;
        $this->genere = $genere;
    }

    public function timeCategory()
    {
        if ($this->duration <= 30) {
            return 'short film';
        } elseif ($this->duration <= 60) {
            return 'medium duration';
        } else {
            return 'long film';
        }
    }

}


?>