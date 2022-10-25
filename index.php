<!-- Oggi pomeriggio ripassate i primi concetti di classe e di variabili e
metodi d'istanza che abbiamo visto stamattina e create un file index.php in cui:
- è definita una classe ‘Movie’
   => all'interno della classe sono dichiarate delle variabili d'istanza
   => all'interno della classe è definito un costruttore
   => all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà -->


<?php

class movie
{

    // variabili di istanza
    public $title;
    public $genre;
    public $year;


    // costruttore
    function __construct($title, $genre, $year)
    {
        $this->title = $title;
        $this->genre = $genre;
        $this->year = $year;
    }


    // metodo
    function viewMovie()
    {
        echo "Film in programmazione oggi: Title: $this->title Genre: $this->genre Year: $this->year" . "<br>";
    }
}


$movie1 = new movie("Jojo Rabbit", "Drammatico", "2019");
$movie2 = new movie("Interstellar", "Sci-fi", "2014");
$movie3 = new movie("Jurassic Park", "Avventura", "1993");
$movie4 = new movie("Alien", "Horror", "1979");

$movie1->viewMovie();
$movie2->viewMovie();
$movie3->viewMovie();
$movie4->viewMovie();
