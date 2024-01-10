<?php

require_once "php/film.php";

$idFilm = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

// Effacer les données du formulaire si le bouton "Effacer" est cliqué
if (isset($_POST["reset"])) {
    // $user = "";
    // $email = "";
    // $pwd = "";
}

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Acceuil-fait ton ciné</title>
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
        <h1>Login</h1>
        <div><a class="button" href="index.php">Accueil</a><a class="button" href="aide.php">Aide</a></div>
        <!-- Changer le lien -->
    </header>
    <main class="flexForm">
    <form action="modifierFilm.php" method="post">
        <div class="inputDiv">
            <label for="idFilm">ID du Film :</label>
            <input type="text" name="idFilm" id="idFilm" class="input" placeholder="ID du film"
                value="<?php ?>">
        </div>

        <div class="inputDiv">
            <label for="titre">Titre :</label>
            <input type="text" name="titre" id="titre" class="input" placeholder="Titre du film"
                value="<?php ?>">
        </div>

        <div class="inputDiv">
            <label for="annee">Année :</label>
            <input type="text" name="annee" id="annee" class="input" placeholder="Année de sortie"
                value="<?php ?>">
        </div>

        <div class="inputDiv">
            <label for="idPersonne">ID de la Personne :</label>
            <input type="text" name="idPersonne" id="idPersonne" class="input" placeholder="ID de la personne"
                value="<?php ?>">
        </div>

        <div class="inputDiv">
            <label for="idGenre">ID du Genre :</label>
            <input type="text" name="idGenre" id="idGenre" class="input" placeholder="ID du genre"
                value="<?php ?>">
        </div>

        <div class="inputDiv">
            <label for="resume">Résumé :</label>
            <textarea name="resume" id="resume" class="input" placeholder="Résumé du film"><?php ?></textarea>
        </div>

        <div class="inputDiv">
            <label for="idPays">ID du Pays :</label>
            <input type="text" name="idPays" id="idPays" class="input" placeholder="ID du pays"
                value="<?php ?>">
        </div>

        <div class="inputBtn">
            <input class="buttonLien" name="submit" type="submit" value="Envoyer">
            <input class="buttonLien" name="reset" type="submit" value="Effacer">
        </div>
    </form>
</main>

    </div>
    <footer>
        <div>
            Auteur : Yoan BMPS & Santiago SPRG <br>
            Projet : fais ton ciné <br>
            Atelier: Web <br>
        </div>
    </footer>
</body>

</html>