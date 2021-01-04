
<?php

session_start();

$conn = new mysqli("localhost","root","","sportnews");
	if($conn->connect_error){
		die("Connection Failed!".$conn->connect_error);
    };
  
        $sql =  "DELETE FROM livreur WHERE name='".$_SESSION['livreur']."' ";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
  } else {
    echo "Error deleting record: " . $conn->error;
  }
  
  $conn->close();
  session_destroy();
  header("location:index.php");
  ?>