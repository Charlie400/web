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
        "position":"absolute",
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
    $('.menuMovil_image').attr("src","http://insous.com/laravel/public/images/menu.png");
    $('.btn').removeClass('mostrar');
    $('.btn_desc').removeClass('mostrar');
  }
  else{
    $('.menuMovil_image').attr("src","http://insous.com/laravel/public/images/x.png");
    $('.btn').addClass('mostrar');
    $('.btn_desc').addClass('mostrar');
  }

}

function ocultar(){
    $('.menuMovil_image').attr("src","../static/images/menu.png")
    $('.btn').removeClass('mostrar');
    $('.btn_desc').removeClass('mostrar');
}


// Marcar en menú la sección en la que te encuentras

$(function() {  
    var altoInicio = $("#home").outerHeight() - 30;
    var altoServicios = ($("#slide").outerHeight() - 30) + altoInicio;
    var altoNosotros = ($("#nosotros").outerHeight() - 30) + altoServicios;
    var formulario = ($("#formularios").outerHeight() - 30) + altoNosotros;

    $(window).scroll(function(event) {

       height = $(event.target).scrollTop();
       if (height < altoInicio) {
          $('.mainMenu_item').css({"background":"#202020"});
          $('#linkHome').css({"background":"#FFA533"});
       }
       else if (height > altoInicio && height < altoServicios) {
          $('.mainMenu_item').css({"background":"#202020"});
          $('#linkSlide').css({"background":"#FFA533"});
       }
       else if (height > altoServicios && height < altoNosotros) {
          $('.mainMenu_item').css({"background":"#202020"});
          $('#linkNosotros').css({"background":"#FFA533"});
       }
       else if (height > altoNosotros) {
          $('.mainMenu_item').css({"background":"#202020"});
          $('#linkFormulario').css({"background":"#FFA533"});
       }

    });
});


// Animaciones

function ejemplo(){
  $('.comp1 .slide_title').delay(200).animate({"left":"0%","opacity":"0"},800,'easeInOutBack');
  $('.comp1 .slide_description').delay(400).animate({"left":"0%","opacity":"0"},800,'easeInOutBack');
  $('.comp1 .slide_imageContainer').delay(600).animate({"right":"80%","opacity":"0"},1000,'easeInOutBack');
}


function borrar(objeto){
  $(objeto).children().each(function(){
    $(this).css({"opacity":"0"});
  });
}

function muevelosIzq(){
  mueveComp1Izquierda();
  mueveComp2Izquierda();
  $('.arrow_right').css({"pointer-events":"none","cursor":"default"});
  $('.arrow_left').css({"pointer-events":"auto","cursor":"default"});
}

function muevelosDer(){
  mueveComp1Derecha();
  mueveComp2Derecha();
  $('.arrow_left').css({"pointer-events":"none","cursor":"default"});
  $('.arrow_right').css({"pointer-events":"auto","cursor":"default"});
}

function mueveComp1Izquierda(){
  $('#comp1').children().each(function(){
    if($(this).hasClass("slide_title")){
      $(this).delay(200).animate({"left":"0%","opacity":"0"},800,'easeInOutBack');
    }
    else if($(this).hasClass("slide_description")){
      $(this).delay(400).animate({"left":"0%","opacity":"0"},800,'easeInOutBack');
    }
    else if($(this).hasClass("logoDW") || $(this).hasClass("logoDWB")){
      $(this).delay(100).animate({"opacity":"0"},600,'easeInOutBack');
    }
    else{
      $(this).delay(600).animate({"right":"80%","opacity":"0"},1000,'easeInOutBack');
    }
  });
  $('#comp1').css({"z-index":"1"});
}

function mueveComp1Derecha(){
  $('#comp1').children().each(function(){
    if($(this).hasClass("slide_title")){
      $(this).delay(400).animate({"left":"17%","opacity":"1"},2000,'easeInOutBack');
    }
    else if($(this).hasClass("slide_description")){
      $(this).delay(600).animate({"left":"17%","opacity":"1"},1800,'easeInOutBack');
    }
    else if($(this).hasClass("logoDW") || $(this).hasClass("logoDWB")){
      $(this).delay(900).animate({"opacity":"1"},2000,'easeInOutBack');
    }
    else{
      $(this).delay(800).animate({"right":"13%","opacity":"1"},1800,'easeInOutBack');
    }
  });
  $('#comp1').css({"z-index":"1"});
}

function mueveComp2Izquierda(){
  // $('#comp2').css({"opacity":"1"});
  $(".slide_title_right p").delay(400).animate({"left":"-50%","opacity":"1"},1600,'easeInOutBack');
  $(".slide_description_right").delay(600).animate({"left":"-20%","opacity":"1"},1600,'easeInOutBack');
  $(".slide_imageContainer_right").delay(800).animate({"right":"5%","opacity":"1"},1800,'easeInOutBack');
  $('#comp2').css({"z-index":"2"});
}

function mueveComp2Derecha(){
  $('#comp2').css({"opacity":"1"});
  $('#comp2').children().each(function(){
    if($(this).hasClass("slide_title_right")){
      $(this).delay(600).animate({"left":"70%","opacity":"0"},1600,'easeInOutBack');
    }
    else if($(this).hasClass("slide_description_right")){
      $(this).delay(400).animate({"left":"70%","opacity":"0"},1600,'easeInOutBack');
    }
    else{
      $(this).delay(200).animate({"right":"0%","opacity":"0"},1400,'easeInOutBack');
    }
  });
  $('#comp2').css({"z-index":"2"});
}

// setInterval('movimiento()',9000);

var primero = false;
var segundo = false;

function movimiento(){
  if(primero == false){
    primero = true;
    segundo = false;
    muevelosIzq();
  }
  else{
    segundo = true;
    primero = false;
    muevelosDer();
  }
}


// alto nosotros

function alturaProfiles(){
  var altura = ($('.profile_image').outerHeight())+"px";
  // $('.profile').css({'height':"'"+altura+"em'"});
  $('.profile').css({'height':altura});
}

$(window).resize(alturaProfiles);


// Mostrar servicios

function mostrarFormulario(objeto){
  // $(".slide_description").slideToggle();
  // $(".logoDW").slideToggle();
  // $(".logoDWB").slideToggle();
  var parrafos = "." + $(objeto).attr("id") + " > p";
  var imagenes = "." + $(objeto).attr("id") + " > img";

  $(imagenes).slideToggle();
  $(parrafos).slideToggle();
}

