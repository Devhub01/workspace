<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<title>BC Portfolio</title>

<!-- Bootstrap core CSS -->
<link href="assets/css/bootstrap.css" rel="stylesheet">

<!-- Custom CSS -->
<link href="assets/css/main.css" rel="stylesheet">
<link href="assets/css/font-awesome.min.css" rel="stylesheet">
<link href="assets/css/animate-custom.css" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>
<script src="assets/js/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/modernizr.custom.js"></script>
<link rel="shortcut icon" href="img/icon.png" />

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body data-spy="scroll" data-offset="0" data-target="#navbar-main">
<div id="navbar-main"> 
  <!-- Fixed navbar -->
  <div class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        <a href="#accueil" class="smoothScroll"> <img src="img/logo.png" style="height: 45px;width: auto;"> </a>  </div>
      <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
              <li><a href="#accueil" class="smoothScroll">Accueil</a></li>
          <li> <a href="#apropos" class="smoothScroll"> À propos</a></li>
          <li> <a href="#services" class="smoothScroll"> Nos Services</a></li>
          <li> <a href="#portfolio" class="smoothScroll"> Portfolio</a></li>
          <li> <a href="#equipe" class="smoothScroll"> Équipe</a></li>
            <li> <a data-toggle="modal" href="#devise"> Demande de devis</a></li>
          <li> <a href="#contact" class="smoothScroll"> Contact</a></li>
        </ul>
      </div>
      <!--/.nav-collapse --> 
    </div>
  </div>
</div>
<!-- ==== HEADERWRAP ==== -->
<div id="headerwrap" name="accueil">
  <header class="clearfix">
    <h1>Développement Web sur Mesure.</h1>
    <p>BULL CREATION pour développer vos projets avec des prix de Raisonnable.<br>
        Négocier. Demander. Soyez heureux.</p>
    <a href="#portfolio" class="smoothScroll btn btn-lg">Nos Réalisations</a> </header>
</div>
<!-- /headerwrap --> 

<!-- ==== ABOUT ==== -->
<div id="apropos" name="about">
  <div class="container">
    <div class="row white">
      <div class="col-md-6"> <img class="img-responsive" src="assets/img/about/about1.jpg" align=""> </div>
      <div class="col-md-6">
        <h3>Qui somme nous</h3>
        <p>BULL CREATION est une agence web et communication composée de créatifs, de développeurs et d’amoureux de la communication digitale qui ont tous compris qu’aborder le digital nécessitait non seulement de l’expertise, mais également des compétences particulières et un savoir-faire constamment renouvelé.</p>
        <h3>Pourquoi nous choisir ?</h3>
        <p>Fondée en 2012, l'entreprise BC réalise des solutions informatiques à destination des administrateurs
            de biens. Notre expertise de votre métier et la maîtrise de vos problématiques quotidiennes demeurent
            un véritable gage de confiance envers nos logiciels immobiliers.</p>
      </div>
    </div>
    <!-- row --> 
  </div>
</div>
<!-- container --> 

<!-- ==== SERVICES ==== -->
<div id="services" name="services">
  <div class="container">
    <div class="row">
      <h2 class="centered">Nos Services</h2>
      <hr>
      <div class="col-lg-8 col-lg-offset-2">
        <!--
        <p class="large">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p>
        -->
      </div>
      <div class="col-lg-3 callout"> <i class="fa fa-desktop fa-3x"></i>
        <h3>Responsive Design</h3>
        <p></p>
      </div>
      <div class="col-lg-3 callout"> <i class="fa fa-gears fa-3x"></i>
        <h3>Développement Web</h3>
        <p></p>
      </div>
      <div class="col-lg-3 callout"> <i class="fa fa-bullhorn fa-3x"></i>
        <h3>Référencement/Publicité</h3>
        <p></p>
      </div>
      <div class="col-lg-3 callout"> <i class="fa fa-mobile  fa-3x"></i>
        <h3>Application Mobile</h3>
        <p></p>
      </div>
                
    </div>
    <!-- row --> 
  </div>
</div>
<!-- container -->

<!-- ==== PORTFOLIO ==== -->
<div id="portfolio" name="portfolio">
  <div class="container">
    <div class="row">
      <h2 class="centered">Portfolio</h2>
      <hr>
          <div class="col-lg-8 col-lg-offset-2 centered">
        <p class="large">Ce portefeuille représente quelque projets qui a été réalisé par notre société.</p>
      </div>
    </div>
    <!-- /row -->
    <div class="container">
      <div class="row"> 
        
        <!-- PORTFOLIO IMAGE 1 -->
        <div class="col-md-4 ">
          <div class="grid mask">
            <figure> <img class="img-responsive" src="img/portfolio/wac.jpg" alt="">
              <figcaption>
                <h5>WAC</h5>
                <a data-toggle="modal" href="http://www.wac.ma/" target="_blank" class="btn btn-default">Visiter</a> </figcaption>
              <!-- /figcaption --> 
            </figure>
            <!-- /figure --> 
          </div>
          <!-- /grid-mask --> 
        </div>
        
        <!-- MODAL SHOW THE PORTFOLIO IMAGE. In this demo, all links point to this modal. You should create
						      a modal for each of your projects. -->
        
        <div class="modal fade" id="devise" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Demande de devis</h4>
              </div>
              <div class="modal-body">
                <p><img class="img-responsive" src="" alt=""></p>
                    <!--table demande devis-->
                  <div class="row-fluid">
                      <form class="form-horizontal" role="form" action="" method="post">
                          <div class="row">
                              <div class="col-xs-5">
                                  <div class="form-group">
                                      <label for="name" class="col-md-4 control-label">Nom:</label>
                                      <div class="col-md-8">
                                          <input type="text" class="form-control" name="nom" id="nom" placeholder="" required>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-xs-5">
                                  <div class="form-group">
                                      <label for="prenom" class="col-md-4 control-label">Prénom:</label>
                                      <div class="col-md-8">
                                          <input type="text" class="form-control" name="prenom" id="prenom" placeholder="" required>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-xs-5">
                                  <div class="form-group">
                                      <label for="gsm" class="col-md-4 control-label">Gsm:</label>
                                      <div class="col-md-8">
                                          <input type="text" class="form-control" name="gsm" id="gsm" placeholder="" required>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-xs-5">
                                  <div class="form-group">
                                      <label for="fix" class="col-md-4 control-label">Fix:</label>
                                      <div class="col-md-8">
                                          <input type="text" class="form-control" name="fix" id="fix" placeholder="">
                                      </div>
                                  </div>
                              </div>
                              <div class="col-xs-5">
                                  <div class="form-group">
                                      <label for="email" class="col-md-4 control-label">Email:</label>
                                      <div class="col-md-8">
                                          <input type="email" class="form-control" name="email" id="email" placeholder="" required>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-xs-5">
                                  <div class="form-group">
                                      <label for="objet" class="col-md-4 control-label">Objet:</label>
                                      <div class="col-md-8">
                                          <input type="text" class="form-control" name="objet" id="objet" placeholder="" value="Demande de devis." required>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-xs-5">
                                  <div class="form-group">
                                      <label for="societe" class="col-md-4 control-label">Société:</label>
                                      <div class="col-md-8">
                                          <input type="text" class="form-control" name="societe" id="societe" placeholder="" required>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-xs-5">
                                  <div class="form-group">
                                      <label for="message" class="col-md-4 control-label">Message:</label>
                                      <div class="col-md-8">
                                          <textarea id="message" name="message" maxlength="600" class="form-control" required></textarea>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-xs-5">
                                  <div class="form-group">
                                      <label class="col-md-4 control-label">Packs:</label>
                                      <div class="col-md-8">
                                          <br>
                                          <input type="radio" name="packs" value="Beginner" required value="1">Beginner<br>
                                          <input type="radio" name="packs" value="Advanced">Advanced<br>
                                          <input type="radio" name="packs" value="Pro">Pro<br>
                                          <input type="radio" name="packs" value="E-Commerce">E-Commerce<br>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-xs-5">
                                  <div class="form-group">
                                      <label class="col-md-4 control-label">Services:</label>
                                      <div class="col-md-8">
                                          <br>
                                          <input type="checkbox" name="services[]" style="width:12px;margin-left:2px;margin-right:8px;" value="Création de Site web">Création de Site web<br>
                                          <input type="checkbox" name="services[]" style="width:12px;margin-left:2px;margin-right:8px;" value="Publicité sur les réseaux sociaux">Publicité sur les réseaux sociaux<br>
                                          <input type="checkbox" name="services[]" style="width:12px;margin-left:2px;margin-right:8px;" value="Community management">Community management<br>
                                          <input type="checkbox" name="services[]" style="width:12px;margin-left:2px;margin-right:8px;" value="Référencement naturel">Référencement naturel<br>
                                          <input type="checkbox" name="services[]" style="width:12px;margin-left:2px;margin-right:8px;" value="Référencement payant">Référencement payant<br>
                                          <input type="checkbox" name="services[]" style="width:12px;margin-left:2px;margin-right:8px;" value="Studio graphique">Studio graphique<br>
                                          <input type="checkbox" name="services[]" style="width:12px;margin-left:2px;margin-right:8px;" value="Applications Mobiles">Applications Mobiles<br>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-xs-10">
                                  <button type="submit" name="demander" value="demander" class="btn btn-success " style="float: right;">Demander</button>
                              </div>
                          </div><!-- /.row this actually does not appear to be needed with the form-horizontal -->
                      </form>
                  </div>
                    <!-- -->

              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
              </div>
            </div>
            <!-- /.modal-content --> 
          </div>
          <!-- /.modal-dialog --> 
        </div>
        <!-- /.modal --> 
        
        <!-- PORTFOLIO IMAGE 2 -->
        <div class="col-md-4">
          <div class="grid mask">
            <figure> <img class="img-responsive" src="img/portfolio/nasserpalace.jpg" alt="">
              <figcaption>
                <h5>Nasser Palace</h5>
                <a data-toggle="modal" href="http://www.nasserpalace.com/" target="_blank" class="btn btn-default">Visiter</a> </figcaption>
              <!-- /figcaption --> 
            </figure>
            <!-- /figure --> 
          </div>
          <!-- /grid-mask --> 
        </div>
        
        <!-- PORTFOLIO IMAGE 3 -->
        <div class="col-md-4">
          <div class="grid mask">
            <figure> <img class="img-responsive" src="img/portfolio/dentredensg.jpg" alt="">
              <figcaption>
                <h5>Centre de l'enseignement</h5>
                <a data-toggle="modal" href="http://www.centredelenseigne.ma/" target="_blank" class="btn btn-default">Visiter</a> </figcaption>
              <!-- /figcaption --> 
            </figure>
            <!-- /figure --> 
          </div>
          <!-- /grid-mask --> 
        </div>
      </div>
      <!-- /row --> 
      
      <!-- PORTFOLIO IMAGE 4 -->
      <div class="row">
        <div class="col-md-4 ">
          <div class="grid mask">
            <figure> <img class="img-responsive" src="img/portfolio/derbyma.jpg" alt="">
              <figcaption>
                <h5>Derby</h5>
                <a data-toggle="modal" href="http://derby.ma/" target="_blank" class="btn btn-default">Visiter</a> </figcaption>
              <!-- /figcaption --> 
            </figure>
            <!-- /figure --> 
          </div>
          <!-- /grid-mask --> 
        </div>
        
        <!-- PORTFOLIO IMAGE 5 -->
        <div class="col-md-4">
          <div class="grid mask">
            <figure> <img class="img-responsive" src="img/portfolio/yacotoptique.jpg" alt="">
              <figcaption>
                <h5>Yacout Optique</h5>
                <a data-toggle="modal" href="http://www.yacoutoptic.com/" target="_blank" class="btn btn-default">Visiter</a> </figcaption>
              <!-- /figcaption --> 
            </figure>
            <!-- /figure --> 
          </div>
          <!-- /grid-mask --> 
        </div>
        
        <!-- PORTFOLIO IMAGE 6 -->
        <div class="col-md-4">
          <div class="grid mask">
            <figure> <img class="img-responsive" src="img/portfolio/axaassurance.jpg" alt="">
              <figcaption>
                <h5>AXA Centre d'Appel</h5>
                <a data-toggle="modal" href="http://www.axa.fr/" target="_blank" class="btn btn-default">Visiter</a> </figcaption>
              <!-- /figcaption --> 
            </figure>
            <!-- /figure --> 
          </div>
          <!-- /grid-mask --> 
        </div>
        <!-- /col --> 
      </div>
      <!-- /row --> 

        <!-- /col --> 

      <!-- /row --> 
    </div>
    <!-- /row --> 
  </div>
</div>
<!-- /container --> 

<!-- ==== TEAM MEMBERS ==== -->
<div id="equipe" name="team">
  <div class="container">
    <div class="row centered">
      <h2 class="centered">Notre équipe</h2>
      <hr>
      <div class="col-lg-4 centered"> <img class="img img-circle" src="assets/img/team/alaoui.jpg" height="180px" width="180px" alt="">
        <h4>EL HAMDI ALAOUI Mohamed</h4>
        <p>CEO chez BullCreation.</p>
        <!--<a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-linkedin"></i></a>-->
        </div>
      <div class="col-lg-4 centered"> <img class="img img-circle" src="assets/img/team/mhamdi.jpg" height="180px" width="180px" alt="">
        <h4>MHAMDI Youssef</h4>
        <p>CEO & Founder de BullCreation.</p>
        <a href="https://www.facebook.com/mydi88" target="_blank"><i class="fa fa-facebook"></i></a> <a href="https://www.linkedin.com/pub/youssef-mhamdi/18/82/997" target="_blank"><i class="fa fa-linkedin"></i></a> <a href="https://plus.google.com/104501174836227647160" target="_blank"><i class="fa fa-google-plus"></i></a>
      </div>
      <div class="col-lg-4 centered"> <img class="img img-circle" src="assets/img/team/daoudi.jpg" height="180px" width="180px" alt="">
        <h4>DAOUDI Soufiane</h4>
        <p>Freelander chez BullCreation</p>
        <!--<a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-linkedin"></i></a>-->
      </div>

      <div class="col-lg-8 col-lg-offset-2 centered">
        <p class="large"><br>Notre point fort est que nous avons un travail d'équipe et la confiance. qui donne la meilleure vue de vous servir parfaitement.<br><br><br></p>
      </div>
    </div>
  </div>
  <!-- row --> 
</div>
<!-- container -->
<?php
include "contact.php";
?>
<!-- ==== CONTACT ==== -->
<div id="contact" name="contact">
  <div class="container">
    <div class="row">
      <h2 class="centered">Contactez-nous</h2>
      <hr>
      <div class="col-md-4 centered"> <i class="fa fa-map-marker fa-2x" style="color:orangered"></i>
        <p>N° 456, Etage N° 4, Technopark (Route Nouacer)<br>
            Casablanca, Maroc</p>
      </div>
      <div class="col-md-4"> <i class="fa fa-envelope-o fa-2x" style="color:orangered"></i>
        <p>info@bull-creation.com</p>
      </div>
      <div class="col-md-4"> <i class="fa fa-phone fa-2x" style="color:orangered"></i>
        <p> +212 620-693022</p>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-8 col-lg-offset-2 centered">
        <p><b>Une question, une remarque ? Contactez-nous !</b><br>
            Nous nous engageons à y répondre dans
            les meilleurs délais.
        </p>



        <form id="contact" method="post" class="form" role="form" action="">
            <input type="hidden" name="action" value="submit">
          <div class="row">
            <div class="col-xs-6 col-md-6 form-group">
              <input class="form-control" id="name" name="name" placeholder="Nom complet" type="text" required />
            </div>
            <div class="col-xs-6 col-md-6 form-group">
              <input class="form-control" id="email" name="email" placeholder="Email" type="email" required />
            </div>
          </div>
          <textarea class="form-control" id="message" name="message" placeholder="Message" rows="5" required></textarea>
          <div class="row">
            <div class="col-xs-12 col-md-12">
              <button class="btn btn btn-lg" type="submit" name="mesform">Envoyer le message</button>
            </div>
          </div>
        </form>
        <!-- form --> 
      </div>
    </div>
    <!-- row -->

  </div>
</div>
<!-- container -->

<div id="footerwrap">
  <div class="container">
    <div class="row">
      <div class="col-md-8"> <span class="copyright">Copyright &copy; 2015. Design by <a href="http://www.tbull-creation.com" rel="nofollow">BullCreation</a></span> </div>
      <div class="col-md-4">
        <!--<ul class="list-inline social-buttons">
          <li><a href="https://twitter.com/bullcreation1" target="_blank"><i class="fa fa-twitter"></i></a> </li>
          <li><a href="https://www.facebook.com/Bullcreation/" target="_blank"><i class="fa fa-facebook"></i></a> </li>
          <li><a href="https://plus.google.com/113203444066409265090/" target="_blank"><i class="fa fa-google-plus"></i></a> </li>
          <li><a href="#"><i class="fa fa-linkedin"></i></a> </li>
        </ul>-->

          <a><img src="//w.bookcdn.com/weather/picture/26_19153_1_3_e67e22_250_d35401_ffffff_ffffff_1_2071c9_ffffff_0_3.png?scode=124&domid=w209" /></a>
      </div>
    </div>
  </div>
</div>

<!-- Bootstrap core JavaScript
    ================================================== --> 
<!-- Placed at the end of the document so the pages load faster --> 

<script type="text/javascript" src="assets/js/bootstrap.min.js"></script> 
<script type="text/javascript" src="assets/js/retina.js"></script> 
<script type="text/javascript" src="assets/js/jquery.easing.1.3.js"></script> 
<script type="text/javascript" src="assets/js/smoothscroll.js"></script> 
<script type="text/javascript" src="assets/js/jquery-func.js"></script>
</body>
</html>
