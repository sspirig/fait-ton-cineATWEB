<?php
    $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
    $mdp = filter_input(INPUT_POST, "mdp", FILTER_SANITIZE_STRING);
    $text_error = null;

    if ($mdp === "Super") {
        $text_error = "Mot de passe correct. Bienvenue, $username !";
    } else {
        header("Location: index.html");
        exit;
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
<!-- 
    Auteur : Yoan BMPS et Santiago SPRG
    Projet : Fais ton ciné
    Détail : Page script
    Date : 13.10.2023
    Version : v1
 -->
<body>
    <header>
        <div></div> <!-- Future place ptt logo -->
        <h1>Fais ton ciné</h1>
        <div><a class="button" href="login.html">Login</a><a class="button" href="aide.php">Aide</a></div>
    </header>
    <main>
        <section>
            <?= $text_error ?>
        </section>
        <article>

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