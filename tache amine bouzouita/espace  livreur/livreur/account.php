<?php 
session_start();
$conn = new mysqli("localhost","root","","sportnews");
if($conn->connect_error){
    die("Connection Failed!".$conn->connect_error);
}
$sql =" SELECT   id,email, vehicule, phone,date FROM livreur WHERE name='".$_SESSION['livreur']."'and pwd= '".$_SESSION["pwd"]."' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {

    $_SESSION["livid"]=$row["id"] ;
    $_SESSION["livemail"]=$row["email"] ;
    $_SESSION["livvehicle"]=$row["vehicule"] ;
     $_SESSION["livphonenumber"]=$row["phone"] ;
     $_SESSION["dateliv"]=$row["date"] ;
  }
} 


?>
<!DOCTYPE html>
<html lang="en">
<head>
<link href="css.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
* {
  box-sizing: border-box;
}

/* Create two equal columns that floats next to each other */
.column {
  float: left;
  width: 50%;
  padding: 10px;
  height: 300px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
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
    Hi ,<?php 
echo $_SESSION["livreur"]; ?></a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <a href="logout.php">logout</a>

  
</div>
<br>
<br>
<br>
<br>
<div align="left"><h1>welcome ' <?php  echo $_SESSION["livreur"] ?>' here's you're account info :</h1></div>
  <div class="column"><h2>ID: <?php  echo $_SESSION["livid"] ?></h2>
<h2>name:<?php echo $_SESSION["livreur"] ?></h2>
<h2>email:<?php echo $_SESSION["livemail"] ?></h2>
<br><br><br><br><br>
<h3>MODIFY ACCOUNT</h3>
<button onclick="window.location.href='modifier.php'"class="button">change account</button>
</div>
  <div class="column"><h2>vehicle:<?php  echo$_SESSION["livvehicle"] ?></h2>
<h2>phonenumber:<?php  echo$_SESSION["livphonenumber"] ?></h2>
<h2>date created:<?php  echo$_SESSION["dateliv"] ?></h2>
<br><br><br><br><br>
<h3>DELETE ACCOUNT</h3>
<button onclick="window.location.href='delete.php'"class="button">delete account</button>
</div>
</div>  


 
<div class="footer">
<br>
  <strong>Copyright sportnews</strong>
  <br>
</div>

</body>
</html>