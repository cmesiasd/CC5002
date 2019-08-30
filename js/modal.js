$('.galeria_img').click(function(e){
    var img = e.target.src;
    var modal = '<div class="modal" id="modal"><img src="' + img + '" class="modal_img"><div class="modal_boton"><img src="images/close.png" name="cerrar"></div></div>';
    $('body').append(modal);
    $('img[name="cerrar"]').click(function(){
        $('.modal').remove();
    })
});

$(document).keyup(function(e){
    if (e.which == 27){
        $('#modal').remove();
    }
})