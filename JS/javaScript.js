$(document).ready(function () {
    $('input#submitCadastro').on('click', function () {
        var usuario = $('input#usuarioCadastro').val();
        var senha = $('input#senhaCadastro').val();
        if ($.trim(usuario) !== '') {
            $.post('ajax/cadastro.php', {user: usuario, pass: senha}, function (data) {
                alert(data);                
            });
        }
    });
});