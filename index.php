<?php

require_once __DIR__.'./obj_file.php';

$info = new Movie(1);
$info->set_Info("Donnie Darko " , "Richard Kelly");
$info->nomeFilm = "Cmbiato";
$info->get_info();

$info = new Movie(2);
$info->set_Info("Bastardi senza gloria " , "Quentin Tarantino");
$info->get_Info();

$info = new Movie(3);
$info->set_Info("Le ali della libertà " , "Frank Darabont");
$info->get_Info();


