<?php

function GetFilterAttributes() : string {
    return "";  
}


function Verification3Lettre($attribut): bool {
    $attribut_taille = strlen($attribut);

    return $attribut_taille >= 3;
}

function VerificationEmail($email) {
    $pattern = '/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/';

    return preg_match($pattern, $email);
}