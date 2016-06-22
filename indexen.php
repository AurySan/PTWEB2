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
    <title>My interactif CV !</title>
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

      <nav class="navbar navbar-default navbar-fixed-top visible-sm text-center" role="navigation">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>

          <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav">
              <li><a href="#presentid">Presentation</a></li>
              <li><a href="#realid">Realisations</a></li>
              <li><a href="#stageid">Internship</a></li>
              <li><a href="index.php">French</a></li>
              <li><a href="indexen.php">English</a></li>
              <li><a href="#contactid">Contact</a></li>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div>
      </nav>

      <!-- Affiche une erreur si il y en a une -->
      <?php voir_alert(); ?>
      <header>
        <iframe width="100%" src="https://www.youtube.com/embed/A5aUgbY3RMI" frameborder="0" autoplay="1" allowfullscreen></iframe>
        <nav class="menu">
          <ul>
            <li class="limenu" alt="présentation"><a href="#presentid"><img src="images/pictos/present.png"><span>presentation</span></a></li>
            <li class="limenu" alt="réalisations"><a href="#realid"><img src="images/pictos/real.png"><span>realisations</span></a></li>
            <li class="limenu" alt="stage"><a href="#stageid"><img src="images/pictos/stage.png"><span>internship</span></a></li>
            <li class="limenu" alt="français"><a href="index.php"><img src="images/pictos/fr.png"><span>french</span></a></li>
            <li class="limenu" alt="anglais"><a href="indexen.php"><img src="images/pictos/en.png"><span>english</span></a></li>
            <li class="limenu" alt="contact"><a href="#contactid"><img src="images/pictos/contact.png"><span>contact</span></a></li>
          </ul>
        </nav>
      </header>
      <!-- SECTION 1 : PRESENTATION -->
      <section class="present">
        <h1 class="titre titre1" id="presentid">Presentation</h1>
        <img class="moi" alt="moi" src="images/me.jpg">
        <h3>Serious - Dynamic - Communicative</h3>
        <p>I am currently looking for an <a href="#stageid">Internship</a>.</p>
        <p>Let me introduce myself : Auryane REISSER, 20. I am in first year of a french graduation called "DUT MMI" (Displôme Universitaire de Technologie - Métiers du Multimédia et de l’Internet). This multidisciplinary diploma gaters : web, graphism, communication et audiovisual. I would like to focus more on audiovisual then the others disciplinaries in order to be film editor / cameraman. </p>
        <h3>For further informations</h3>

        <div class="ticket">
          <a href="#" class="subway-item" data-item="rouge">Studies</a>
          <a href="#" class="subway-item" data-item="bleue">Skills</a>
          <a href="#" class="subway-item" data-item="verte">Hobbies</a>
        </div>
        
        <div class="subway-retour">
          <img width="100%" src="images/metro3.png">
        </div>
        
      </section>
      <!-- SECTION 2 : REALISATIONS -->
      <!-- IMAGE A METTRE 825x609 -->
      <section class="real">
        <h1 class="titre titre2" id="realid">My realisations</h1>

        <div role="tabpanel">
          <!-- Nav tabs -->
          <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active">
              <a href="#home" aria-controls="home" role="tab" data-toggle="tab">Video</a>
            </li>
            <li role="presentation">
              <a href="#tab" aria-controls="tab" role="tab" data-toggle="tab">Graphism</a>
            </li>

            <li role="presentation">
              <a href="#web" aria-controls="web" role="tab" data-toggle="tab">Web</a>
            </li>
          </ul>
          
          <!-- Tab panes -->
          <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="home">
              <div class="row">
                <div class="col2">
                  <iframe style="width: 96%" width="90%" height="490"  src="https://www.youtube.com/embed/wRAE5MlsIFo" frameborder="0" allowfullscreen></iframe>
                </div>
                <div class="col2">
                  <iframe  width="90%" height="490"  src="https://www.youtube.com/embed/FibR_PHw2Zc" frameborder="0" allowfullscreen></iframe>
                </div>
              </div>
              <div class="row">
                <div class="col2">
                  <p class="legend">The exercice's purpose to adapte a normal scenario by applying the notions we studied (lights, framing, editing).</p>
                </div>
                <div class="col2">
                  <p class="legend legend-2">Our desire was to transpose the humanity, the warmth and the magic of the park's accomodations !</p>
                </div>
              </div>
              <div class="row">
                <div class="col2">
                  <iframe style="width: 96%" width="90%" height="490"  src="https://www.youtube.com/embed/0LE5vRxHdIg" frameborder="0" allowfullscreen></iframe>
                </div>
                <div class="col2">
                  <iframe  width="90%" height="490"  src="https://www.youtube.com/embed/KMl0KQaTwwg" frameborder="0" allowfullscreen></iframe>
                </div>
              </div>
              <div class="row">
                <div class="col2">
                  <p class="legend">This project's purpose was to write a script and to direct it.  For the geeks we are, we decided to adapt the <i>The Lord of The Rings</i> in our own way.</p>
                </div>
                <div class="col2">
                  <p class="legend legend-2">After being challenged by a youtuber (<i>French Food Porn</i>), we decided to wear our apron and immortalize this cooking afternoon by filming.</p>
                </div>
              </div>
              <div class="row">
                <div class="col2">
                  <iframe style="width: 96%" width="90%" height="490"  src="https://www.youtube.com/embed/w6WBlu_5vVA" frameborder="0" allowfullscreen></iframe>
                </div>
                <div class="col2">
                  <iframe  width="90%" height="490"  src="https://www.youtube.com/embed/LYe5r3s0C5U" frameborder="0" allowfullscreen></iframe>
                </div>
              </div>
              <div class="row">
                <div class="col2">
                  <p class="legend"><i>The infofans</i> is a true story parody. It repports the Elle habbits of <i>Indochine's</i> fans.</p>
                </div>
                <div class="col2">
                  <a href="https://www.youtube.com/channel/UCdaAu4YoxiHVRfMbGlzXz9Q" target="_blank" alt="youtube"><img src="images/pictos/you2.png" height="20px" alt="you2"> More videos on my channels</a>
                </div>
              </div>
            </div>

            <div role="tabpanel" class="tab-pane" id="tab">
              <div class="col2" style="margin-left: 25%">
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
            </div>

            <div role="tabpanel" class="tab-pane" id="web">
              <div class="col2" style="margin-left: 25%">
                <div id="galerie_2" class="owl-carousel owl-theme">
                  <div class="item"><img src="./images/galerie/web1.jpg" alt="web1" width="100%"></div>
                  <div class="item"><img src="./images/galerie/web2.jpg" alt="web2" width="100%"></div>
                  <div class="item"><img src="./images/galerie/web3.jpg" alt="web3" width="100%"></div>
                  <div class="item"><img src="./images/galerie/web4.jpg" alt="web4" width="100%"></div>
                  <div class="item"><img src="./images/galerie/web5.jpg" alt="web5" width="100%"></div>
                </div>
              </div>
            </div>
          </div>
        </div>

        
      </section>
      <div style="clear:both"></div>
      <!-- SECTION 3 : STAGE -->
      <section class="stage">
        <h1 class="titre titre3" id="stageid">Internship</h1>
        <p>I am currently looking for an three months internship, for my diploma's second year. I'm available from April the first 2017 to June the thirthieth 2017 ! For more informations, your welcome to contact me.</p>
        <a class="textcontact" href="./images/cvweb.png">See my CV</a>
      </section>
      <!-- FOOTER -->
      <footer>
        <div class="container">
          <div class="col-md-7">
            <div class="titre_contact text-center">
              <h1 class="titre titre4" id="contactid">Contact me</h1>
              <h4>I wille answer quickly</h4>
            </div>  
            <form action="reception.php" method="post">
              <div class="row">
                <div class="form-group col-md-6" style="padding-left: 0">
                  <input type="text" class="form-control" name="prenom" maxlength="120" placeholder="Firstname...">

                </div>

                <div class="form-group col-md-6" style="padding-right: 0">
                  <input type="text" class="form-control" name="nom" maxlength="120" placeholder="Lastname...">
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="email" maxlength="256" placeholder="Email...">
              </div> 
              <div class="form-group">
                <textarea type="text" class="form-control" name="message" placeholder="Your welcome to leaver a warm message here..."></textarea>
              </div>
              <button type="submit" class="btn btn-default">Send</button>

            </form>
          </div>

          <div class="col-md-5">
            <div class="titre_contact text-center">
              <h1 class="titre titre4" id="contactid">Follow me</h1>
              <h4>On social networks !</h4>
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
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <script src="app.js"></script>

</body>
</html>