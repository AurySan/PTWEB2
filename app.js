$(document).ready(function() {

  // Configuration du slider
  $("#galerie_1, #galerie_2").owlCarousel({
    navigation : false,
    autoPlay: true, 
    slideSpeed : 300,
    paginationSpeed : 400,
    singleItem:true
  });

  $('.metro-item').on('click', function(e){
    e.preventDefault();
    $couleur = $(this).attr('data-item');

    $.get('metro.php', { couleur: $couleur })
      .done(function(a){
        $('.metro-retour').html(a);
      })
      .fail(function(){
        $('.metro-retour').html('<img width="100%" src="images/metro3.png">');
      });
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