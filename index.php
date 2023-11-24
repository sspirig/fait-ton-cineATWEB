<?php
require_once "php/functions.php";

$attributesTitle = "";
$attributesReal = "";
$attributesCategory = "";
$attributesActor = "";
$attributesLatest = "";
$attributesNewest = "";
$filter = filter_input(INPUT_GET, "filter", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$checked = filter_input(INPUT_GET, "checked", FILTER_VALIDATE_BOOL);
$attributes = GetFilterAttributes($filter, $checked, $_GET);

$attributesTitle = $attributes["title"];
$attributesReal = $attributes["real"];
$attributesCategory = $attributes["category"];
$attributesActor = $attributes["actor"];
$attributesLatest = $attributes["latest"];
$attributesNewest = $attributes["newest"];

// organisation
$dsn = "mysql:host=localhost;dbname=cinema;charset=utf8";
$opt = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_EMULATE_PREPARES => false
];

$pdo = new PDO($dsn, "adminCinema", "Super", $opt);

//$id = filter_input(INPUT_POST, "selectedId", FILTER_VALIDATE_INT);
$statement = $pdo->prepare("SELECT * FROM cinema.films ORDER BY :filter");
$statement->execute(
    [ ":filter" => $filter ]
);

$record = $statement->fetchAll(PDO::FETCH_ASSOC);

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
    Détail : Page d'acceuil
    Date : 29.09.2023
 -->
<body>
    <header>
        <div></div> <!-- Future place ptt logo -->
        <h1>Fais ton ciné</h1>
        <div><a class="button" href="login.html">Login</a><a class="button" href="aide.php">Aide</a></div> <!-- Changer le lien -->
    </header>
    <main>
        <section>
            <p class="whiteTxt"><b>Filtrer par : </b></p>
            <button <?php echo $attributesTitle; ?>>Titre</button>
            <button <?php echo $attributesReal; ?>>Réalisateur</button>
            <button <?php echo $attributesCategory; ?>>Genre</button>
            <button <?php echo $attributesActor; ?>>Acteur</button>
            <button <?php echo $attributesNewest; ?>>Dernières sorties</button>
            <button <?php echo $attributesLatest; ?>>Anciennes sorties</button>
        </section>
        <article class="filmContainer">
            <?php //GetFilms($filter, $record); ?>
            <div id="separatorDiv">
                <img class="film" src="img/placeholder.jpg" alt="placeholder" onclick="window.document.location.href='filminfo.php?film=filmAction';">
                <span class="txtimg">film Action</span>
            </div>
            <div id="separatorDiv">
                <img class="film" src="img/placeholder.jpg" alt="placeholder" onclick="window.document.location.href='filminfo.php?film=filmInformatique';">
                <span class="txtimg">film Action</span>
            </div>
            <div id="separatorDiv">
                <img class="film" src="img/placeholder.jpg" alt="placeholder" onclick="window.document.location.href='filminfo.php?film=filmAction';">
                <span class="txtimg">film Action</span>
            </div>
            <div id="separatorDiv">
                <img class="film" src="img/placeholder.jpg" alt="placeholder" onclick="window.document.location.href='filminfo.php?film=filmAction';">
                <span class="txtimg">film Action</span>
            </div>
            <div id="separatorDiv">
                <img class="film" src="img/placeholder.jpg" alt="placeholder" onclick="window.document.location.href='filminfo.php?film=filmAction';">
                <span class="txtimg">film Action</span>
            </div>
            <div id="separatorDiv">
                <img class="film" src="img/placeholder.jpg" alt="placeholder" onclick="window.document.location.href='filminfo.php?film=filmAction';">
                <span class="txtimg">film Action</span>
            </div>
        </article>
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