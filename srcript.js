function modifierFilm(idFilm) {
    var confirmation = confirm("Voulez-vous vraiment modifier le film avec l'idFilm : " + idFilm + " ?");
    if (confirmation) {
        alert("Film modifier avec succès !");
        // Ajoutez ici la logique pour effectuer la suppression, par exemple, via une requête AJAX
    } else {
        alert("Modification annulée.");
    }
}

function supprimerFilm(idFilm) {
    var confirmation = confirm("Voulez-vous vraiment supprimer le film avec l'idFilm : " + idFilm + " ?");
    if (confirmation) {
        alert("Film supprimé avec succès !");
        // Ajoutez ici la logique pour effectuer la suppression, par exemple, via une requête AJAX
    } else {
        alert("Suppression annulée.");
    }
}
