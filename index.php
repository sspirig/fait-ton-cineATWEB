<?php
$attributesTitle = "";
$attributesReal = "";
$attributesCategory = "";
$attributesActor = "";
$attributesLatest = "";
$attributesNewest = "";
$filter = filter_input(INPUT_GET, "filter", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$checked = filter_input(INPUT_GET, "checked", FILTER_VALIDATE_BOOL);
//1 ere fois : $filter = false, $checked = false
//2e : $filter = 'title', $checked = true
//3e fois $filter = 'title', $checked = true
if (array_key_exists("filter",$_GET))
{
    //echo "Arrivé dedans".var_dump($filter);
    if ($checked)
    {
        switch ($filter ) {
            case 'title':
                $attributesTitle = "class=\"buttonPressed\" onclick=\"window.document.location.href='index.php?filter=title&checked=false';\"";
    
                $attributesReal = "class=\"buttonLien\" onclick=\"window.document.location.href='index.php?filter=real&checked=true';\"";
                $attributesCategory = "class=\"buttonLien\" onclick=\"window.document.location.href='index.php?filter=category&checked=true';\"";
                $attributesActor = "class=\"buttonLien\" onclick=\"window.document.location.href='index.php?filter=actor&checked=true';\"";
                $attributesLatest = "class=\"buttonLien\" onclick=\"window.document.location.href='index.php?filter=latest&checked=true';\"";
                $attributesNewest = "class=\"buttonLien\" onclick=\"window.document.location.href='index.php?filter=newest&checked=true';\"";
                break;
            case 'real':
                $attributesReal = "class=\"buttonPressed\" onclick=\"window.document.location.href='index.php?filter=real&checked=false';\"";
    
                $attributesTitle = "class=\"buttonLien\" onclick=\"window.document.location.href='index.php?filter=title&checked=true';\"";
                $attributesCategory = "class=\"buttonLien\" onclick=\"window.document.location.href='index.php?filter=category&checked=true';\"";
                $attributesActor = "class=\"buttonLien\" onclick=\"window.document.location.href='index.php?filter=actor&checked=true';\"";
                $attributesLatest = "class=\"buttonLien\" onclick=\"window.document.location.href='index.php?filter=latest&checked=true';\"";
                $attributesNewest = "class=\"buttonLien\" onclick=\"window.document.location.href='index.php?filter=newest&checked=true';\"";
                break;
            case 'category':
                $attributesCategory = "class=\"buttonPressed\" onclick=\"window.document.location.href='index.php?filter=category&checked=false';\"";
    
                $attributesTitle = "class=\"buttonLien\" onclick=\"window.document.location.href='index.php?filter=title&checked=true';\"";
                $attributesReal = "class=\"buttonLien\" onclick=\"window.document.location.href='index.php?filter=real&checked=true';\"";
                $attributesActor = "class=\"buttonLien\" onclick=\"window.document.location.href='index.php?filter=actor&checked=true';\"";
                $attributesLatest = "class=\"buttonLien\" onclick=\"window.document.location.href='index.php?filter=latest&checked=true';\"";
                $attributesNewest = "class=\"buttonLien\" onclick=\"window.document.location.href='index.php?filter=newest&checked=true';\"";
                break;
            case 'actor':
                $attributesActor = "class=\"buttonPressed\" onclick=\"window.document.location.href='index.php?filter=actor&checked=false';\"";
    
                $attributesTitle = "class=\"buttonLien\" onclick=\"window.document.location.href='index.php?filter=title&checked=true';\"";
                $attributesReal = "class=\"buttonLien\" onclick=\"window.document.location.href='index.php?filter=real&checked=true';\"";
                $attributesCategory = "class=\"buttonLien\" onclick=\"window.document.location.href='index.php?filter=category&checked=true';\"";
                $attributesLatest = "class=\"buttonLien\" onclick=\"window.document.location.href='index.php?filter=latest&checked=true';\"";
                $attributesNewest = "class=\"buttonLien\" onclick=\"window.document.location.href='index.php?filter=newest&checked=true';\"";
                break;
            case 'latest':
                $attributesLatest = "class=\"buttonPressed\" onclick=\"window.document.location.href='index.php?filter=latest&checked=false';\"";
    
                $attributesTitle = "class=\"buttonLien\" onclick=\"window.document.location.href='index.php?filter=title&checked=true';\"";
                $attributesReal = "class=\"buttonLien\" onclick=\"window.document.location.href='index.php?filter=real&checked=true';\"";
                $attributesCategory = "class=\"buttonLien\" onclick=\"window.document.location.href='index.php?filter=category&checked=true';\"";
                $attributesActor = "class=\"buttonLien\" onclick=\"window.document.location.href='index.php?filter=actor&checked=true';\"";
                $attributesNewest = "class=\"buttonLien\" onclick=\"window.document.location.href='index.php?filter=newest&checked=true';\"";
                break;
            case 'newest':
                $attributesNewest = "class=\"buttonPressed\" onclick=\"window.document.location.href='index.php?filter=newest&checked=false';\"";
    
                $attributesTitle = "class=\"buttonLien\" onclick=\"window.document.location.href='index.php?filter=title&checked=true';\"";
                $attributesReal = "class=\"buttonLien\" onclick=\"window.document.location.href='index.php?filter=real&checked=true';\"";
                $attributesCategory = "class=\"buttonLien\" onclick=\"window.document.location.href='index.php?filter=category&checked=true';\"";
                $attributesActor = "class=\"buttonLien\" onclick=\"window.document.location.href='index.php?filter=actor&checked=true';\"";
                $attributesLatest = "class=\"buttonLien\" onclick=\"window.document.location.href='index.php?filter=latest&checked=true';\"";
                break;
        }
    }
    else {// quand on deselectionne
        $attributesTitle = "class=\"buttonLien\" onclick=\"window.document.location.href='index.php?filter=title&checked=true';\"";
        $attributesReal = "class=\"buttonLien\" onclick=\"window.document.location.href='index.php?filter=real&checked=true';\"";
        $attributesCategory = "class=\"buttonLien\" onclick=\"window.document.location.href='index.php?filter=category&checked=true';\"";
        $attributesActor = "class=\"buttonLien\" onclick=\"window.document.location.href='index.php?filter=actor&checked=true';\"";
        $attributesLatest = "class=\"buttonLien\" onclick=\"window.document.location.href='index.php?filter=latest&checked=true';\"";
        $attributesNewest = "class=\"buttonLien\" onclick=\"window.document.location.href='index.php?filter=newest&checked=true';\"";
    }
    
} else { // 1ere fois // a faire elseif else
    //echo "arrivé 1ere fois\n";
    $attributesTitle = "class=\"buttonLien\" onclick=\"window.document.location.href='index.php?filter=title&checked=true';\"";
    $attributesReal = "class=\"buttonLien\" onclick=\"window.document.location.href='index.php?filter=real&checked=true';\"";
    $attributesCategory = "class=\"buttonLien\" onclick=\"window.document.location.href='index.php?filter=category&checked=true';\"";
    $attributesActor = "class=\"buttonLien\" onclick=\"window.document.location.href='index.php?filter=actor&checked=true';\"";
    $attributesLatest = "class=\"buttonLien\" onclick=\"window.document.location.href='index.php?filter=latest&checked=true';\"";
    $attributesNewest = "class=\"buttonLien\" onclick=\"window.document.location.href='index.php?filter=newest&checked=true';\"";
}
// organisation


// var_dump($_GET);
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
        <div><a class="button" href="login.php">Login</a><a class="button" href="aide.php">Aide</a></div> <!-- Changer le lien -->
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