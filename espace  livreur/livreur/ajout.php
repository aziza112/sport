
<!DOCTYPE html>
  <html lang="en">
  <head>
  <link href="css.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>delivery route</title>
  </head>
  
  <style>
    
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: #4CAF50;
  color: white;
}
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #4CAF50;
  color: white;
}
.button {
  background-color: #697f69;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
</style>
</head>
<body> 
<div class="topnav">
  <a class="active" href="index.php">Home</a>
  <a href="account.php">account</a>
  <a href="delih.php">delivery history</a>

 
  <a href="">                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    Hi ,<?php session_start();
echo $_SESSION["livreur"]; ?></a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <a href="logout.php">logout</a>

  
</div>
    <br>
    <br>
    <br>
    <br>
    <br>
   <h2>u have been assigned a delivery to </h2>
   <h3>
   <?php 

 $_SESSION["ad"]=$_GET["ad"];
 echo $_SESSION["ad"];
  $_SESSION["rowid"]=$_GET["id"];
$conn = new mysqli("localhost","root","","sportnews");
	if($conn->connect_error){
		die("Connection Failed!".$conn->connect_error);
    }
   $livr=$_SESSION["livreur"] ;
    $id=$_GET["id"];
$sql="UPDATE orders SET `idlivreur`='$livr' WHERE `id`= '$id'      ";

if ($conn->query($sql) === TRUE) {
  
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();



?></h3>
  </body>
  </html>
  <!DOCTYPE html>
<html>
<body>
  <div>
<br>
<br>
 
<table><td>
<h3> click to check route :</h3></td> 
<td>
<button onclick="window.location.href='itinerary.php'"class="button">itinerary</button></td><td></td> <td></td><td></td> <td></td><td></td> <td></td><td></td> <td></td><td></td> <td></td><td></td> <td></td><td></td> <td></td><td></td> <td></td><td></td> <td></td><td></td> <td></td><td></td> <td></td><td></td> <td></td><td></td> <td></td><td></td> <td></td><td></td> <td></td><td></td> <td></td><td></td> <td></td><td></td> <td></td>
</table>
<h3>finished delivery</h3>
<button onclick="window.location.href='index.php'"class="button">item delivered</button>
 
<h3>something went wron, cancel delivery</h3>
<button onclick="window.location.href='annuler.php'"class="button">annuler livraison</button>
</div>
<div class="footer">
<strong>Copyright sportnews</strong>
</div>
</body>
</html>

