function modifierFilmValidation(idFilm) {
    var confirmation = confirm("Voulez-vous vraiment modifier le film avec l'idFilm : " + idFilm + " ?");
    if (confirmation) {
        alert("Film modifier avec succès !");
        // Ajoutez ici la logique pour effectuer la suppression, par exemple, via une requête AJAX
    } else {
        alert("Modification annulée.");
    }
}

function supprimerFilmValidation(idFilm) {
    var confirmation = confirm("Voulez-vous vraiment supprimer le film avec l'idFilm : " + idFilm + " ?");
    if (confirmation) {
        window.location.href = "supprimerFilm.php?id=" + idFilm;
        // Ajoutez ici la logique pour effectuer la suppression, par exemple, via une requête AJAX
    } else {
        alert("Suppression annulée.");
    }
}
