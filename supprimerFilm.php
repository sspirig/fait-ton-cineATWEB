<?php

require_once 'php/film.php';

// Lire l'identifiant à partir de la saisie utilisateur
$idFilm = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

if ($idFilm !== null && $idFilm !== false) {
    // Selons la base de donne utiliser il y a les contraite de clé étrangère qui font barrage a la suppréssion
    supprimerFilm($idFilm);
    
    // Retourner à l'index
    header('Location: ./logged.php');
    die();
}
