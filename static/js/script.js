$(document).ready(function() {

    jQuery.extend(jQuery.validator.messages, {
      required: "Este campo es obligatorio."      
    });

    $("#formularioValidacion").validate({
        lang: 'es' // as the filename ends
     });

    });