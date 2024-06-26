<!-- Oggi pomeriggio ripassate i primi concetti di classe, variabili e metodi d'istanza che abbiamo visto stamattina e create un file index.php in cui:
 - è definita una classe ‘Movie’
   => all'interno della classe sono dichiarate delle variabili d'istanza
   => all'interno della classe è definito un costruttore
   => all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà -->

<?php
class Movie {
    // variabili d'istanza
    public $name;
    public $genre;

    // costruttore

    function  __construct($name, $genre )
    {
        $this->name = $name;
        $this->genre = $genre;
    }

    function get_name()
    {
        return $this->name;    
    }
    function get_genre ()
    {
        return $this->genre;
    }
        
}

$movie_1 = new Movie ( 'Your name', 'Romantico' );
$movie_2 = new Movie ( 'Avengers', 'Azione' );


?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP</title>
</head>
<body>
    <h3>
        Film 1: <?php echo $movie_1-> get_name() ?>
    </h3>
    <h3>
        Genere: <?php echo $movie_1-> get_genre() ?>
    </h3>
    <h3>
        Film 2: <?php echo $movie_2-> get_name() ?>
    </h3>
    <h3>
    Genere: <?php echo $movie_2-> get_genre() ?>
    </h3>
</body>
</html>