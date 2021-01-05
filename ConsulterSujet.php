<?PHP
    include "../controller/SujetCore.php";
    include "../controller/CommentaireCore.php";
    include "../model/Sujet.php";


    $sujetC = new SujetCore();
    $sujet = $sujetC->getsujet($_GET["id"]);

    $commentaireC = new CommentaireCore();
    $listeCommentaires = $commentaireC->afficherCommentaires($_GET["id"]);




    

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
        Sport News
    </title>

    <meta name="keywords" content="">

    <link href='http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100' rel='stylesheet' type='text/css'>

    <!-- styles -->
    <link href="../css/font-awesome.css" rel="stylesheet">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/animate.min.css" rel="stylesheet">
    <link href="../css/owl.carousel.css" rel="stylesheet">
    <link href="../css/owl.theme.css" rel="stylesheet">


    <script src="https://kit.fontawesome.com/6293f721e5.js" crossorigin="anonymous"></script>

    <!-- theme stylesheet -->
    <link href="../css/style.default.css" rel="stylesheet" id="theme-stylesheet">

    <!-- your stylesheet with modifications -->
    <link href="../css/custom.css" rel="stylesheet">

    <script src="../js/respond.min.js"></script>

    <link rel="shortcut icon" href="favicon.png">



</head>

<body>

    <!-- *** TOPBAR ***
 _________________________________________________________ -->
 <div id="top">
        <div class="container">
            <div class="col-md-6 offer" data-animate="fadeInDown">
            <a href="#" class="btn btn-success btn-sm" data-animate-hover="shake"> Bienvenue </a>  <a href="#">chez Sport News!</a>            </div>
            <div class="col-md-6" data-animate="fadeInDown">
                <ul class="menu">
                <li><a href="profil.php">Mon Profil</a>
                    </li>
                    <li><a href="logout.php">se deconnecter</a>
                    </li>
                    
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
                        <form action="customer-orders.html" method="post">
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
                        <p class="text-center text-muted"><a href="register.html"><strong>Register now</strong></a>! It is easy and done in 1&nbsp;minute and gives you access to special discounts and much more!</p>

                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- *** TOP BAR END *** -->

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
    <!-- /#navbar -->

    <!-- *** NAVBAR END *** -->

    <div id="all">

        <div id="content">
            <div class="container">

                <div class="col-sm-12">

                    <ul class="breadcrumb">

                        <li><a href="index.html">Home</a>
                        </li>
                        <li><a href="blog.html">Blog</a>
                        </li>
                        <li>Blog post</li>
                    </ul>
                </div>
                

                <div class="col-sm-9" id="blog-post">


                    <div class="box">
                    <?php  foreach ($sujet as $s): ?>

                        <h1>Titre :<?php  echo $s['titre']; ?></h1>

                        <h2>
                        Description:
                        <?php  echo $s['texte']; ?></h2>
                        
                        Etat :
                        <?php 
                         if ($s['etat']== 0){
                             ?>
                             <i class="fas fa-times"></i>
                        <?php
                            echo "Non Résolu";
                        }
                        ?>
                    
                        <?php
                        if ($s['etat']== 1){
                        ?>
                        <i class="fas fa-check-circle"></i>
                        <?php
                            
                            echo "Sujet Résolu";
                        }
                        ?>
                        <div class="d-flex flex-row-reverse">
                            <div class="ml-auto p-2">
                            <a href="ResoudreSujet.php?idtoresoudre=<?php echo $s['id']; ?>"> 
                                <button class="btn btn-warning" ><i class="fas fa-check-circle"></i> Résoudre</button>
                            </a>

                            <a href="AnnulerResoudreSujet.php?idtoresoudre=<?php echo $s['id']; ?>"> 
                                <button class="btn btn-info" ><i class="fas fa-times"></i> Annuler la Résolution</button>
                            </a>
                            </div>
                        </div>


                    <?php endforeach ?>

                        <div id="comment-form" data-animate="fadeInUp">

                            <h4>Liste des Commentaires</h4>

  
                                        <div class="form-group">
                                            <table border=1 align = 'center'>
                                                <tr>
                                                    <th>Contenu</th>
                                                    <th>user</th>
                                                    <th>Action</th>
                                                </tr>

                                                <?PHP
                                                     foreach ($listeCommentaires as $commentaire): {
                                                ?>
                                                    <tr>
                                                        <td><?PHP echo $commentaire['contenu']; ?></td>
                                                        <td><?PHP echo $commentaire['userid']; ?></td> <!-- a changer  affichage du nom apres integration de la session-->
                                                        <td> 
                                                            <?php if($commentaire['userid'] == 10 ): ?>   <!-- a changer apres integration de la session-->
                                                                <a href="SupprimerCommentaire.php?sujet_id=<?php echo $_GET["id"]; ?>&comtodelete=<?php echo $commentaire['id']; ?>"> 
                                                            <button class="btn btn-danger" ><i class="fas fa-eye"></i> supprimer</button>
                                                                </a>
                                                            <?php endif ?>
                                                         </td>					
                                                    </tr>
                                                <?PHP
                                                    }
                                                ?>
                                                <?php endforeach ?>

                                            </table>
                                        </div>


                            <form method="post" action="addCommentaire.php">

                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="comment">Nouveau Commentaire <span class="required">*</span>
                                            </label>
                                            <textarea class="form-control" name="contenu" id="contenu"  rows="4"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <input hidden type="text" name="sujet_id" value="<?php echo $_GET['id'] ;?>">

                                <div class="row">
                                    <div class="col-sm-12 text-right">
                                        <button class="btn btn-primary"><i class="fa fa-comment-o"></i> Envoyer</button>
                                    </div>
                                </div>


                            </form>

                        </div>
                        <!-- /#comment-form -->

                    </div>
                    <!-- /.box -->
                </div>
                <!-- /#blog-post -->

                <div class="col-md-3">
                    <!-- *** BLOG MENU ***
 _________________________________________________________ -->
                   
                    <!-- /.col-md-3 -->

                    <!-- *** BLOG MENU END *** -->

                    
                </div>


            </div>
            <!-- /.container -->
        </div>
        <!-- /#content -->

        <!-- *** FOOTER ***
 _________________________________________________________ -->
        <div id="footer" data-animate="fadeInUp">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                     

                    </div>
                    <!-- /.col-md-3 -->

                    <div class="col-md-3 col-sm-6">

                        

                    </div>
                    <!-- /.col-md-3 -->

                    <div class="col-md-3 col-sm-6">

                        

                    </div>
                    <!-- /.col-md-3 -->



                    <div class="col-md-3 col-sm-6">

                      


                       


                    </div>
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
                    <p class="pull-left">© 2020 Sport News</p>

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