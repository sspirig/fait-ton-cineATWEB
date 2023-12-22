<?php
    require_once "fonctions.php";

    /**
     * Retourne 10 Films 
     * 
     * @return array Un tableau de Films
     */
    function selectionnerTousLesFilms(): array
    {
        // Préparer la requête (SELECT id, author, title, pub_year, genre_id FROM books LIMIT 10;)
        $query = "SELECT id, author, title, pub_year, genre_id FROM books LIMIT 10";
        $statement = connexionBdd()->prepare($query);

        // Exécuter la requête
        $statement->execute();

        // Lire tous les enregistrements
        return $statement->fetchAll();
    }

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
        $query = "INSERT INTO books (author, title, pub_year, genre_id) VALUES (:auteur, :titre, :anneePub, :genreId)";
        $statement = connexionBdd()->prepare($query);
    
        // Exécuter la requête
        $succes = $statement->execute([
            ':auteur' => $Film['auteur'],
            ':titre' => $Film['titre'],
            ':anneePub' => $Film['anneePub'],
            ':genreId' => $Film['genreId'],
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
        $sql = "UPDATE books SET author = :auteur, title = :titre, pub_year = :publication, genre_id = :genre WHERE id = :id";

        $statement = $pdo->prepare($sql);

        // Exécuter la requête
        $statement->execute([
            ':id' => $Film['id'],
            ':auteur' => $Film['auteur'],
            ':titre' => $Film['titre'],
            ':publication' => $Film['anneePub'],
            ':genre' => $Film['genreId'],
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
        $sql = 'DELETE FROM books WHERE id = :id';

        $statement = $pdo->prepare($sql);

        // Exécuter la requête, passe l'ID saisi par l'utilisateur
        $statement->execute([
            ':id' => $id
        ]);
    }
