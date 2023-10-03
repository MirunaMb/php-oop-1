<?php
require_once __DIR__ . '/Production.php';
class TvSeries extends Production
{
    use LogDetails;
    public $aired_from_year;
    public $aired_to_year;
    public $number_of_episodes;
    public $number_of_seasons;

    public function __construct(
        string $title,
        string $director,
        float $year,
        float $aired_from_year,
        float $aired_to_year,
        float $number_of_episodes,
        float $number_of_seasons,
    ) {
        parent::__construct($title, $director, $year);
        $this->aired_from_year    = $aired_from_year;
        $this->aired_to_year      = $aired_to_year;
        $this->number_of_episodes = $number_of_episodes;
        $this->number_of_seasons  = $number_of_seasons;
    }
    public function getDetails()
    {
        return "
        <strong>Titolo:</strong> $this->title, <br>
        <strong>Director:</strong> $this->director, <br>
        <strong>Year:</strong> $this->year, <br>
        <strong>Aired from year:</strong> $this->aired_from_year, <br>
        <strong>Aired to year:</strong> $this->aired_to_year, <br>
        <strong>Number of episodes:</strong> $this->number_of_episodes, <br>
        <strong>Number of seasons:</strong> $this->number_of_seasons";
    }

}

?>