
/* --------------------------------------------------------
Javascript for PHP-Dices

version: 1.0
last modified: 19.04.2018 by Emmanuel Pires
author: Emmanuel Pires
email: emmanuelf988@gmail.com
website: http://emmanuelpires.tk
----------------------------------------------------------*/

$(function(){

    // Quando carregar todo contúdo da página retirar o loader
    window.onload = function() {
        $('.loader').remove();
        $('.result').hide();
    };

    // Quando clicar para rolar os dados Chamar função via ajax e mostrar os resultados
    $('#dice_roll').on('click', function(event) {
        event.preventDefault();
        $('.result').show('fast');
        $.ajax({
            url: 'controle/sorteiocontrole.php',
            type: 'POST',
            dataType: 'html',
            data: $('#form-dice').serialize(),
        })
        .done(function(data) {
            $('.dice-result').html(data);
        })
        .fail(function() {
           $('.dice-result').html('<span>ERRO!<br>Tente novamente mais tarde</span>');
       });

    });

}); 