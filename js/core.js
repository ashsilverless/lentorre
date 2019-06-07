//@prepros-prepend jquery.magnific-popup.js
//@prepros-prepend mixitup.js
//@prepros-prepend mixitup-pagination.js

// Vanilla JS Below This Line

jQuery(document).ready(function( $ ) {

//Fetch local time
var currentdate = new Date();
var hours = (currentdate.getHours() < 10? '0' : '') + currentdate.getHours();
var mins = (currentdate.getMinutes() < 10? '0' : '') + currentdate.getMinutes();
var today = currentdate.getHours();

// Aadd zero in front of numbers < 10
function mins(i) {
    if (i < 10) {i = "0" + i};
    return i;
}
var minuterotation = mins * 6;
var hourrotation = hours * 30;
/* ADD CLASS ON LOAD*/

setTimeout(function() {
    $("html").addClass("loaded");
    $('div.current').find('#hour').css({
        'transform': 'rotate('+hourrotation+'deg)',
    });
    $('div.current').find('#min').css({
        'transform': 'rotate('+minuterotation+'deg)',
    });
}, 100);

/* HANDLER FOR TIMELINE LINKS*/

$('.hour').on('click', function () {
    sessionStorage.clear();
    var getFav = sessionStorage.acti;
    var selectedHour = '#' + $(this).attr('id');
    var currentHour = $('.hour'+'.current').attr('id');

    sessionStorage.setItem('new', selectedHour);
    sessionStorage.setItem('current', currentHour);

});

$(document).ready(function( $ ) {
    var selectedHour = sessionStorage.getItem('new');
    var currentHour = sessionStorage.getItem('current');
    $(selectedHour).addClass('active');

if ($(".hour").hasClass("active")) {
    $('.timeline').addClass('clicked');
    $('.hour.active').find('.time-wrapper').attr('id', 'value');
}

$('#prev-time').click(function() {
var selectedHour = '#' + $(this).attr('class');
sessionStorage.setItem('new', selectedHour);
});

$('#next-time').click(function() {
var selectedHour = '#' + $(this).attr('class');
sessionStorage.setItem('new', selectedHour);
});

$('.header-inner__brand').click(function() {
  sessionStorage.clear();
});

});

/* ADD CLASS ON SCROLL*/

	$(window).scroll(function() {
    var scroll = $(window).scrollTop();

    if (scroll >= 200) {
        $("header").addClass("scrolled");
    } else {
        $("header").removeClass("scrolled");
    }
});

var owl = $("#testimonial");
  owl.owlCarousel();
  // Custom Navigation Events
  $(".next").click(function(){
    owl.trigger('owl.next');
  })
  $(".prev").click(function(){
    owl.trigger('owl.prev');
  })

$(".toggle").click(function() {
  	$('.toggle.active').removeClass("active");
    $(this).addClass("active");
});

//ADD CLASS ON PAGE LOAD

$(document).ready(function( $ ) {
  $( ".toggle" ).first().addClass( "active" );
});

// GLOBAL OWL CAROUSEL SETTINGS

$('.owl-carousel').owlCarousel({
    animateOut: 'fadeOut',
    loop:true,
    margin:10,
    nav:true,
	navClass: ['owl-prev', 'owl-next'],
    dots:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
})

/* CLASS AND FOCUS ON CLICK */

$('main a:not(.camp-gallery)').click(function() {
          $('html').removeClass('loaded');
});

$('.header-inner__trigger').click(function() {
  $('.hamburger').toggleClass('is-active');
  $("header").toggleClass("menuOpen");
});

$('.reveal-context').click(function() {
  $('.context-panel').addClass('reveal');
});

$(".reveal-context").click(function() {
    $('html,body').animate({
        scrollTop: $("#hero-lower").offset().top +100},
        'slow');
});

// ========== Controller for lightbox elements

$(document).ready(function() {
// This will create a single gallery from all elements that have class "gallery-item"
$('.camp-gallery').magnificPopup({
  type: 'image',
  gallery:{
    enabled:true
  }
  });
});

// ========== Parallax Controller

$(window).scroll(function() {
  var wScroll = $(this).scrollTop();
  $(".sub-hero__detail").css({
    transform: "translate(0px, " + wScroll / -40 + "%)"
  });
    $(".rear-image").css({
    transform: "translate(0px, " + wScroll / 20 + "%)"
  });
      $(".mid-image").css({
    transform: "translate(0px, " + wScroll / 30 + "%)"
  });
    $(".headline").css({
        transform: "translate(0px, " + wScroll / 2.5 + "%)"
    });

});

// ========== Fade Headline Controller

var header = $('.headline');
var range = 200;

$(window).on('scroll', function () {

  var scrollTop = $(this).scrollTop(),
      height = header.outerHeight(),
      offset = height / 0.51,
      calc = 1 - (scrollTop - offset + range) / range;

  header.css({ 'opacity': calc });

  if (calc > '1') {
    header.css({ 'opacity': 1 });
  } else if ( calc < '0' ) {
    header.css({ 'opacity': 0 });
  }

});

});//Don't remove ---- end of jQuery wrapper

document.addEventListener("DOMContentLoaded", function(event) {

var currentdate = new Date();
var hours = (currentdate.getHours() < 10? '0' : '') + currentdate.getHours();
var mins = (currentdate.getMinutes() < 10? '0' : '') + currentdate.getMinutes();
var today = currentdate.getHours();

// Aadd zero in front of numbers < 10
function mins(i) {
    if (i < 10) {i = "0" + i};
    return i;
}

var begintime;
begintime = 1;

var endtime;
endtime = 2;

var times = 24;

for(var i=0; i < times; i++){

     if (today >= begintime && today < endtime) {
        var targetDiv = document.getElementById("hour-" + begintime).getElementsByTagName("span")[0];
        targetDiv.textContent = hours;
        var targetDiv = document.getElementById("hour-" + begintime).getElementsByTagName("span")[1];
        targetDiv.textContent = mins;
        var element = document.getElementById("hour-" + begintime);
        element.classList.add("current");
        element.classList.add("now");
    }
begintime++;
endtime++;
}

var grabTime = document.getElementById("value").firstChild.innerHTML;
var contentPanel = document.getElementById("timeHolder");

if (grabTime.length >= 3) {
  contentPanel.innerHTML= grabTime;
}

if (grabTime.length < 3) {
contentPanel.textContent = "Right now";
}

//var pivotHour = document.getElementsByClassName('active')[0].id
console.log(element);

});

document.addEventListener('touchstart', onTouchStart, {passive: true});
