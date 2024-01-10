function modifierFilmValidation(idFilm) {
    var confirmation = confirm("Voulez-vous vraiment modifier le film avec l'idFilm : " + idFilm + " ?");
    if (confirmation) {
        window.location.href = "modifierFormulaireFilm.php?id=" + idFilm;
    } else {
        alert("Modification annulée.");
    }
}

function supprimerFilmValidation(idFilm) {
    var confirmation = confirm("Voulez-vous vraiment supprimer le film avec l'idFilm : " + idFilm + " ?");
    if (confirmation) {
        window.location.href = "supprimerFilm.php?id=" + idFilm;
    } else {
        alert("Suppression annulée.");
    }
}
