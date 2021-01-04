<!DOCTYPE html>
<html lang="en">
<head>
  
    <title>Document</title>
   <link href="css.css" rel="stylesheet">
</head>
<body style="background-color:lightblue;">
   <table>
       <tr> <td><img src="../img/logo.png" alt="banner sportnews" width="400" height="250"></td>
      
     <td>
   <div id="Registercontainer">
  <div class="RegForm">
    <h1> Register With SportNews</h1>
    <div id="back_glob">
      <div id="back_form">
        <form method="POST">
          <label for="name">FULL NAME</label>
          <input type="text" name="name" id="name" required  />
          <br/>
          <label for="phonenumber">PHONE NUMBER</label>
          <input type="tel" name="phonenumber" id="phonenumber" maxlength="8" minlength="8" placeholder="12-345-678" required />
          <br/>
          <label for="email">EMAIL ADDRESS</label>
          <input id="email" name="email" type="text" pattern=".+@gmail.com|.+@esprit.tn" required  />
          <br/>
          <label for="vehicl">DELIVERY VEHICLE  </label>
          <div  class="custom-select" style="width:200px;">
            <select name="vehicl" type="text" id="vehicl" required >
            <option>car</option>
             <option>truck</option>
             <option>motorcycle</option>
              </select>
        </div>
        <br/>
          <label for="pwd">CREATE PASSWORD</label>
          <input name="pwd" type="password" id="pwd"required />
          <br/>
          <label for="avatar">Enter driver's license</label>

<input type="file"
       id="avatar" name="avatar"
       accept="image/png, image/jpeg" required >  
          <input type="submit" name="valid" value="REGISTER" />
        </form>
      </div>
    </div>
  </div>
  </td></tr>

   </table>
    <script>function verif() {var phonenumber = document.querySelector('#phonenumber').value;
    if (phonenumber.substring(0, 1) != '7' || phonenumber.length != 8) {
      alert('fill out correctly phone number')
    };
    }
    </script>
</body>
</html>

<?php
$conn = new mysqli("localhost","root","","sportnews");
	if($conn->connect_error){
		die("Connection Failed!".$conn->connect_error);
	}
if (isset($_POST["name"])&&isset($_POST["pwd"])){
 $sql = "INSERT into livreur  (name,email,pwd,vehicule,phone,photo) VALUES ('".$_POST["name"]."','".$_POST["email"]."','".$_POST["pwd"]."','".$_POST["vehicl"]."','".$_POST["phonenumber"]."','".$_POST["avatar"]."') ";
 if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
  header("location:index.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
} 
}
$conn->close();
?>
 