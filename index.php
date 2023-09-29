<?php
// definiamo la classe Movie 
class Movie
{
    //aggiungiamo le variabili di istanza
    public $title;
    public $director;

    public $year;

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
        return "Titolo: { $this->title }, Registra: { $this->director }, Anno: { $this->year } ";
    }
}
//creazione di un istanza=oggetto della classe Movie

?>