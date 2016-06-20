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
            <li class="limenu" alt="français"><a href="index.php"><img src="images/pictos/fr.png"><span>français</span></a></li>
            <li class="limenu" alt="anglais"><a href=""><img src="images/pictos/en.png"><span>anglais</span></a></li>
            <li class="limenu" alt="contact"><a href="#contactid"><img src="images/pictos/contact.png"><span>contact</span></a></li>
          </ul>
        </nav>
      </header>
      <!-- SECTION 1 : PRESENTATION -->
      <section class="present">
        <h1 class="titre titre1" id="presentid">Présentation</h1>
        <img class="moi" alt="moi" src="images/me.jpg">
        <h3>Sérieuse - Dynamique - Communicative</h3>
        <p>Je me présente: Auryane REISSER, 20 ans. Je suis actuellement en première année de DUT MMI (Métiers du Multimédia et de l’Internet). Ce DUT pluridisciplinaire regroupe: web, graphisme, communication et audiovisuel. Je souhaite privilégier la branche audiovisuel de ma formation afin de devenir monteuse-truquiste / cadreuse. </p>
        <h3>Pour en savoir un peu plus sur moi</h3>
        <!--<article class="box">
          <a class="box text1" href="">c</a>
          <a class="box text2" href="">c</a>
          <a class="box text3" href="">c</a>
        </article>-->

        <img src="images/ticket.jpg">
        <img width="100%" src="images/metro.png">
        <!--<article>
          <h3>Mes études</h3>
          <img width="100%" src="images/etudes.png">
        </article>
        <article>
          <h3>Mes compétences</h3>
          <img width="100%" src="images/logiciels.png">
        </article>
        <article>
          <h3>Mes hobbies</h3>
          <img width="100%" src="images/hobbies.png">
        </article>-->
      </section>
      <!-- SECTION 2 : REALISATIONS -->
      <!-- IMAGE A METTRE 825x609 -->
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
          <h5 class="col2">En graphisme</h5>
          <h5 class="col2">En web</h5>
        </div>
        <div class="row">
          <div class="col2">
            <div id="galerie_1" class="owl-carousel owl-theme">
              <div class="item"><img src="./images/galerie/App_couleurs_TP1.jpg" alt="pictos" width="100%"></div>
              <div class="item"><img src="./images/galerie/Typo_TP3.jpg" alt="logo1" width="100%"></div>
              <!--<div class="item"><img src="./images/galerie/Typo_TP4.jpg" alt="logo2" width="100%"></div>-->
              <div class="item"><img src="./images/galerie/projet_CREA2.jpg" alt="logofablab" width="100%"></div>
              <div class="item"><img src="./images/galerie/Projet_perso.jpg" alt="logoindo" width="100%"></div>
              <div class="item"><img src="./images/galerie/planchetendance.jpg" alt="planche" width="100%"></div>
              <div class="item"><img src="./images/galerie/lion.jpg" alt="lion" width="100%"></div>
              <div class="item"><img src="./images/galerie/ladyrose.jpg" alt="pinklady" width="100%"></div>
              <div class="item"><img src="./images/galerie/SonofMan.jpg" alt="sonofman" width="100%"></div>
              <!--<div class="item"><img src="./images/galerie/joker.jpg" alt="joker" width="100%"></div>-->
            </div>
          </div>
          <div class="col2">
            <div id="galerie_2" class="owl-carousel owl-theme">
              <div class="item"><img src="./images/galerie/web1.jpg" alt="web1" width="100%"></div>
              <div class="item"><img src="./images/galerie/web2.jpg" alt="web2" width="100%"></div>
              <div class="item"><img src="./images/galerie/web3.jpg" alt="web3" width="100%"></div>
              <div class="item"><img src="./images/galerie/web4.jpg" alt="web4" width="100%"></div>
              <div class="item"><img src="./images/galerie/web5.jpg" alt="web5" width="100%"></div>
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
        <div class="container">
          <div class="col-md-7">
            <div class="titre_contact text-center">
              <h1 class="titre titre4" id="contactid">Contactez-moi</h1>
              <h4>Je vous réponds au plus vite</h4>
            </div>  
            <form action="reception.php" method="post">
              <div class="row">
                <div class="form-group col-md-6" style="padding-left: 0">
                <input type="text" class="form-control" name="prenom" maxlength="120" placeholder="Prénom...">

              </div>

              <div class="form-group col-md-6" style="padding-right: 0">
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

      <div class="col-md-5">
      <div class="titre_contact text-center">
              <h1 class="titre titre4" id="contactid">Suivez-moi</h1>
              <h4>Sur les réseaux sociaux !</h4>
            </div>  
                <div class="rez">
          <ul>
            <li><a href="https://www.youtube.com/channel/UCdaAu4YoxiHVRfMbGlzXz9Q" target="_blank" alt="youtube"><img src="images/pictos/youtube.png"></a></li>
            <li><a href="https://twitter.com/Auryane_" target="_blank" alt="twitter"><img src="images/pictos/twitt.png"></a></li>
            <li><a href="https://www.facebook.com/auryane.reisser" target="_blank" alt="facebook"><img src="images/pictos/fb.png"></a></li>
            <li><a href="http://www.imgrum.net/user/aury_ane/1445759634" target="_blank" alt="instagram"><img src="images/pictos/insta.png"></a></li>
          </ul>
        </div>
      </div>
    </div>

    <p class="copyright text-center">&copy; All rights reserved <a href="https://twitter.com/Auryane_" target="_blank">Auryane Reisser</a>.</p>
  </footer>

</div>

</div>
<!-- INTEGRATION DE SCRIPTS -->
<script src="http://code.jquery.com/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.js"></script>
<script src="app.js"></script>

</body>
</html>