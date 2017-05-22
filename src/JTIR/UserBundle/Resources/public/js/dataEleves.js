var $collectionHolder;
var $ajoutEleveBtn = $('.ajout-eleve'); // Référence au lien pour ajouter un élève

$(function () {
    $collectionHolder = $('#classe_eleves'); // ref pour le tbody ou l'on va ajouter les élèves
    $collectionHolder.data('index', $collectionHolder.find(':input').length);

    $ajoutEleveBtn.on('click', function (e) { // event onClick
        e.preventDefault(); // Suppression du comportement de base
        ajoutEleveForm($collectionHolder); // Appel a la fonction AddEleveForm
    });

    function ajoutEleveForm($collectionHolder) {
        var prototype = $collectionHolder.data('prototype'); // Le prototype (le template pour les données)

        var index = $collectionHolder.data('index'); // ajout d'un index
        var newForm = prototype.replace(/__name__/g, index);
        $collectionHolder.data('index', index + 1);

        var $newFormTr = $('<tr></tr>').append(newForm); // La ligne avec les données

        $collectionHolder.append($newFormTr); // Ajoute la ligne dans le tbody
        removeEleveLink($newFormTr); // Appel de la fonction pour le bouton de suppression de la ligne
    }

    function removeEleveLink($eleveFormTr) {
        var $supprEleve = $('.remove-eleve:last'); // Le lien pour suppr. la ligne

        $supprEleve.on('click', function (e) { // event onClick
            e.preventDefault(); // Suppression du comportement de base
            $eleveFormTr.remove(); // suppression de la ligne
        });
    }
});
