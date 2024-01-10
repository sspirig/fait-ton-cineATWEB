<?php
    require_once "functions.php";
    
    /**
     * Insère un Film dans la base
     * 
     * @param string $auteur
     * @param string $titre
     * @param int $annee
     * @param int $idGenre
     * @return bool
     */
    function insererFilm(array $Film): bool
    {
        // Préparer la requête (INSERT INTO books (author, title, pub_year, genre_id) VALUES (<AUTEUR>, <TITRE>, <ANNÉE-PUB>, <ID DU GENRE>);)
        $query = "INSERT INTO films (auteur, title, annee, idPersonne, idGenre, resume, idPays) VALUES (:auteur, :title, :annee, :idPersonne, :idGenre, :resume, :idPays)";
        $statement = connexionBdd()->prepare($query);
    
        // Exécuter la requête
        $succes = $statement->execute([
            ':auteur' => $Film['auteur'],
            ':titre' => $Film['titre'],
            ':annee' => $Film['annee'],
            ':idPersonne' => $Film['idPersonne'],
            ':idGenre' => $Film['idGenre'],
            ':resume' => $Film['resume'],
            ':idPays' => $Film['idPays'],
        ]);

        return $succes;
    }

    /**
     * Insère un Film dans la base
     * 
     * @param int $id
     * @param string $auteur
     * @param string $titre
     * @param int $annee
     * @param int $idGenre
     * @return void
     */
    function modifierFilm(array $Film): void
    {
	    // Ouvrir la connexion
	    $pdo = connexionBdd();

	    // Préparer la requête
        $sql = "UPDATE films SET titre = :titre, annee = :annee, idPersonne = :idPersonne, idGenre = :idGenre, resume = :resume, idPays = :idPays WHERE idFilm = :idFilm";

        $statement = $pdo->prepare($sql);

        // Exécuter la requête
        $statement->execute([
            ':idFilm' => $Film['idFilm'],
            ':titre' => $Film['titre'],
            ':annee' => $Film['annee'],
            ':idPersonne' => $Film['idPersonne'],
            ':idGenre' => $Film['idGenre'],
            ':resume' => $Film['resume'],
            ':idPays' => $Film['idPays'],
        ]);
    }

    /**
     * Supprime le Film dont l'id est passé en paramètre
     * 
     * @param int $id
     * @return void
     */
    function supprimerFilm(int $id): void
    {
	    // Ouvrir la connexion
	    $pdo = connexionBdd();

	    // Préparer la requête
        $sql = 'DELETE FROM films WHERE idFilm = :idFilm';

        $statement = $pdo->prepare($sql);

        // Exécuter la requête, passe l'ID saisi par l'utilisateur
        $statement->execute([
            ':idFilm' => $id
        ]);
    }
