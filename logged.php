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

    // Définissez ici la catégorie par défaut, par exemple 'acteur', 'film' ou 'pays'
    $categorie = 'acteur';

    // Définissez les liens pour chaque catégorie
    $categories = ['acteur', 'film', 'pays'];
    $liens = [];
    foreach ($categories as $cat) {
        $liens[$cat] = "javascript:void(0); onclick=\"showActions('$cat')\"";
    }
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Script.php</title>
    <script>
        function toggleForm(formId) {
            var form = document.getElementById(formId);
            if (form.style.display === 'block') {
                form.style.display = 'none';
            } else {
                form.style.display = 'block';
            }
        }

        function showActions(categorie) {
            var categories = <?=json_encode($categories)?>;
            for (var i = 0; i < categories.length; i++) {
                var cat = categories[i];
                document.getElementById(cat + 'Actions').style.display = cat === categorie ? 'block' : 'none';
            }
        }
    </script>
</head>

<body>
    <header>
        <div></div> <!-- Future place ptt logo -->
        <h1>Admin</h1>
        <div><a class="button" href="index.html">Acceuil</a><a class="button" href="login.html">Login</a></div>
    </header>
    <main>
        <nav>
            <div>
                <?php
                // Affichez les liens en fonction de la variable $liens
                foreach ($categories as $cat) {
                    echo "<a class='button' href={$liens[$cat]}>$cat</a>";
                }
                ?>
            </div>
        </nav>
        <article class="flexForm">
            <?php
            // Affichez les formulaires et boutons pour chaque catégorie
            foreach ($categories as $cat) {
                echo "<div id='{$cat}Actions' style='display: none'>";
                echo "<h2>$cat</h2>";
                echo "<button class='buttonLien' onclick=\"toggleForm('ajouter{$cat}Form')\">Ajouter</button>";
                echo "<button class='buttonLien' onclick=\"toggleForm('modifier{$cat}Form')\">Modifier</button>";
                echo "<button class='buttonLien' onclick=\"toggleForm('supprimer{$cat}Form')\">Supprimer</button>";
                echo "</div>";
            }
            ?>
            
            <?php
            // Affichez les formulaires pour chaque catégorie
            foreach ($categories as $cat) {
                echo "<form id='ajouter{$cat}Form' style='display: none'>";
                echo "<!-- Formulaire pour ajouter $cat -->";
                echo "</form>";
            }
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
</body>

</html>
