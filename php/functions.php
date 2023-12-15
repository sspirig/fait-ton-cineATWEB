<?php
require_once "constante.php";

function GetFilterAttributes($filter, $checked, $GET) : array {
    $array = [
        "title" => "",
        "real" => "",
        "category" => "",
        "actor" => "",
        "latest" => "",
        "newest" => ""
    	];
    //1 ere fois : $filter = false, $checked = false
    //2e : $filter = 'title', $checked = true
    //3e fois $filter = 'title', $checked = true
    if (array_key_exists("filter", $GET))
    {
        //echo "Arrivé dedans".var_dump($filter);
        if ($checked)
        {
            switch ($filter ) {
                case 'title':
                    
                    $array["title"] = "class=\"buttonPressed\" onclick=\"window.document.location.href='index.php?filter=title&checked=false';\"";
                    $array["real"] = "class=\"buttonLien\" onclick=\"window.document.location.href='index.php?filter=real&checked=true';\"";
                    $array["category"] = "class=\"buttonLien\" onclick=\"window.document.location.href='index.php?filter=category&checked=true';\"";
                    $array["actor"] = "class=\"buttonLien\" onclick=\"window.document.location.href='index.php?filter=actor&checked=true';\"";
                    $array["latest"] = "class=\"buttonLien\" onclick=\"window.document.location.href='index.php?filter=latest&checked=true';\"";
                    $array["newest"] = "class=\"buttonLien\" onclick=\"window.document.location.href='index.php?filter=newest&checked=true';\"";
                    break;
                case 'real':
                    $array["real"] = "class=\"buttonPressed\" onclick=\"window.document.location.href='index.php?filter=real&checked=false';\"";
                    $array["title"] = "class=\"buttonLien\" onclick=\"window.document.location.href='index.php?filter=title&checked=true';\"";
                    $array["category"] = "class=\"buttonLien\" onclick=\"window.document.location.href='index.php?filter=category&checked=true';\"";
                    $array["actor"] =  "class=\"buttonLien\" onclick=\"window.document.location.href='index.php?filter=actor&checked=true';\"";
                    $array["latest"] = "class=\"buttonLien\" onclick=\"window.document.location.href='index.php?filter=latest&checked=true';\"";
                    $array["newest"] = "class=\"buttonLien\" onclick=\"window.document.location.href='index.php?filter=newest&checked=true';\"";
                    break;
                case 'category':
                    $array["category"] = "class=\"buttonPressed\" onclick=\"window.document.location.href='index.php?filter=category&checked=false';\"";
                    $array["title"] = "class=\"buttonLien\" onclick=\"window.document.location.href='index.php?filter=title&checked=true';\"";
                    $array["real"] = "class=\"buttonLien\" onclick=\"window.document.location.href='index.php?filter=real&checked=true';\"";
                    $array["actor"] = "class=\"buttonLien\" onclick=\"window.document.location.href='index.php?filter=actor&checked=true';\"";
                    $array["latest"] = "class=\"buttonLien\" onclick=\"window.document.location.href='index.php?filter=latest&checked=true';\"";
                    $array["newest"] = "class=\"buttonLien\" onclick=\"window.document.location.href='index.php?filter=newest&checked=true';\"";
                    break;
                case 'actor':
                    $array["actor"] = "class=\"buttonPressed\" onclick=\"window.document.location.href='index.php?filter=actor&checked=false';\"";
                    $array["title"] = "class=\"buttonLien\" onclick=\"window.document.location.href='index.php?filter=title&checked=true';\"";
                    $array["real"] = "class=\"buttonLien\" onclick=\"window.document.location.href='index.php?filter=real&checked=true';\"";
                    $array["category"] = "class=\"buttonLien\" onclick=\"window.document.location.href='index.php?filter=category&checked=true';\"";
                    $array["latest"] = "class=\"buttonLien\" onclick=\"window.document.location.href='index.php?filter=latest&checked=true';\"";
                    $array["newest"] = "class=\"buttonLien\" onclick=\"window.document.location.href='index.php?filter=newest&checked=true';\"";
                    break;
                case 'latest':
                    $array["latest"] = "class=\"buttonPressed\" onclick=\"window.document.location.href='index.php?filter=latest&checked=false';\"";
                    $array["title"] = "class=\"buttonLien\" onclick=\"window.document.location.href='index.php?filter=title&checked=true';\"";
                    $array["real"] = "class=\"buttonLien\" onclick=\"window.document.location.href='index.php?filter=real&checked=true';\"";
                    $array["category"] = "class=\"buttonLien\" onclick=\"window.document.location.href='index.php?filter=category&checked=true';\"";
                    $array["actor"] ="class=\"buttonLien\" onclick=\"window.document.location.href='index.php?filter=actor&checked=true';\"";
                    $array["newest"] = "class=\"buttonLien\" onclick=\"window.document.location.href='index.php?filter=newest&checked=true';\"";
                    break;
                case 'newest':
                    $array["newest"] =  "class=\"buttonPressed\" onclick=\"window.document.location.href='index.php?filter=newest&checked=false';\"";
                    $array["title"] = "class=\"buttonLien\" onclick=\"window.document.location.href='index.php?filter=title&checked=true';\"";
                    $array["real"] = "class=\"buttonLien\" onclick=\"window.document.location.href='index.php?filter=real&checked=true';\"";
                    $array["category"] = "class=\"buttonLien\" onclick=\"window.document.location.href='index.php?filter=category&checked=true';\"";
                    $array["actor"] ="class=\"buttonLien\" onclick=\"window.document.location.href='index.php?filter=actor&checked=true';\"";
                    $array["latest"] = "class=\"buttonLien\" onclick=\"window.document.location.href='index.php?filter=latest&checked=true';\"";
                    break;
            }
        }
        else {// quand on deselectionne
            $array["title"] = "class=\"buttonLien\" onclick=\"window.document.location.href='index.php?filter=title&checked=true';\"";
            $array["real"] = "class=\"buttonLien\" onclick=\"window.document.location.href='index.php?filter=real&checked=true';\"";
            $array["category"] = "class=\"buttonLien\" onclick=\"window.document.location.href='index.php?filter=category&checked=true';\"";
            $array["actor"] = "class=\"buttonLien\" onclick=\"window.document.location.href='index.php?filter=actor&checked=true';\"";
            $array["latest"] = "class=\"buttonLien\" onclick=\"window.document.location.href='index.php?filter=latest&checked=true';\"";
            $array["newest"] = "class=\"buttonLien\" onclick=\"window.document.location.href='index.php?filter=newest&checked=true';\"";
        }
        
    } else { // 1ere fois // a faire elseif else
        //echo "arrivé 1ere fois\n";
        $array["title"] = "class=\"buttonLien\" onclick=\"window.document.location.href='index.php?filter=title&checked=true';\"";
        $array["real"] = "class=\"buttonLien\" onclick=\"window.document.location.href='index.php?filter=real&checked=true';\"";
        $array["category"] = "class=\"buttonLien\" onclick=\"window.document.location.href='index.php?filter=category&checked=true';\"";
        $array["actor"] = "class=\"buttonLien\" onclick=\"window.document.location.href='index.php?filter=actor&checked=true';\"";
        $array["latest"] = "class=\"buttonLien\" onclick=\"window.document.location.href='index.php?filter=latest&checked=true';\"";
        $array["newest"] = "class=\"buttonLien\" onclick=\"window.document.location.href='index.php?filter=newest&checked=true';\"";
    }
    return $array;
}

function GetFilms($filter) : string {
    $result = "";
    switch ($filter) {
        case 'title':

            $sql = "SELECT titre FROM films ORDER BY titre";
            $record = dbRun($sql)->fetchAll();

            foreach($record as $key => $value)
            {
                $imgName = GetImageName($record, $key);
                if (strlen($record[$key]["titre"]) > 28)
                {
                    $record[$key]["titre"] = substr_replace($record[$key]["titre"], "...", 28);
                }
                $result .= "<div id=\"separatorDiv\">
                <img class=\"film\" src=\"img/{$imgName}.jpg\" alt=\"".trim($record[$key]["titre"])."\" onclick=\"window.document.location.href='filminfo.php?film=".trim($record[$key]["titre"])."';\">
                <span class=\"txtimg\">{$record[$key]["titre"]}</span></div>";
            }
           
            return $result;
        case 'real':

            $sql = "SELECT titre, idPersonne, idFilm FROM films ORDER BY idPersonne";
            $record = dbRun($sql)->fetchAll();
            $oldReal = null;

            foreach($record as $key => $value)
            {
                // Si c'est un nouveau realisateur on rajoute une ligne avec son nom
                if ($record[$key]["idPersonne"] !== $oldReal || $oldReal == null)
                {
                    $oldReal = $record[$key]["idPersonne"];
                    $sql = "SELECT prenom, nom FROM personnes WHERE idPersonne = ( SELECT idPersonne FROM films WHERE idFilm = :id )";
                    $param = ["id" => $record[$key]["idFilm"]];
                    $real = dbRun($sql, $param)->fetch();
                    $result .= "<br><h2 id=\"h2Real\">{$real["prenom"]} {$real["nom"]}</h2><br>";
                    
                }
                $imgName = GetImageName($record, $key);
                $result .= "<div id=\"separatorDiv\">
                <img class=\"film\" src=\"img/{$imgName}.jpg\" alt=\"".trim($record[$key]["titre"])."\" onclick=\"window.document.location.href='filminfo.php?film=".trim($record[$key]["titre"])."';\">
                <span class=\"txtimg\">{$record[$key]["titre"]}</span></div>";
            }
            
            return $result;
        default:
            # code...
            break;
    }
}

function GetImageName($record, $key) : string {
    switch (strtolower(trim($record[$key]["titre"]))) {    
        case "terminator":
            return "terminator";
        default:
            return "placeholder";
    }
}

function db(): PDO
{
    static $pdo = null;

    if ($pdo === null) {
        $dsn = 'mysql:host=' . BDD_HOTE . ';dbname=' . BDD_NOM . ';charset=' . BDD_CHARSET;

        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false,
        ];

        $pdo = new PDO($dsn, BDD_UTILISATEUR, BDD_MOT_DE_PASSE, $options);
    }

    return $pdo;
}

/**
 * Connexion à une BD en utilisant PDO avec un pseudo singleton.
 *
 * @return PDO Un objet PDO
 */
function dbRun($sql, $param = null) {
    // Préparer la requête SQL
    $statement = db()->prepare($sql);

    // Exécuter la requête.
    $statement->execute($param);

    // Retourne le PDOStatement pour lire les données dans le code appelant.
    return $statement;
}