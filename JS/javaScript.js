$(document).ready(function () {
    $('input#botaoLogin').on('click', function () {
        var usuario = $('input#usuario').val();
        alert(usuario);
    });
});