<?php
session_start();

// Permet de vérifier si il y a eu une erreur lors de la soumission du formulaire
function voir_alert(){ ?>
  <div id="alert">
    <?php if(isset($_SESSION['alert'])){ ?>
      <div class="alert alert-<?php echo $_SESSION['alert']['type']; ?> text-center" style="margin-bottom:0;border-radius:0">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <?php echo $_SESSION['alert']['message']; ?>
      </div>
      <?php unset($_SESSION['alert']); } ?>
    </div>
    <?php
  }
?>
<!DOCTYPE HTML>
<html lang="fr">
<!-- HEAD -->
<head>
  <meta charset="utf-8">
  <title>Mon CV interactif !</title>
  <link rel="stylesheet" media="screen" href="./css/reset.css">
  <link rel="stylesheet" media="screen" href="./css/font-awesome.min.css">
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,600,700,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" media="screen" href="./bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" media="screen" href="./css/style.css">
  <link rel="stylesheet" media="screen" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
  <link rel="stylesheet" media="screen" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">
</head>
<!-- BODY -->
<body>
  <div class="wrapper">
    <!-- HEADER -->

    <!-- Affiche une erreur si il y en a une -->
    <?php voir_alert(); ?>
    <header>
      <iframe width="100%" src="https://www.youtube.com/embed/A5aUgbY3RMI" frameborder="0" autoplay="1" allowfullscreen></iframe>
      <nav class="menu">
        <ul>
          <li class="limenu" alt="présentation"><a href="#presentid"><img src="images/pictos/present.png"><span>présentation</span></a></li>
          <li class="limenu" alt="réalisations"><a href="#realid"><img src="images/pictos/real.png"><span>réalisations</span></a></li>
          <li class="limenu" alt="stage"><a href="#stageid"><img src="images/pictos/stage.png"><span>stage</span></a></li>
          <li class="limenu" alt="français"><a href=""><img src="images/pictos/fr.png"><span>français</span></a></li>
          <li class="limenu" alt="anglais"><a href=""><img src="images/pictos/en.png"><span>anglais</span></a></li>
          <li class="limenu" alt="contact"><a href="#contactid"><img src="images/pictos/contact.png"><span>contact</span></a></li>
        </ul>
      </nav>
    </header>
    <!-- SECTION 1 : PRESENTATION -->
    <section class="present">
      <h1 class="titre titre1" id="presentid">Présentation</h1>
      <h3>Sérieuse - Dynamique - Communicative</h3>
      <p>Je me présente: Auryane REISSER, 20 ans. Je suis actuellement en première année de DUT MMI (Métiers du Multimédia et de l’Internet). Ce DUT pluridisciplinaire regroupe: web, graphisme, communication et audiovisuel. Je souhaite privilégier la branche audiovisuel de ma formation afin de devenir monteuse-truquiste / cadreuse. </p>
      <h3>Pour en savoir un peu plus sur moi:</h3>
      <img width="100%" src="images/pictos/metro.png">
    </section>
    <!-- SECTION 2 : REALISATIONS -->
    <section class="real">
      <h1 class="titre titre2" id="realid">Réalisations</h1>
      <h3>Projets étudiants</h3>
      <div class="row">
        <div class="col1">
          <iframe  width="480" height="300"  src="https://www.youtube.com/embed/wRAE5MlsIFo" frameborder="0" allowfullscreen></iframe>
        </div>
        <div class="col1">
          <iframe  width="480" height="300"  src="https://www.youtube.com/embed/FibR_PHw2Zc" frameborder="0" allowfullscreen></iframe>
        </div>
        <div class="col1">
          <iframe  width="480" height="300"  src="https://www.youtube.com/embed/0LE5vRxHdIg" frameborder="0" allowfullscreen></iframe>
        </div>
      </div>
      <div class="row">
        <div class="col1">
          <p class="legend">Le but de l’exercice était d’adapter un scénario lambda tout en appliquant les notions vues en classe (éclairages, cadrage, montage).</p>
        </div>
        <div class="col1">
          <p class="legend">La volonté de notre groupe a été de retranscrire tout le côté humain, chaleureux et enchanté des hébergements de ce parc !</p>
        </div>
        <div class="col1">
          <p class="legend">Le but de ce projet était d’écrire un scénario et de le réaliser. Geeks dans l’âme, nous décidons de reprendre <i>Le Seigneur des Anneaux</i> à la sauce geek !</p>
        </div>
      </div>
      <h3>Projets personnels</h3>
      <div class="row">
        <div class="col1">
          <iframe  width="480" height="300"  src="https://www.youtube.com/embed/KMl0KQaTwwg" frameborder="0" allowfullscreen></iframe>
        </div>
        <div class="col1">
          <iframe  width="480" height="300"  src="https://www.youtube.com/embed/w6WBlu_5vVA" frameborder="0" allowfullscreen></iframe>
        </div>
        <div class="col1">
          <iframe  width="480" height="300"  src="https://www.youtube.com/embed/LYe5r3s0C5U" frameborder="0" allowfullscreen></iframe>
        </div>
      </div>
      <div class="row">
        <div class="col1">
          <p class="legend">Suite à une défi lancé par un youtubeur (<i>French Food Porn</i>), nous décidons de retrousser nos manches et pourquoi pas de filmer ce moment afin d'immortaliser cette après-midi cuisine.</p>
        </div>
        <div class="col1">
          <p class="legend"><i>Les infofans</i> est une parodie inspirée de faits réels. Elle rapporte les attitudes des fans du groupe <i>Indochine</i>.</p>
        </div>
        <div class="col1">
          <a href="https://www.youtube.com/channel/UCdaAu4YoxiHVRfMbGlzXz9Q" target="_blank" alt="youtube"><img src="images/pictos/you2.png" height="20px" alt="you2"> Plus de vidéos sur ma chaîne</a>
        </div>
      </div>
      <h3>Les points +</h3>
      <div class="row">
        <div class="col2">
          <div id="galerie_1" class="owl-carousel owl-theme">
            <div class="item"><img src="./images/galerie/App_couleurs_TP1.jpg" alt="pictos" width="100%"></div>
            <div class="item"><img src="./images/galerie/Typo_TP3.jpg" alt="logo1" width="100%"></div>
            <div class="item"><img src="./images/galerie/Typo_TP4.jpg" alt="logo2" width="100%"></div>
            <div class="item"><img src="./images/galerie/projet_CREA2.jpg" alt="logofablab" width="100%"></div>
            <div class="item"><img src="./images/galerie/Projet_perso.jpg" alt="logoindo" width="100%"></div>
            <div class="item"><img src="./images/galerie/planchetendance.png" alt="logoindo" width="100%"></div>
          </div>
        </div>
        <div class="col2">

          <div id="galerie_2" class="owl-carousel owl-theme">
            <div class="item"><img src="http://www.owlgraphic.com/owlcarousel/demos/assets/fullimage1.jpg" alt="The Last of us"></div>
            <div class="item"><img src="http://www.owlgraphic.com/owlcarousel/demos/assets/fullimage2.jpg" alt="GTA V"></div>
            <div class="item"><img src="http://www.owlgraphic.com/owlcarousel/demos/assets/fullimage3.jpg" alt="Mirror Edge"></div>
          </div>
        </div>
      </div>
    </section>
    <div style="clear:both"></div>
    <!-- SECTION 3 : STAGE -->
    <section class="stage">
      <h1 class="titre titre3" id="stageid">Stage</h1>
      <p>Je suis actuellement à la recherche d’un stage de 3 mois, dans le cadre de ma deuxième année de DUT. Je suis disponible du 1er avril 2017 au 30 juin 2017 ! Pour plus de précisions, merci de me contacter.</p>
      <p>Télécharger mon CV</p>
    </section>
    <!-- FOOTER -->
    <footer>
      <h1 class="titre titre4" id="contactid">Contactez-moi</h1>
      <h4>Je vous réponds au plus vite</h4>
      <div class="rez">
        <ul>
          <li><a href="https://www.youtube.com/channel/UCdaAu4YoxiHVRfMbGlzXz9Q" target="_blank" alt="youtube"><img src="images/pictos/youtube.png"></a></li>
          <li><a href="https://twitter.com/Auryane_" target="_blank" alt="twitter"><img src="images/pictos/twitt.png"></a></li>
          <li><a href="https://www.facebook.com/auryane.reisser" target="_blank" alt="facebook"><img src="images/pictos/fb.png"></a></li>
          <li><a href="http://www.imgrum.net/user/aury_ane/1445759634" target="_blank" alt="instagram"><img src="images/pictos/insta.png"></a></li>
        </ul>
      </div>
      <div class="container">
        <div class="col-md-8 col-md-offset-2">
          <form action="reception.php" method="post">
            <div class="row">
              <div class="form-group col-md-6" style="
              padding-left: 0;
              ">
              <input type="text" class="form-control" name="prenom" maxlength="120" placeholder="Prénom...">

            </div>

            <div class="form-group col-md-6" style="
            padding-right: 0;
            ">
            <input type="text" class="form-control" name="nom" maxlength="120" placeholder="Nom...">
          </div>
        </div>
        <div class="form-group">
          <input type="text" class="form-control" name="email" maxlength="256" placeholder="Adresse mail...">
        </div> 
        <div class="form-group">
          <textarea type="text" class="form-control" name="message" placeholder="Merci de me laisser un message d'admiration à cet endroit précis..."></textarea>
        </div>
        <button type="submit" class="btn btn-default">Envoyer</button>

      </form>
    </div>
  </div>
</footer>

</div>

</div>
<!-- INTEGRATION DE SCRIPTS -->
<script src="http://code.jquery.com/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.js"></script>

<script>
  $('nav a[href^="#"]').click(function(e){
    e.preventDefault;
    var the_id = $(this).attr("href");

    $('html, body').animate({
      scrollTop:$(the_id).offset().top
    }, 'slow');
    return false;
  });

  $(document).ready(function() {

    $("#galerie_1, #galerie_2").owlCarousel({

      navigation : false,
      autoPlay: true, 
      slideSpeed : 300,
      paginationSpeed : 400,
      singleItem:true

      // "singleItem:true" is a shortcut for:
      // items : 1, 
      // itemsDesktop : false,
      // itemsDesktopSmall : false,
      // itemsTablet: false,
      // itemsMobile : false

    });

  });
</script>
</body>
</html>