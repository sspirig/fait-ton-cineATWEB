<?php
$dsn = "mysql:host=localhost;dbname=cinema;charset=utf8";
$opt = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_EMULATE_PREPARES => false
];

$pdo = new PDO($dsn, "adminCinema", "Super", $opt);

//$id = filter_input(INPUT_POST, "selectedId", FILTER_VALIDATE_INT);
$statement = $pdo->prepare("SELECT * FROM cinema.films");
$statement->execute();

$record = $statement->fetchAll(PDO::FETCH_ASSOC);

$tableauFilms = [

];

function ShowResults($films)
{
    $answer = "<table border='1'><thead><tr><th>N° Film</th><th>Titre</th><th>Résumé</th><th>Année</th><th>Pays</th><th>Modifier</th><th>Supprimer</th></tr></thead><tbody>";
    foreach ($films as $film) {
        $idFilm = $film['idFilm'];
        $answer .= "<tr>";
        $answer .= "<td>{$film['idFilm']}</td>";
        $answer .= "<td>{$film['titre']}</td>";
        $answer .= "<td>{$film['resume']}</td>";
        $answer .= "<td>{$film['annee']}</td>";
        $answer .= "<td>{$film['idPays']}</td>";
        $answer .= "<td><button onclick='modifierFilmValidation($idFilm)'><img src='img/modifier.png'></button></td>";
        $answer .= "<td><button onclick='supprimerFilmValidation($idFilm)'><img src='img/poubelle.png'></button></td>";
        $answer .= "</tr>";
    }
    $answer .= "</tbody></table>";
    return $answer;
}


?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Script.php</title>
</head>

<body>
    <header>
        <div></div> <!-- Future place ptt logo -->
        <h1>Admin</h1>
        <div><a class="button" href="index.php">Acceuil</a><a class="button" href="login.html">Login</a></div>
    </header>
    <main>
        <nav>
            <div class="adminBar">
            </div>
        </nav>
        <section>
            <?php
                echo ShowResults($record);
            ?>
        </section>
        <article class="flexForm">
            <?php
            ?>
        </article>
    </main>
    <footer>
        <div>
            Auteur : Yoan BMPS & Santiago SPRG <br>
            Projet : fais ton ciné <br>
            Atelier: Web <br>
        </div>
    </footer>
    <script src="srcript.js"></script>
</body>

</html>