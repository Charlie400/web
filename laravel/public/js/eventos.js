// Funciones que fijan el menú arriba al hacer scroll

function alturaVentana(){
  var ventana = $(window).height();
  var alturaMenu = $("#mainMenu").height();
  alto = ventana - alturaMenu;
  return alto;
}

$(window).scroll(function() {
    if ($(window).scrollTop() <= alturaVentana()){
      $("#mainMenu").css({
        "position":"relative",
        "top": "91.8vh",
      });
    }
    else{
      $("#mainMenu").css({
        "position":"fixed",
        "top":"0",
        "z-index":"4",
      });
    }
    
});

// Funciones de rotación de los productos

function rotar(objeto){
  if(($(objeto).attr("id")) == "0"){
    $('#2').removeClass('centro');
    $('#2').addClass('derecha');
    $(objeto).removeClass('izquierda');
    $(objeto).addClass('centro');
    $('#1').removeClass('derecha');
    $('#1').addClass('izquierda');
    cambiarIds();
  }
  else if(($(objeto).attr("id")) == "1"){
    $('#2').removeClass('centro');
    $('#2').addClass('izquierda');
    $(objeto).removeClass('derecha');
    $(objeto).addClass('centro');
    $('#0').removeClass('izquierda');
    $('#0').addClass('derecha');
    cambiarIds();
  }
}

// Función encargada de cambiar el id de los productos

function cambiarIds(){
  var articles = $('.container article');
    articles.each(function(indice, elemento){
      if($(elemento).hasClass('izquierda')){
      $(elemento).attr("id","0");
      }
      else if($(elemento).hasClass('centro')){
        $(elemento).attr("id","2");
      }
      else{
        $(elemento).attr("id","1");
      }
  });
  
}

// Control del scroll

$(document).ready(function(){
  $('a[href*=#]').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'')
    && location.hostname == this.hostname) {
      var $target = $(this.hash);
      $target = $target.length && $target
      || $('[name=' + this.hash.slice(1) +']');
      if ($target.length) {
        var targetOffset = $target.offset().top;
        $('html,body')
        .stop().animate({scrollTop: targetOffset}, 500, 'easeOutQuad');
       return false;
      }
    }
  });

  
});


// prueba elementos emergentes
function muestraMenu(objeto){
  if ($('.btn').hasClass("mostrar")){
    $('.menuMovil_image').attr("src","../static/images/menu.png")
    $('.btn').removeClass('mostrar');
    $('.btn_desc').removeClass('mostrar');
  }
  else{
    $('.menuMovil_image').attr("src","../static/images/x.png")
    $('.btn').addClass('mostrar');
    $('.btn_desc').addClass('mostrar');
  }

}

function ocultar(){
    $('.menuMovil_image').attr("src","../static/images/menu.png")
    $('.btn').removeClass('mostrar');
    $('.btn_desc').removeClass('mostrar');
}


// prueba elementos que aparecen

// $(function() {  
//     var altoProductos = $("#productos").outerHeight() + 200;


//     var altoNosotros = $("#nosotros").outerHeight() + altoProductos;
//     var formulario = $("#formularios").outerHeight() + altoNosotros;

//     $(window).scroll(function(event) {

//         height = $(event.target).scrollTop();

//        if (height > altoProductos && height < altoNosotros) {
//             $('.profile').fadeIn(4000);
//        }
//     });
// });