$(function(){

    window.onload = function() {
        $('.loader').css('display', 'none');
    };

    $('#dice_roll').on('click', function(event) {
        event.preventDefault();
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