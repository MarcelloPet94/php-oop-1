<?php

class Movie {
    public $age;
    public $nomeFilm;
    public $nomeRegista;

    function set_info($Film , $Regista)
    {
        $this->nomeFilm = $Film."<br>";
        $this->nomeRegista = $Regista;
    }

    function get_info()
    {
        echo $this->nomeFilm;
        echo $this->nomeRegista;
    }

}