$(document).ready(function () {
    // Canviem el '#' per un '.' per seleccionar la CLASSE 'important'
    $(".important").hover(
        function () {
            $(this).css("text-decoration", "underline");
        },
        function () {
            $(this).css("text-decoration", "none");
        }
    );
});
