
<!DOCTYPE html>
<html lang="en">
<head>
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

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.18/datatables.min.css" />

  <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.18/datatables.min.js"></script>
</head>
<body>
  
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <!-- Brand -->
    <a class="navbar-brand" href="#">Go back to Admin Panel</a>
    <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <!-- Navbar links -->
    
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="index7.php">gestion de livreur</a>
        </li> 
        <li class="nav-item">
          <a class="nav-link" href="delih.php">historique de livraison</a>
        </li> 
      </ul>
        
    </div>
    
  
  </nav>

<h1 align="center"> deliveries history</h1>
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
            <td>        <form action="annuler7.php" method="get">
                              <input type="hidden" id="id" name="id" value="'.$row["id"].'">
                              
                 <input type="submit" value="annuler livraison"> 
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

 
 </body>
 </html>