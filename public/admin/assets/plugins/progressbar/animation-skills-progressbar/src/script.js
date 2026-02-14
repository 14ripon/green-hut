var lang = {
    "html": "90%",
    "css": "90%",
    "javascript": "70%",
    "php": "55%",
    "wordpress": "65%",
    "bootstrap": "75%",
    "laravel": "35%"
};
var multiply = 4;

$.each( lang, function( language, pourcent) {

        var delay = 700;

        setTimeout(function() {
            $('#'+language+'-pourcent').html(pourcent);
        },delay*multiply);

        multiply++;

    });