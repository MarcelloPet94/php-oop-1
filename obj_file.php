<?php

class Movie {
    public $age;
    public $nomeFilm;
    public $nomeRegista;

    function __construct($_age)
    {
        $this->age = $_age;
    }

    function set_info($Film , $Regista)
    {
        $this->nomeFilm = $Film;
        $this->nomeRegista = $Regista;
    }

    function get_info()
    {
        echo $this->nomeFilm;
        echo $this->nomeRegista;
    }

}