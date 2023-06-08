//<!----===== BUSCADOR PRINCIPAL ===== -->
$(document).ready(function () {

  $('#search').keyup(function() {
      let search = $('#search').val();
      
      $.ajax({
          type:'POST',
          url:'buscador-principal.php',
          data: {search: search},
          beforesend: function(){
            
          },
          success:function(response){
              let cels = JSON.parse(response);
              console.log(cels);
          }
      })
  });

})


//<!----===== BUSCADOR BTN ===== -->
function buscarNav() {
    
    let modeloBuscado = document.getElementById("buscar").value;

    let parametros = {
        "modelo": modeloBuscado,
    }
    $.ajax({
        type:'POST',
        url:'searchresult.php',
        data: parametros,
        success:function(result){
            $('.celulares-contenedor').html(result);
        }
    });

    let nav = document.getElementById("nav");

    nav.classList.remove("nav-menu");

    

};

//<!----===== BUSCADOR PRINCIPAL ===== -->
function consulta_buscador(busqueda) {

  let parametros = {"busqueda": busqueda};
  $.ajax({
      data: parametros,
      url: "buscador-principal.php",
      type: "POST",
      beforeSend: function (){
        $('#search-loader').show(); 
        document.getElementById('search-result').style.display="none";
      },
      success: function (result) {

        $('#search-loader').hide(); 
          
          if(!busqueda) {
              document.getElementById('search-container').style.display="none";
          }
          else{
              document.getElementById('search-container').style.display="flex";
              document.getElementById('search-result').style.transition="all .3s";
              document.getElementById('search-result').style.display="flex";
          }

          document.getElementById('search-result').innerHTML = result;

      }
  });
}

//<!----===== MENU ===== -->
const menu = () => {
    const nav = document.getElementById("nav");

    nav.classList.toggle("nav-menu");
};

//<!----===== OFERTAS CAROUSEL ===== -->
$('.ofertas-carousel').slick({
    dots: false,
    infinite: true,
    speed: 300,
    slidesToShow: 3,
    slidesToScroll: 3,
    arrows: true,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
          infinite: true,
          arrows: true,
          dots: false
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
  });

function buscar(){
    let buscado = document.getElementById("buscarBtn").value;

    let parametros = {
        "marca": marca,
    }

    $.ajax({
        type:'GET',
        url:'reset-filter.php',
        data: parametros,
        beforesend: function(){
            
        },
        success:function(result){
            $('.celulares-contenedor').html(result);
        }
    });

};

//<!----===== LOADERS ===== -->
// function loader_on() {
//   $('#celulares-box').hide(); 
//   $('#preloader-dos').show(); 
// }

// function loader_off() {
//   $('#preloader-dos').hide();
//   $('#celulares-box').show(); 
// }

//<!----===== FILTRADOR DE CELULARES ===== -->
function filtrar_celulares(marca){

    let parametros = {
        "marca": marca,
    }

    $.ajax({
        type:'GET',
        url:'filtrador.php',
        data: parametros,
        beforeSend: function() {
          $('#celulares-box').hide(); 
          $('#preloader-dos').show(); 
        },
        success: function(result){
          $('#preloader-dos').hide();
          $('#celulares-box').show(); 
          $('#celulares-contenedor').html(result);
        }
    });

  }
