<?php
include __DIR__ . '/../models/Genere.php';
include __DIR__ . '/../models/Movie.php';

$movies = [
    $Matrix = new Movie('Matrix', 136, 1999, new Genere('gangster', 'commedia')),
    $PulpFiction = new Movie('Pulp fiction', 154, 1994, new Genere('fantascienza', 'azione'))
];

// echo $movies[0]->title . ' - ' . $movies[0]->timeCategory();
?>