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
        $liens[$cat] = "javascript:void(0);";
    }

    // Fonction pour générer un formulaire
    function generateForm($type, $name) {
        echo "<form id='ajouter{$type}Form' style='display: none'>";
        echo "<div class='inputDiv'>";
        echo "<label for='{$name}{$type}'>Nom de {$type} :</label>";
        echo "<input type='text' id='{$name}{$type}' name='{$name}{$type}' class='input' required>";
        echo "</div>";
        echo "<div class='inputBtn'>";
        echo "<button class='buttonLien' type='submit'>Ajouter {$type}</button>";
        echo "</div>";
        echo "</form>";

        echo "<form id='modifier{$type}Form' style='display: none'>";
        echo "<div class='inputDiv'>";
        echo "<label for='{$name}{$type}Modif'>Nom de {$type} (Modification) :</label>";
        echo "<input type='text' id='{$name}{$type}Modif' name='{$name}{$type}Modif' class='input' required>";
        echo "</div>";
        echo "<div class='inputDiv'>";
        echo "<label for='{$name}{$type}Base'>Nom de {$type} (Base avant modif) :</label>";
        echo "<input type='text' id='{$name}{$type}Base' name='{$name}{$type}Base' class='input' required>";
        echo "</div>";
        echo "<div class='inputBtn'>";
        echo "<button class='buttonLien' type='submit'>Modifier {$type}</button>";
        echo "</div>";
        echo "</form>";

        echo "<form id='supprimer{$type}Form' style='display: none'>";
        echo "<div class='inputDiv'>";
        echo "<label for='{$name}{$type}Suppr'>Nom de {$type} à supprimer :</label>";
        echo "<input type='text' id='{$name}{$type}Suppr' name='{$name}{$type}Suppr' class='input' required>";
        echo "</div>";
        echo "<div class='inputBtn'>";
        echo "<button class='buttonLien' type='submit'>Supprimer {$type}</button>";
        echo "</div>";
        echo "</form>";
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

            // Masquer le formulaire actuel si visible
            if (form.style.display === 'block') {
                form.style.display = 'none';
            } else {
                // Afficher le formulaire actuel
                form.style.display = 'block';

                // Masquer tous les autres formulaires
                var allForms = document.querySelectorAll('form');
                for (var i = 0; i < allForms.length; i++) {
                    if (allForms[i].id !== formId) {
                        allForms[i].style.display = 'none';
                    }
                }
            }
        }

        function showActions(categorie) {
            var categories = <?=json_encode($categories)?>;
            for (var i = 0; i < categories.length; i++) {
                var cat = categories[i];
                document.getElementById(cat + 'Actions').style.display = cat === categorie ? 'block' : 'none';

                // Masquer tous les formulaires lorsque vous cliquez sur une catégorie
                var allForms = document.querySelectorAll('form');
                for (var j = 0; j < allForms.length; j++) {
                    allForms[j].style.display = 'none';
                }
            }
        }
    </script>
</head>

<body>
    <header>
        <div></div> <!-- Future place ptt logo -->
        <h1>Admin</h1>
        <div><a class="button" href="index.php">Acceuil</a><a class="button" href="login.html">Login</a></div>
    </header>
    <main>
        <nav>
            <div>
                <?php
                // Affichez les liens en fonction de la variable $liens
                foreach ($categories as $cat) {
                    echo "<a class='button' href='javascript:void(0);' onclick='showActions(\"$cat\")'>$cat</a>";
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

                // Utilisez la fonction generateForm pour générer les formulaires
                generateForm($cat, 'nom');
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
