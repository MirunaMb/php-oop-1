<?php
require_once __DIR__ . '/Production.php';


class Movie extends Production
{
    use LogDetails;
    public $published_year;
    public $running_time;

    public function __construct(
        string $title,
        string $director,
        float $year,
        float $published_year,
        float $running_time,
    ) {
        parent::__construct($title, $director, $year);
        $this->published_year = $published_year;
        $this->running_time   = $running_time;
    }
    public function getDetails()
    {
        return "
        <strong>Titolo:</strong> $this->title, <br>
        <strong>Director:</strong> $this->director, <br>
        <strong>Year:</strong> $this->year, <br>
        <strong>Published Year:</strong> $this->published_year, <br>
        <strong>Running Time:</strong> $this->running_time";

    }

}

?>