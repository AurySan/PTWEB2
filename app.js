$(document).ready(function() {

  // Configuration du slider
  $("#galerie_1, #galerie_2").owlCarousel({
    navigation : false,
    autoPlay: true, 
    slideSpeed : 300,
    paginationSpeed : 400,
    singleItem:true
  });

  // Configuration du smooth scroll (scroll lent avec animation)
  $('nav a[href^="#"]').click(function(e){
    e.preventDefault;
    var the_id = $(this).attr("href");

    $('html, body').animate({
      scrollTop:$(the_id).offset().top
    }, 'slow');
    return false;
  });

  // Configuration du sticky nav (menu qui suit lors du scroll)
  var mn = $(".menu");
  var mns = "nav-scroll";
  var hdr = $('header').height();

  $(window).scroll(function() {
    if( $(this).scrollTop() > hdr ) {
      mn.addClass(mns);
    } else {
      mn.removeClass(mns);
    }
  });

});