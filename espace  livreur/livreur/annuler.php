<?php
session_start();
 
echo $_SESSION["rowid"];
$is=$_SESSION["rowid"];
$conn = new mysqli("localhost","root","","sportnews");
	if($conn->connect_error){
		die("Connection Failed!".$conn->connect_error);
    }
    $sql="UPDATE orders SET `idlivreur`='empty' WHERE `id`= '$is'      ";
    if ($conn->query($sql) === TRUE) {
  echo "delivery annuled succcessfully";
} else {
  echo "Error updating record: " . $conn->error;
}
$conn->close();

header("location: index.php"); 

?>
    