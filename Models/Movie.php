<?php

class Movie
{
    protected $title;
    protected $language;
    protected $country;
    protected $year;

    public function __construct($_title, $_language, $_country, $_year)
    {
        $this->title = $_title;
        $this->language = $_language;
        $this->country = $_country;
        $this->year = $_year;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getLanguage()
    {
        return $this->language;
    }

    public function getCountry()
    {
        return $this->country;
    }

    public function getYear()
    {
        return $this->year;
    }
}

$PerUnPugnoDiDollari = new Movie("Per un pugno di dollari", "Italian", "IT", 1964);
$PerQualcheDollaroInPiù = new Movie("Per qualche dollaro in più", "Italian", "IT", 1965);
$IlBuonoIlBruttoIlCattivo = new Movie("Il buono, il brutto, il cattivo", "Italian", "IT", 1966);

$movieList = [];

array_push($movieList, $PerUnPugnoDiDollari, $PerQualcheDollaroInPiù, $IlBuonoIlBruttoIlCattivo);
