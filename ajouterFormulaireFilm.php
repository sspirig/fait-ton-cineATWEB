<?php

require_once "php/film.php";

$idFilm = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Ajouter un film</title>
</head>
<!-- 
    Auteur : Yoan BMPS et Santiago SPRG
    Projet : Fais ton ciné
    Détail : Page de login
    Date : 29.09.2023  
    Version : v1
 -->

<body>
    <header>
        <div></div> <!-- Future place ptt logo -->
        <h1>Ajouter film</h1>
        <div><a class="button" href="index.php">Accueil</a><a class="button" href="logged.php">logged.php</a></div>
        <!-- Changer le lien -->
    </header>
    <main class="flexForm">
    <form action="ajouterFilm.php" method="post">
        <div class="inputDiv">
            <label for="titre">Titre :</label>
            <input type="text" name="titre" id="titre" class="input" placeholder="Titre du film"
                value="">
        </div>

        <div class="inputDiv">
            <label for="annee">Année :</label>
            <input type="text" name="annee" id="annee" class="input" placeholder="Année de sortie"
                value="">
        </div>

        <div class="inputDiv">
            <label for="idPersonne">ID de la Personne :</label>
            <input type="text" name="idPersonne" id="idPersonne" class="input" placeholder="ID de la personne"
                value="">
        </div>

        <div class="inputDiv">
            <label for="idGenre">ID du Genre :</label>
            <input type="text" name="idGenre" id="idGenre" class="input" placeholder="ID du genre"
                value="">
        </div>

        <div class="inputDiv">
            <label for="resume">Résumé :</label>
            <textarea name="resume" id="resume" class="input" placeholder="Résumé du film"></textarea>
        </div>

        <div class="inputDiv">
            <label for="idPays">ID du Pays :</label>
            <input type="text" name="idPays" id="idPays" class="input" placeholder="ID du pays"
                value="">
        </div>

        <div class="inputBtn">
            <input class="buttonLien" name="submit" type="submit" value="Envoyer">
        </div>
    </form>
</main>
    <footer>
        <div>
            Auteur : Yoan BMPS & Santiago SPRG <br>
            Projet : fais ton ciné <br>
            Atelier: Web <br>
        </div>
    </footer>
</body>

</html>