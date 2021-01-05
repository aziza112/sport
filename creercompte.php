<?php

include "../config.php";
	include "../controller/UtilisateurC.php";
   $userC = new UtilisateurC();
   $error = "";
   if (
    isset($_POST['nom'])
    && isset($_POST['prenom'])
    
    && isset($_POST['date_de_naissance'])
    && isset($_POST['email'])
    && isset($_POST['role'])
    && isset($_POST['telephone'])
    && isset($_POST['login'])
    && isset($_POST['password'])
    && isset($_POST['adresse'])
  ) {
      if(!empty($_POST['nom'])
      &&!empty($_POST['prenom'])
     
      &&!empty($_POST['date_de_naissance'])
      &&!empty($_POST['email'])
      &&!empty($_POST['role'])
      &&!empty($_POST['telephone'])
      &&!empty($_POST['login'])
      &&!empty($_POST['password'])
      &&!empty($_POST['adresse'])
      )
      {
        $nom=$_POST["nom"];
        $prenom=$_POST["prenom"];
       
        $date=$_POST["date_de_naissance"];
        $email=$_POST["email"];
        $role=$_POST["role"];
        $telephone=$_POST["telephone"];
        $login=$_POST["login"];
        $password=$_POST["password"];
        $adresse=$_POST["adresse"];
        $userC->ajouterUtilisateur($nom,$prenom,$date,$email,$role,$telephone,$login,$password,$adresse);
        header('location:Index.php');
      }else{
        $error="Missing information";
      }
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Healing Admin</title>
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css" />
    <link rel="stylesheet" href="assets/vendors/flag-icon-css/css/flag-icon.min.css" />
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css" />
    <link rel="stylesheet" href="assets/vendors/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/login.css" />
    <link rel="shortcut icon" href="assets/images/favicon.png" />
  </head>
  <?php require "includes/inc_top.php"; ?>
<body style="overflow:hidden">
<div class="col-5" style="margin-left:25%;height:100%;margin-top:3%">
    <div class="card" style=" height:87%">
      <div class="card-body">
        <h2 class="card-title">Créer un compte</h2>
        <h5 style="color:red"><?php echo $error?></h5>

 <!--registration form *-->


        <form class="forms-sample" action="" method="POST" style="height:100%">
          <div style="height:85%;overflow-y:scroll">
            <div class="form-group">
              <label for="exampleInputName1">Nom</label>
              <input type="text" class="form-control" placeholder="Nom" name="nom"/>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail3">Prenom</label>
              <input type="text" class="form-control" placeholder="Prenom" name="prenom" />
            </div>
            
            <div class="form-group">
              <label for="exampleSelectGender">Role</label>
              <select class="form-control" name="role">
                <option>Utilisateur</option>

              </select>
            </div>
            <div class="form-group">
              <label for="exampleInputCity1">Date de naissance</label>
              <input type="date" class="form-control" id="Email" placeholder="yyyy-mm-dd" value="" min="1989-01-01" max="2005-12-31"  name="date_de_naissance" />
            </div>
            <div class="form-group">
              <label for="exampleInputCity1">Email</label>
              <input type="text" class="form-control" placeholder="Email" name="email" />
            </div>
            <div class="form-group">
              <label for="exampleInputCity1">Numero de telephone</label>
              <input type="text" class="form-control" placeholder="Telephone" name="telephone" />
            </div>
            <div class="form-group">
              <label for="exampleInputCity1">Login</label>
              <input type="text" class="form-control"  placeholder="Login" name="login"/>
            </div>
            <div class="form-group">
              <label for="exampleInputCity1">Mot de passe</label>
              <input type="password" class="form-control" placeholder="mot de passe" name="password" />
            </div>
            <div class="form-group">
              <label for="exampleInputCity1">Adresse</label>
              <input type="text" class="form-control"  placeholder="adresse" name="adresse"/>
            </div>
            <div style="margin-top:2%;border-top:1px solid grey">
            </div>
          </div>
          <div style="margin-top:3%">
              <button type="submit" class="btn btn-primary mr-2"> Enregistrer </button>
              <button class="btn btn-light" type="reset">Annuler</button>
          </div>
        </form>
      </div>
    </div>
</div>
</body>
</html>