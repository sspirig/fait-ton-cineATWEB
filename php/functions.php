<?php

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

function GetFilms($filter, $record) : string {
    switch ($filter) {
        case 'title':
            foreach($record as $key => $value)
            {
                
            }
            $result = "<div> id=\"separatorDiv\">
            <img class=\"film\" src=\"img/placeholder.jpg\" alt=\"{$record[title]}\" onclick=\"window.document.location.href='filminfo.php?film={$record[title]}';\">
            <span class=\"txtimg\">{$record[title]}</span></div>";
            break;
        
        default:
            # code...
            break;
    }
}