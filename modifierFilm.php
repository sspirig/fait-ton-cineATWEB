<?php

require_once 'php/film.php';

// Lire l'identifiant à partir de la saisie utilisateur
$idFilm = filter_input(INPUT_POST, 'idFilm', FILTER_VALIDATE_INT);
$titre = filter_input(INPUT_POST, 'titre', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$annee = filter_input(INPUT_POST, 'annee', FILTER_VALIDATE_INT);
$idPersonne = filter_input(INPUT_POST, 'idPersonne', FILTER_VALIDATE_INT);
$idGenre = filter_input(INPUT_POST, 'idGenre', FILTER_VALIDATE_INT);
$resume = filter_input(INPUT_POST, 'resume', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$idPays = filter_input(INPUT_POST, 'idPays', FILTER_VALIDATE_INT);

$films = [
    'idFilm' => $idFilm,
    'titre' => $titre,
    'annee' => $annee,
    'idPersonne' => $idPersonne,
    'idGenre' => $idGenre,
    'resume' => $resume,
    'idPays' => $idPays,
];

if ($idFilm !== null && $idFilm !== false) {
    // Selons la base de donne utiliser il y a les contraite de clé étrangère qui font barrage a la suppréssion
    modifierFilm($films);
    
    // Retourner à l'index
    header('Location: ./logged.php');
    die();
}
