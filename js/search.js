$(document).ready(function(){
    $('#search').focus()
    
    $('#search').on('keyup', function(){
        
        var search = $('#search').val();
        if (search.length > 2){
            $.ajax({
            type: 'POST',
            url: 'search.php',
            
            data: {'search': search}
            
            })
            .done(function(resultado){
                $('#content-result').css("visibility","visible");
                $('#result').html(resultado)
                
            })
            .fail(function(){
            alert('Hubo un error :(')
            })
        }
        else {
            $('#content-result').css("visibility", "hidden");
            $('#result').html("");
        }
    })
})