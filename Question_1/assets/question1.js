$(document).ready(function(){
    $('#reverse_string_btn').on('click',function(){
        var formData = new FormData();
        formData.append('input_string', $('#input_string').val());
        // AJAX to give two files
        $.ajax({
            url: 'php/ajax/reverse.php',
            data: formData,
            type: 'POST',
            contentType: false,
            processData: false,
        }).done(function( html ) {
            var json = JSON.parse(html);
            $('#results_wrapper').show();
            $('#results').html(json.message);
        }).fail(function( html ) {
            $('#results_wrapper').show();
            $('#results').html('System error, please try again later');
        });
    });
    $('#reshuffle_string_btn').on('click',function(){
        var formData = new FormData();
        formData.append('input_string', $('#input_string').val());
        // AJAX to give two files
        $.ajax({
            url: 'php/ajax/reshuffle.php',
            data: formData,
            type: 'POST',
            contentType: false,
            processData: false,
        }).done(function( html ) {
            var json = JSON.parse(html);
            $('#results_wrapper').show();
            $('#results').html(json.message);
        }).fail(function( html ) {
            $('#results_wrapper').show();
            $('#results').html('System error, please try again later');
        });
    });
});