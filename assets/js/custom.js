"use strict";

// $('.navbar-toggler').click(function() {
//   $('.navbar-collapse').addClass('open-nav');
//   $('.navbar-toggler').addClass('open-toggler');
// })
//
// $('.navbar-toggler').click(function() {
//   $('.navbar-collapse').removeClass('open-nav');
//   $('.navbar-toggler').removeClass('open-toggler');
// })
$('.navbar-toggler').click(function () {
  $('.navbar-collapse').toggleClass('open-nav');
  $('.navbar-collapse-overlay').fadeToggle();
  $('.navbar-toggler').toggleClass('open');
});
$('.navbar-collapse-overlay').click(function () {
  $('.navbar-collapse').toggleClass('open-nav');
  $('.navbar-collapse-overlay').fadeToggle();
  $('.navbar-toggler').toggleClass('open');
});
var mySwiper = new Swiper('.swiper-container', {
  // Optional parameters
  // direction: 'gorizontal',
  loop: true,
  autoplay: true,
  // If we need pagination
  pagination: {
    el: '.swiper-pagination'
  },
  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev'
  },
  // And if we need scrollbar
  scrollbar: {// el: '.swiper-scrollbar',
  }
});
$(document).on("click", '[data-toggle="lightbox"]', function (event) {
  event.preventDefault();
  $(this).ekkoLightbox();
});
$(document).ready(function () {
  $('#modalPricePack').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget);
    var subjId = button.data('whatever');
    $('#subjid').val(subjId);
  });
});
$(function () {
  if ($(window).width() < 768) {
    $('.owl-carousel').owlCarousel({
      autoplay: false,
      loop: true,
      nav: true,
      stagePadding: 50,
      margin: 30,
      items: 1,
      responsiveClass: true
    });
  } else {
    $('.owl-carousel').owlCarousel({
      loop: true,
      margin: 30,
      autoplay: false,
      responsive: {
        0: {
          items: 1
        },
        900: {
          items: 3
        }
      }
    });
  }
});
$(document).ready(function () {
  i = $('.post-gallery-imgs').height() - 25;
  $('.post-gallery-gal--img__img').height(i);
  console.log(i);
}); // $(function(){
//   if ( $(window).width() < 990 ) {
//     $(window).scroll(function() {
//
//     });
//   } else {
//     $(window).scroll(function() {
//         var top = $(document).scrollTop();
//         if (top < 88) $(".navbar-uss").removeClass('navbar-fixed');
//         else $(".navbar-uss").addClass('navbar-fixed');
//     });
//   }
// });

if ($(window).width() > 768) {
  $(document).ready(function () {
    $(window).scroll(function () {
      if ($(document).scrollTop() > 96) {
        $('#nav-top').addClass('nav-min');
      } else {
        $('#nav-top').removeClass('nav-min');
      }
    });
  });
}

$(document).ready(function () {
  var $tabs = $('.services-tabs-item');
  $tabs.first().addClass('show active');
  $(function () {
    $('.owl-item').matchHeight({
      byRow: true,
      property: 'height',
      target: null,
      remove: false
    });
  });
});