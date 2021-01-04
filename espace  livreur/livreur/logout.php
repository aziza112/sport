<?php
session_start();
session_destroy();

 

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <style>  .button{background-color: #971f69;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}</style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color:lightblue;">
   <table>
       <tr> <td><img src="../img/logo.png" alt="banner sportnews" width="400" height="250"></td>
       <td>       <input type="hidden"> </td>
     <td><h1 align ="left" color="blue" >you have been successfully logged out</h1></td></tr>

   </table>
   
    <a href="index.php" class="button" >Go back</a>
</body>
</html>