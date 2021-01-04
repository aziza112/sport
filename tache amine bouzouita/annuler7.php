<?php
ob_start();
include 'config.php';
$sql = "DELETE FROM orders WHERE id= '".$_GET["id"]."'      ";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}


header('location:delih.php');
exit();
?>
