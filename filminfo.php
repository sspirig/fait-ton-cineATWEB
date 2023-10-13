<?php
$filmNom = "";
$image = "";
$film = filter_input(INPUT_GET, "film", FILTER_SANITIZE_FULL_SPECIAL_CHARS );
switch ($film) {
    case "%27filmAction%27":
        $filmNom = "Film Action";
        $image = "img/placeholder.jpg";
        break;
    default:
        
        break;
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
    Détail : Page d'informations du films
    Date : 29.09.2023
 -->
<body>
    <header>
        <div></div> <!-- Future place ptt logo -->
        <h1>Informations sur <?=$filmNom?></h1>
        <div><a class="button" href="login.html">Login</a><a  class="button" href="aide.html">Aide</a></div> <!-- Changer le lien -->
    </header>
    <main>
        <section>
            <?php
            echo "<h1>{$filmNom}</h1>";
            echo "<img src=\"$image\" alt=\"filmAction\">";
            ?>
        </section>
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