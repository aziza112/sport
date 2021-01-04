<?php 
session_start();
$connn = new mysqli("localhost","root","","sportnews");
	if($connn->connect_error){
		die("Connection Failed!".$conn->connect_error);
	}
if (isset($_POST["name"])&&isset($_POST["pwd"])){
 $sql = "SELECT id  FROM livreur WHERE name='".$_POST["name"]."'and pwd= '".$_POST["pwd"]."' ";
 $results = mysqli_query($connn, $sql);
if (mysqli_num_rows($results) == 1) {
    $_SESSION['livreur'] = $_POST["name"];
     $_SESSION['pwd'] = $_POST["pwd"];
    
           header("location:index.php") ;
      }
else{
    echo "<script>alert(\"wrong credentials try again\")</script>";
   }    
}

$connn->close();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
   <link href="css.css" rel="stylesheet">
</head>
<body style="background-color:lightblue;">
   <table>
       <tr> <td><img src="../img/logo.png" alt="banner sportnews" width="400" height="250"></td>
      
    </tr>
   <div id="Registercontainer">
  <div class="RegForm">
    <h1> Welcome to SportNews</h1>
    <h2>log in please</h2>
    <div id="back_glob">
      <div id="back_form">
        <form method="POST">
          <label for="name">FULL NAME</label>
          <input type="text" name="name" id="name" />
          <br/>
          
          <label for="pwd"> PASSWORD</label>
          <input name="pwd" type="password" id="pwd"/>
          <br/>
          <input type="submit" name="valid" value="login" />
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <a href="register.php">devient un livreur</a>
        </form>
      </div>
    </div>
  </div>
  
    
</body>
</html>