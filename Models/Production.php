<?php
class Production
{
    public $title;
    public $director;
    public $year;
    public $genre;

    // Costruttore - il suo scopo principale e inizializzare le variabili di istanza.
    //Il costruttore è un modo per impostare lo stato iniziale di un oggetto appena creato.
    public function __construct(
        string $title,
        string $director,
        string $year
    ) {
        $this->title    = $title;
        $this->director = $director;
        $this->year     = $year;
    }
    public function setTitle($title)
    {
        if (empty($title))
            return false;
        $this->title = $title;
    }

    public function getDetails()
    {
        return "$this->title, $this->director, $this->year";
    }

}
?>