var $collectionHolder;
var $ajoutEleveBtn = $('.ajout-eleve'); // Référence au lien pour ajouter un élève

$(function () {
    $collectionHolder = $('#classe_eleves');
    $collectionHolder.data('index', $collectionHolder.find(':input').length);

    $ajoutEleveBtn.on('click', function (e) {
        e.preventDefault();
        ajoutEleveForm($collectionHolder);
    });

    function ajoutEleveForm($collectionHolder) {
        var prototype = $collectionHolder.data('prototype');

        var index = $collectionHolder.data('index');
        var newForm = prototype.replace(/__name__/g, index);
        $collectionHolder.data('index', index + 1);

        var $newFormTr = $('<tr></tr>').append(newForm);

        $collectionHolder.append($newFormTr);
        removeEleveLink($newFormTr);
    }

    function removeEleveLink($eleveFormTr) {
        var $supprEleve = $('.remove-eleve:last');
        console.info($supprEleve);

        $supprEleve.on('click', function (e) {
            e.preventDefault();
            $eleveFormTr.remove();
        });
    }
});
