<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Venathor - Header</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/fonts/fontawesome-pro-5.10.0/css/all.min.css') }}">

  <link rel="stylesheet" type="text/css" href="{{ asset('slick/slick.css') }}"/>
  <link rel="stylesheet" type="text/css" href="{{ asset('slick/slick-theme.css') }}"/>

  <link rel="stylesheet" type="text/css" href="{{ asset('css/estilos_venathor.css') }}"/>
  
  
</head>
<body style="font-family: Nunito Sans, sans-serif;" class="ff-nunito">

<x-header />

<x-slider_news />

@yield('content')

<!-- MERODOS DE PAGO -->
<x-pay />
<!-- FIN DE METODOS DE PAGO -->


<!-- FOOTER -->
<x-footer />
<!-- FIN DE FOOTER -->

<!-- Scrips -->
<script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
<script src="https://cdn.tailwindcss.com"></script>
<script type="text/javascript" src="{{ asset('slick/slick.min.js') }}"></script>


<script type="text/javascript">
  $(document).ready(function(){


    /* SLIDER

    */
    $('.slider-banners').slick({
      lazyLoad: 'ondemand',
      autoplay: true,
      autoplaySpeed: 1200,
    });

    $('.slider-anuncios').slick({
      arrows: true,
    });

    $('.btn-close').on('click', function (event) {
      $('.sa-main').slideUp('fast')
    })

     //FIN DEL SLDER


     // SLIDER DE PRODUCTOS
     $('.products').slick({
      dots: false,
      infinite: true,
      speed: 300,
      slidesToShow: 5,
      slidesToScroll: 5,
      responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2
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
      })

     // FIN DE SLIDER DE PRODUCTOS

     //FOOTER

     $('#btnFToggle').on('click', function (event) {
      $('.f-bottom').slideToggle()
      $(this).find('span').toggleClass('block').toggleClass('hidden')
      $(this).find('i').toggleClass('fa-angle-double-down').toggleClass('fa-angle-double-up')
    })

     //FIN DEL FOOTER


    $.fn.pos = function(from, parent) {
      parent = $(parent).length ? $(parent) : this.parent()
      var right = $(document).width() - (parent.offset().left + parent.outerWidth());
      $(this).css({
        'top': $(from) ? $(from).height() : '',
        'right': right,
      });
      return '';
    }
    function overlay(el, type) {
      if(type == 1) {
        $(el).show()
      } else {
        $(el).hide()
      }
    }

    $('.dm-item').on('mouseenter', function (event) {
      //$('.dropdown-menu').removeClass('dm-active');
      //$(this).find('.dropdown-menu').addClass('dm-active')
    })
    /*$('.dm-item').on('mouseleave', function (event) {
      $('.dropdown-menu').removeClass('dm-active');
    })*/

    $('[data-toggle="dropdown"]').on('mouseenter', function (event) {
      var el = $($(this).data('target')),
        showOverlay = $(this).data('overlay')
      $(this).find('.icon-right i').addClass('rotate-180')
      el.show()
      if (showOverlay) overlay('.overlay', 1)
    })
    $('[data-toggle="dropdown"]').on('mouseleave', function (event) {
      var el = $($(this).data('target')),
        showOverlay = $(this).data('overlay')
      $(this).find('.icon-right i').removeClass('rotate-180')
      el.hide()
      overlay('.overlay', 2)
    })

    $('.dropdown-menu-c').on('mouseenter', function (event) {
      var el = $('[data-target="#'+$(this).attr('id')+'"]')
      el.addClass('btn-active')
      el.find('.icon-right i').addClass('rotate-180')
      event.stopPropagation()
      $(this).show()
      overlay('.overlay', 1)
    })
    $('.dropdown-menu-c').on('mouseleave', function (event) {
      var el = $('[data-target="#'+$(this).attr('id')+'"]')
      el.removeClass('btn-active')
      el.find('.icon-right i').removeClass('rotate-180')
      $(this).hide()
      overlay('.overlay', 2)
    })

    //Search
    $('[data-toggle="focus"]').on('focus', function (event) {
      var el = $($(this).data('target'))
      el.show()
      el.pos('')
    })
    $('[data-toggle="focus"]').on('focusout', function (event) {
      var el = $($(this).data('target'))
      el.hide()
    })

    $('[data-toggle="click"]').on('click', function (event) {
      var el = $($(this).data('target'))
      el.show()
      el.pos('.header', $(this))
      overlay('.overlay-2', 1)
    })
    $('.overlay-2').on('click', function (event) {
      var el = $($('[data-toggle="click"]').data('target'))
      el.hide()
      overlay('.overlay-2', 2)
    })
    $('.dropdown-menu-cs').on('click', function (event) {
      event.stopPropagation()
    })
  });

</script>

</body>
</html>

