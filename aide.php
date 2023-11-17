<?php
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $subject = filter_input(INPUT_POST, 'subject', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $return = null;

    if ($name != null && $email != null && $subject != null) {
        $return = "Merci $name pour votre message sur $subject. <br> Nous vous contacterons sur l'email suivent : $email"; 
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
    Détail : Page Aide
    Date : 29.09.2023
    Version : v1
 -->
<body>
    <header>
        <div></div> <!-- Future place ptt logo -->
        <h1>Aide</h1>
        <div><a class="button" href="login.html">Login</a><a class="button" href="index.html">Acceuil</a></div> <!-- Changer le lien -->
    </header>
    <main class="flexForm">
        <?php if(!isset($_POST["submit"])) { ?>
            <form action="aide.php" method="post">
            <div class="inputDiv">
                <label for="name">Votre nom :</label>
                <input type="text" name="name" id="name" class="input" class="inputAide" placeholder="nom" value="">
            </div>
            <div class="inputDiv">
                <label for="email">Votre e-mail :</label>
                <input type="text" name="email" id="email" class="input" class="inputAide" placeholder="e-mail" value="">
            </div>
            <div class="inputDiv">
                <label for="subject">Sujet :</label>
                <input type="text" name="subject" id="subject" class="input" class="inputAide" placeholder="sujet" value="">
            </div>
            <div class="inputDiv">
                <label for="message">Votre message :</label>
                <textarea name="message" id="message" class="input" class="inputAide" placeholder="message ici" cols="30" rows="10"></textarea>
            </div>
            <div class="inputBtn">
                <input class="buttonLien" name="submit" type="submit" value="Envoyer">
            </div>
        </form>
        <?php }?>
        <?php if ($return != null && isset($_POST["submit"])) {
                echo'<div id="divReponceEnvoie">';
                echo $return;
            }?>
        </div>
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