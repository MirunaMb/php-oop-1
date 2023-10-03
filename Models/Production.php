<?php
class ProductionException extends Exception
{
    public function __construct($message = "Errore generico", $code = 0, $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
trait LogDetails
{
    public function logDetails()
    {
        try {
            //gestisce eventuali eccezioni che vengono lanciate nel blocco try
            //$e è una variabile che rappresenta l'eccezione catturata
            //getMessage() è un metodo definito nella classe di base delle eccezioni in PHP
            $details = $this->getDetails();
            echo "Dettagli: $details";
        } catch (ProductionException $e) {
            // Qui catturiamo l'eccezione solo se si verifica un errore effettivo
            echo "Errore: " . $e->getMessage();
        }
    }
}

class Production
{
    use LogDetails;

    public $title;
    public $director;
    public $year;
    public $genre;

    // Costruttore - il suo scopo principale e inizializzare le variabili di istanza.
    //Il costruttore è un modo per impostare lo stato iniziale di un oggetto appena creato.
    public function __construct(
        string $title,
        string $director,
        float $year
    ) {
        $this->title    = $title;
        $this->director = $director;
        $this->year     = $year;
    }
    public function setTitle($title)
    {
        if (empty($title)) {
            throw new ProductionException("Il titolo non puo essere vuoto");
        }
        $this->title = $title;
    }
    public function getDetails()
    {
        return "$this->director, $this->year";
    }

}
?>