<?php
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require '../src/Exception.php';
require '../src/PHPMailer.php';
require '../src/SMTP.php';
include "../config.php";
include '../controller/UtilisateurC.php';
$userC = new UtilisateurC();

$user=$_SESSION['prenom'] .' '. $_SESSION['nom'];
$id=$_SESSION['id'];
$prenom=$_SESSION['prenom'];
$nom=$_SESSION['nom'];
$role=$_SESSION['role'];

$email=$_SESSION['email'];
$adresse=$_SESSION['adresse'];
$login=$_SESSION['login'];
$date=$_SESSION['date'];
$telephone=$_SESSION['telephone'];

 if ( 
 isset($_POST['nom'])
// && isset($_POST['prenom'])
// && isset($_POST['cin'])
// && isset($_POST['date_de_naissance'])
// && isset($_POST['email'])
// && isset($_POST['telephone'])
// && isset($_POST['adresse'])
 )
 {
if(!empty($_POST['nom'])
// &&!empty($_POST['prenom'])
//   &&!empty($_POST['cin'])
//   &&!empty($_POST['date_de_naissance'])
//   &&!empty($_POST['email'])
//   &&!empty($_POST['telephone'])
//   &&!empty($_POST['adresse'])
 )
  { 
  $nomUp=$_POST["nom"];
  $prenomUp=$_POST["prenom"];

  $dateUp=$_POST["date_de_naissance"];
  $emailUp=$_POST["email"];
  $telephoneUp=$_POST["telephone"];
  $adresseUP=$_POST["adresse"];
  
  $userC->modifierUtilisateur($id,$nomUp,$prenomUp,$dateUp,$emailUp,$telephoneUp,$adresseUp);
  header('Location:profil.php');
  
  $_SESSION['prenom'] = $prenomUp;
  $_SESSION['nom'] = $nomUp;
  $_SESSION['email'] = $emailUp;
  $_SESSION['telephone'] = $telephoneUp;
  $_SESSION['adresse'] = $adresseUP;

  $_SESSION['date'] = $dateUp;
}
}
else{
  echo("");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="utf-8">
<meta name="robots" content="all,follow">
<meta name="googlebot" content="index,follow,snippet,archive">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Obaju e-commerce template">
<meta name="author" content="Ondrej Svestka | ondrejsvestka.cz">
<meta name="keywords" content="">

<title>
    Sport News:PROFIL
</title>

<meta name="keywords" content="">

<link href='http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100' rel='stylesheet' type='text/css'>

<!-- styles -->
<link href="../css/font-awesome.css" rel="stylesheet">
<link href="../css/bootstrap.min.css" rel="stylesheet">
<link href="../css/animate.min.css" rel="stylesheet">
<link href="../css/owl.carousel.css" rel="stylesheet">
<link href="../css/owl.theme.css" rel="stylesheet">

<!-- theme stylesheet -->
<link href="../css/style.default.css" rel="stylesheet" id="theme-stylesheet">

<!-- your stylesheet with modifications -->
<link href="../css/custom.css" rel="stylesheet">

<script src="../js/respond.min.js"></script>

<link rel="shortcut icon" href="favicon.png">



</head>
  <body>
  <div id="top">
        <div class="container">
            <div class="col-md-6 offer" data-animate="fadeInDown">
                <a href="#" class="btn btn-success btn-sm" data-animate-hover="shake"> Bienvenue </a>  <a href="#">chez Sport News!</a>
            </div>
            <div class="col-md-6" data-animate="fadeInDown">
                <ul class="menu">
                   
                    <li><a href="profil.php">Mon Profil</a>
                    </li>
                    <li><a href="index.php">se deconnecter</a>
                    </li>
                    <!--<li><a href="#">vu viewed</a>
                    </li>-->
                </ul>
            </div>
        </div>
        <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
            <div class="modal-dialog modal-sm">

                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="Login">Customer login</h4>
                    </div>
                    <div class="modal-body">
                        <form  method="post">
                            <div class="form-group">
                                <input type="text" class="form-control" id="email-modal" placeholder="email">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="password-modal" placeholder="password">
                            </div>

                            <p class="text-center">
                                <button class="btn btn-primary"><i class="fa fa-sign-in"></i> Log in</button>
                            </p>

                        </form>

                        <p class="text-center text-muted">Not registered yet?</p>
                        <p class="text-center text-muted"><a href="creercompte.php"><strong>Register now</strong></a>! It is easy and done in 1&nbsp;minute and gives you access to special discounts and much more!</p>

                    </div>
                </div>
            </div>
        </div>

    </div>
       <!-- *** NAVBAR ***
 _________________________________________________________ -->

 <div class="navbar navbar-default yamm" role="navigation" id="navbar">
        <div class="container">
            <div class="navbar-header">

                <a class="navbar-brand home" href="index.html" data-animate-hover="bounce">
                    <img src="../img/logo.png" alt="Obaju logo" class="hidden-xs">
                    <img src="../img/logo-small.png" alt="Obaju logo" class="visible-xs"><span class="sr-only">Sport News- go to homepage</span>
                </a>
                <div class="navbar-buttons">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <i class="fa fa-align-justify"></i>
                    </button>
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#search">
                        <span class="sr-only">Toggle search</span>
                        <i class="fa fa-search"></i>
                    </button>
                    <a class="btn btn-default navbar-toggle" href="checkout1.html">
                        <i class="fa fa-shopping-cart"></i>  <span class="hidden-xs">(3) Pannier</span>
                    </a>
                </div>
            </div>
            <!--/.navbar-header -->
<!-- modules : https://www.proxi.tn/199-machines-de-bureau -->
            <div class="navbar-collapse collapse" id="navigation">

                <ul class="nav navbar-nav navbar-left">
                    <li class="active"><a href="acceuil.php">Acceuil</a>
                    </li>
                    

                    <li class="dropdown yamm-fw">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200">Forum <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <div class="yamm-content">
                                    <div class="row">
                                        
                                      
                                        <div class="col-sm-3">
                                            <h5>Notre Forum</h5>
                                            <ul>
                                                <li><a href="aziza.php">Forum</a>
                                                </li>
                                               
                                            </ul>
                                            
                                            
                                        </div>
                                        
                                    </div>
                                </div>
                                <!-- /.yamm-content -->
                            </li>
                        </ul>

                    </li>

                    <li class="dropdown yamm-fw">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200">Evennement <b class="caret"></b></a>
                        
                        
                    </li>
                    <!-- modifications SAV -->
                   <li class="dropdown yamm-fw">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200">Shop<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <div class="yamm-content">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h5>Notre Shop</h5>
                                            <ul>
                                                <li><a href="produit.php">Tous les produits</a>
                                                </li>
                                               
                                            </ul>
                                        </div>
                                        
                                        

                                    </div>
                                </div>

                            </li>
                        </ul>
                    </li>
                </ul>


            </div>
            <!--/.nav-collapse -->

            <div class="navbar-buttons">

                <div class="navbar-collapse collapse right" id="basket-overview">
                    <a href="checkout1.html" class="btn btn-primary navbar-btn"><i class="fa fa-shopping-cart"></i><span class="hidden-sm"> (3) Pannier</span></a>
                </div>
                <!--/.nav-collapse -->

                <div class="navbar-collapse collapse right" id="search-not-mobile">
                    <button type="button" class="btn navbar-btn btn-primary" data-toggle="collapse" data-target="#search">
                        <span class="sr-only">Toggle search</span>
                        <i class="fa fa-search"></i>
                    </button>
                </div>

            </div>

            <div class="collapse clearfix" id="search">

                <form class="navbar-form" role="search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search">
                        <span class="input-group-btn">

			<button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>

		    </span>
                    </div>
                </form>

            </div>
            <!--/.nav-collapse -->

        </div>
        <!-- /.container -->
    </div>
    <!-- /#navbar -->

    <!-- *** NAVBAR END *** -->
    <div id="all">

<div id="content">
    <div class="container">

        <div class="col-md-12">

            <ul class="breadcrumb">
                <li><a href="#">Home</a>
                </li>
                <li>Mon Profil</li>
            </ul>

        </div>

        <div class="col-md-3">
            <!-- *** CUSTOMER MENU ***
_________________________________________________________ -->
            <div class="panel panel-default sidebar-menu">

                <div class="panel-heading">
                    <h3 class="panel-title">Customer section</h3>
                </div>

                <div class="panel-body">

                    <ul class="nav nav-pills nav-stacked">
                        <li class="active">
                            <a href="customer-orders.html"><i class="fa fa-list"></i> My orders</a>
                        </li>
                       
                       
                       
                    </ul>
                </div>

            </div>
            <!-- /.col-md-3 -->

            <!-- *** CUSTOMER MENU END *** -->
        </div>
  
        <div class="col-md-9">
                    <div class="box">
                        <h1>Mon Profil</h1>
                      
                        
                        <div class="container-scroller">
      
 <div class="main-panel">
     <div style="height: 100%;overflow-y: scroll;overflow-x: hidden; ">
         <div class="col-12 grid-margin" style="margin-top: 10px">
            <div class="card">
             <div class="card-body">
             <form class="form-sample" action="" method="POST">
                      <p class="card-description">Informations personnelles</p>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Prenom</label>
                            <div class="col-sm-9">
                              <input type="text" name="prenom" class="form-control" value='<?PHP echo $prenom; ?>' />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Nom de famille</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="nom" value='<?PHP echo $nom; ?>'  />
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">ROLE</label>
                            <div class="col-sm-9">
                              <select class="form-control" disabled>
                                <option <?=$role == 'Medecin' ? ' selected="selected"' : '';?>>utilisateur</option>
                                <option <?=$role == 'Secretaire' ? ' selected="selected"' : '';?>>admin</option>
                                
                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Date de naissance</label>
                            <div class="col-sm-9">
                              <input class="form-control" name="date_de_naissance" value='<?PHP echo $date; ?>'  />
                            </div>
                          </div>
                        </div>
                      </div>
                       <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Email</label>
                            <div class="col-sm-9">
                              <input type="text" name="email" class="form-control" value='<?PHP echo $email; ?>' />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Numero de Telephone</label>
                            <div class="col-sm-9">
                              <input type="text" name="telephone" class="form-control" value='<?PHP echo $telephone; ?>' />
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Adresse</label>
                            <div class="col-sm-9">
                              <input type="text" name="adresse" class="form-control" value='<?PHP echo $adresse; ?>' />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                          <label class="col-sm-3 col-form-label"></label>
                          <div class="col-sm-9">
                            <select class="form-control">
                              <option>Tunisie</option>
                              <option>Algerie</option>
                              <option>France</option>
                              <option>Italie</option>
                              <option>Germany</option>
                              <option>Turkish</option>
                              <option>Russia</option>
                              <option>Britain</option>
                              <option>Maroc</option>
                              <option>Libia</option>
                              <option>Egypte</option>
                              <option>Palestine</option>
                              <option>Denmark</option>
                              <option>Inde</option>
                              <option>Suisse</option>
                              <option>Iraq</option>
                              <option>Japon</option>
                              <option>Suede</option>
                              <option>Cameroune</option>
                              <option>Senegale</option>
                            </select>
                          </div>
                            
                          </div>
                        </div>
                      </div>
                      <div style="margin-top:3%">
              <button type="submit" class="btn btn-primary mr-2"> Modifier </button>
              <button class="btn btn-light" type="reset">Annuler</button>
          </div>
                    </form>
                </div>
              </div>
            </div>
        </div>
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © SportNews 2020</span>
          </div>
        </footer>
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
                        

                        

                        
                        
                    </div>
                </div>

            </div>
            <!-- /.container -->
        </div>


          <!-- *** FOOTER ***
 _________________________________________________________ -->
        <div id="footer" data-animate="fadeInUp">
            <div class="container">
                <div class="row">
                   
                    <!-- /.col-md-3 -->

                    
                    <!-- /.col-md-3 -->

                    



                    
                    <!-- /.col-md-3 -->

                </div>
                <!-- /.row -->

            </div>
            <!-- /.container -->
        </div>
        <!-- /#footer -->

        <!-- *** FOOTER END *** -->




        <!-- *** COPYRIGHT ***
 _________________________________________________________ -->
        <div id="copyright">
            <div class="container">
                <div class="col-md-6">
                    <p class="pull-left">© 2015 Your name goes here.</p>

                </div>
                <div class="col-md-6">
                    <p class="pull-right">Template by <a href="https://bootstrapious.com/e-commerce-templates">Bootstrapious</a> & <a href="https://fity.cz">Fity</a>
                        <!-- Not removing these links is part of the license conditions of the template. Thanks for understanding :) If you want to use the template without the attribution links, you can do so after supporting further themes development at https://bootstrapious.com/donate  -->
                    </p>
                </div>
            </div>
        </div>
        <!-- *** COPYRIGHT END *** -->



    </div>
    <!-- /#all -->


    

    <!-- *** SCRIPTS TO INCLUDE ***
 _________________________________________________________ -->
    <script src="../js/jquery-1.11.0.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery.cookie.js"></script>
    <script src="../js/waypoints.min.js"></script>
    <script src="../js/modernizr.js"></script>
    <script src="../js/bootstrap-hover-dropdown.js"></script>
    <script src="../js/owl.carousel.min.js"></script>
    <script src="../js/front.js"></script>

   

</body>

</html>

