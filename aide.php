<?php
require_once "php/functions.php";

$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$subject = filter_input(INPUT_POST, 'subject', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$return = null;

$errors = array(); // tableau pour stocker les messages d'erreur

if (isset($_POST["submit"])) {
    if (!Verification3Lettre($name)) {
        $errors['name'] = "Le nom doit avoir au moins 3 caractères.";
    }

    if (!VerificationEmail($email)) {
        $errors['email'] = "L'email doit être valide.";
    }

    if (!Verification3Lettre($subject)) {
        $errors['subject'] = "Le sujet doit avoir au moins 3 caractères.";
    }

    if (!Verification3Lettre($message)) {
        $errors['message'] = "Le message doit avoir au moins 3 caractères.";
    }

    if (empty($errors)) {
        $return = "Merci $name pour votre message sur $subject. <br> Nous vous contacterons sur l'email suivant : $email <br> <div> Retourner a <a href='index.php' id='retourAcceuil' >l'acceuil</a><div>";
    }
}

// Effacer les données du formulaire si le bouton "Effacer" est cliqué
if (isset($_POST["reset"])) {
    $name = "";
    $email = "";
    $subject = "";
    $message = "";
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

<body>
    <header>
        <div></div> <!-- Future place ptt logo -->
        <h1>Aide</h1>
        <div><a class="button" href="login.php">Login</a><a class="button" href="index.php">Accueil</a></div>
    </header>
    <main class="flexForm">
        <?php if ($return === null) { ?>
            <form action="aide.php" method="post">
                <!-- Modification pour afficher les messages d'erreur -->
                <div class="inputDiv">
                    <label for="name">Votre nom :</label>
                    <input type="text" name="name" id="name" class="input" class="inputAide" placeholder="nom"
                        value="<?php echo htmlspecialchars($name); ?>">
                    <?php if (isset($errors['name'])) {
                        echo '<span class="error">' . $errors['name'] . '</span>';
                    } ?>
                </div>
                <div class="inputDiv">
                    <label for="email">Votre e-mail :</label>
                    <input type="text" name="email" id="email" class="input" class="inputAide" placeholder="email"
                        value="<?php echo htmlspecialchars($email); ?>">
                    <?php if (isset($errors['email'])) {
                        echo '<span class="error">' . $errors['email'] . '</span>';
                    } ?>
                </div>
                <div class="inputDiv">
                    <label for="subject">Sujet :</label>
                    <input type="text" name="subject" id="subject" class="input" class="inputAide" placeholder="sujet"
                        value="<?php echo htmlspecialchars($subject); ?>">
                    <?php if (isset($errors['subject'])) {
                        echo '<span class="error">' . $errors['subject'] . '</span>';
                    } ?>
                </div>
                <div class="inputDiv">
                    <label for="message">Votre message :</label>
                    <textarea name="message" id="message" class="input" class="inputAide" placeholder="message ici"
                        cols="30" rows="10"><?php echo htmlspecialchars($message); ?></textarea>
                    <?php if (isset($errors['message'])) {
                        echo '<span class="error">' . $errors['message'] . '</span>';
                    } ?>
                </div>

                <div class="inputBtn">
                    <input class="buttonLien" name="submit" type="submit" value="Envoyer">
                    <input class="buttonLien" name="reset" type="submit" value="Effacer">
                </div>
            </form>
        <?php } else { ?>
            <div class="returnAide">
                <?php echo $return;
        } ?>
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