<?php 
session_start();
if (!isset($_SESSION["livreur"])) {
    header("location: loginlivreur.php"); 
    
    exit();
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
     .button {
  background-color: #4CAF50;
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
  background-color: white;
}

.topnav a {
  float: left;
  color: black;
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
  background-color: #191970;
  color: white;
}
</style>
</head>
<body bgcolor="#F0F0F0"> 
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
<h1 align="center">welcome '<?php echo $_SESSION['livreur']?>' chose what to deliver</h1>
    <table id="customers" border="2">
    <tr bgcolor="yellow">
        <td>id</td>
        <td>name</td>
        <td>email</td>
        <td>id livreur</td>
    </tr>
    
    <?php
    
    $conn = new mysqli("localhost","root","","sportnews");
    if($conn->connect_error){
      die("Connection Failed!".$conn->connect_error);
    }

$sql="SELECT * from orders";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
      
   
    
      echo '
        <tr>
            <td>'.$row["id"].'</td>
            <td>'.$row["name"].'</td>
            <td>'. $row["email"]. '</td>
            <td>'. $row["idlivreur"]. '</td>
            <td>        <form action="ajout.php" method="get">
                              <input type="hidden" id="id" name="id" value="'.$row["id"].'">
                              <input type="hidden" id="ad" name="ad" value="'.$row["address"].'">
                 <input type="submit" value="deliver"> 
            </form>
                          
                      </td>
                      <td>
                                   

           

        </tr>

        ';
  }
} else {
  echo "0 results";
}

 ?>
  
    </table>
    <div class="footer">
    <strong>Copyright sportnews</strong>
</div>
</body>
</html>


