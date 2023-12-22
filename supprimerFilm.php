<?php

require_once 'php/film.php';

// Lire l'identifiant à partir de la saisie utilisateur
$idFilm = filter_input(INPUT_GET, 'idFilm', FILTER_VALIDATE_INT);

if ($idFilm !== null && $idFilm !== false) {
    supprimerFilm($idFilm);
    
    // Retourner à l'index
    header('Location: ./logged.php');
    die();
}
