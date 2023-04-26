// Fehler Klassen setzen
$('form.forms input').change(function () {
    var aktuellerWert = $(this).val();

    if (
        $(this).attr('type') == "text" ||
        $(this).attr('type') == "email" ||
        $(this).attr('type') == "date" ||
        $(this).attr('type') == "file" ||
        $(this).attr('type') == 'radio' ||
        $(this).attr('type') == 'checkbox'
    ) {
        var error = $(this).closest('.has-error');
    }

    if (aktuellerWert != "") {
        $(error[0]).removeClass('has-error');
    }
});

$('form.forms textarea').change(function () {
    var aktuellerWert = $(this).val();
    var error = $(this).closest('.has-error');

    if (aktuellerWert != "") {
        $(error[0]).removeClass('has-error');
    }
});

$('form.forms select').change(function () {
    var aktuellerWert = $(this).val();
    var error = $(this).closest('.has-error');

    if (aktuellerWert != "") {
        $(error[0]).removeClass('has-error');
    }
});


// Label formatieren, wenn was eingetragen wurde
$('form.forms input, form.forms textarea, form.forms select').change(function() {
    var label = $(this).closest('.form-group').find('label.check-label');
    var fontRegular = 'Neue Plak Text W04 Regular';

    if ( $(this).val().length > 0 && $(label).length ) {
        $(label).css('font-family', fontRegular);
    }
    if ($(this).is(":checked")) {
        if ($(this).attr('type') == 'radio') {
            var label = $(this).closest('.powermail_fieldwrap_type_radio').find('label.check-label');
        }
        $(label).css('font-family', fontRegular);
    }
});