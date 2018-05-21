
/* --------------------------------------------------------
Javascript for PHP-Dices

version: 1.0
last modified: 19.04.2018 by Emmanuel Pires
author: Emmanuel Pires
email: emmanuelf988@gmail.com
website: http://emmanuelpires.tk
----------------------------------------------------------*/

// Quando carregar todo contúdo da página retirar o loader
window.onload = function() {
    $('.loader').css('display','none');
    $('.result').hide();
};


$(function(){

    // Quando clicar para rolar os dados Chamar função via ajax e mostrar os resultados
    $('#dice_roll').on('click', function(event) {
        event.preventDefault();
        $('.result').show('fast');
        $.ajax({
            url: 'controle/sorteiocontrole.php',
            type: 'POST',
            dataType: 'html',
            data: $('#form-dice').serialize(),
            beforeSend: function() {
                $('.dice-result').html('<center><svg width="50px"  height="50px"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid" class="lds-rolling" style="background: none;"><circle cx="50" cy="50" fill="none" ng-attr-stroke="{{config.color}}" ng-attr-stroke-width="{{config.width}}" ng-attr-r="{{config.radius}}" ng-attr-stroke-dasharray="{{config.dasharray}}" stroke="#0c0c0c" stroke-width="6" r="30" stroke-dasharray="141.37166941154067 49.12388980384689" transform="rotate(294 50 50)"><animateTransform attributeName="transform" type="rotate" calcMode="linear" values="0 50 50;360 50 50" keyTimes="0;1" dur="1s" begin="0s" repeatCount="indefinite"></animateTransform></circle></svg><center>');
            }
        })
        .done(function(data) {
            $('.dice-result').html(data);
        })
        .fail(function() {
            $('.dice-result').html('<span>ERRO!<br>Tente novamente mais tarde</span>');
        });
    });

}); 