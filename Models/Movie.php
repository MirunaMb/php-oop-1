<?php
require_once __DIR__ . '/Genre.php';

// definiamo la classe Movie 
class Movie
{
    //aggiungiamo le variabili di istanza
    public $title;
    public $director;

    public $year;

    public $genre;

    // Costruttore - il suo scopo principale e inizializzare le variabili di istanza.
    //Il costruttore è un modo per impostare lo stato iniziale di un oggetto appena creato.
    public function __construct($title, $director, $year)
    {
        $this->title    = $title;
        $this->director = $director;
        $this->year     = $year;
    }

    // metodo per ottenere le  info sul film
    public function getMovieInfo()
    {
        $genreInfo = ($this->genre) ? $this->genre->getGenreInfo() : "Genere non specificato";
        return "Titolo: {$this->title}, Regista: {$this->director}, Anno: {$this->year}, $genreInfo ";
    }

    public function setGenre(Genre $genre)
    {
        $this->genre = $genre;
    }

}

//creazione degli oggetti della classe Genre 
$genre1 = new Genre("Drammatico");
$genre2 = new Genre("Azione");


//creazione di un istanza=oggetto della classe Movie
//new Movie() e l'operazione che crea un nuovo oggetto basato sulla classe Movie
$movie1 = new Movie("Il Padrino", "Francis Ford Coppola", 1972);

// creazione secondo oggetto della classe Movie
$movie2 = new Movie("Titanic", "James Cameron", 1997);
//utillizzo del metodo per avere le info sul film
//Prendiamo il metodo getMovieInfo() che si trova nel oggetto movie e poi lo inglobiamo nella variabile $movieInfo
//Inglobiamo tutto nella variabile $movieInfo per stampare o manipolare le informazioni che essa contiene.
$movieInfo1 = $movie1->getMovieInfo();
$movieInfo2 = $movie2->getMovieInfo();

// associazione dei generi ai film
$movie1->setGenre($genre1);
$movie2->setGenre($genre2);

//stampiamo le informazioni
echo "Film 1: $movieInfo1 <br> ";
echo "Film 2 : $movieInfo2 ";

?>