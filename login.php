<?php
require_once "php/functions.php";

$user = filter_input(INPUT_POST, 'user', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$pwd = filter_input(INPUT_POST, 'pwd', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

$errors = array(); // tableau pour stocker les messages d'erreur

if (isset($_POST["submit"])) {
    if (!Verification3Lettre($user)) {
        $errors['user'] = "Le nom doit avoir au moins 3 caractères.";
    }

    if (!VerificationEmail($email)) {
        $errors['email'] = "L'email doit être valide.";
    }

    if (!Verification3Lettre($pwd)) {
        $errors['pwd'] = "Le sujet doit avoir au moins 3 caractères.";
    }


    if (empty($errors) && $pwd === "Super") {
        $message = "Mot de passe correct. Bienvenue, $user !";
        echo "<script>alert('$message');</script>";
        header("Location: logged.php");
    }
}

// Effacer les données du formulaire si le bouton "Effacer" est cliqué
if (isset($_POST["reset"])) {
    $user = "";
    $email = "";
    $pwd = "";
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
        <form action="login.php" method="post">
            <div class="inputDiv">
                <label for="username">Utilisateur :</label>
                <input type="text" name="username" id="username" class="input" placeholder="nom d'utilisateur"
                    value="<?php echo htmlspecialchars($user); ?>">
                <?php if (isset($errors['user'])) {
                    echo '<span class="error">' . $errors['user'] . '</span>';
                } ?>
            </div>
            <div class="inputDiv">
                <label for="email">Email :</label>
                <input type="email" name="email" id="email" class="input" placeholder="email"
                    value="<?php echo htmlspecialchars($email); ?>">
                <?php if (isset($errors['email'])) {
                    echo '<span class="error">' . $errors['email'] . '</span>';
                } ?>
            </div>
            <div class="inputDiv">
                <label for="mdp">Mot de passe :</label>
                <input type="password" name="mdp" id="mdp" class="input" placeholder="mot de passe"
                    value="<?php echo htmlspecialchars($pwd); ?>">
                <?php if (isset($errors['pwd'])) {
                    echo '<span class="error">' . $errors['pwd'] . '</span>';
                } ?>
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