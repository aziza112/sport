 <?php session_start();?>
 <!DOCTYPE html>
<html>
<body  onload="getLocation()">

<p>Click the button to get your itinerary.</p>

<button onclick="getLocation()">Try It</button>

<p id="demo"></p>

<script>
var x = document.getElementById("demo");

function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else { 
    x.innerHTML = "Geolocation is not supported by this browser.";
  }
}

function showPosition(position) {
  x.innerHTML = "Latitude: " + position.coords.latitude + 
  "<br>Longitude: " + position.coords.longitude;
  var a =position.coords.latitude;
var b =position.coords.longitude;
 window.location.href = 
  `https://www.google.com/maps/dir/?api=1&origin=` + a +' '+ b + `&destination=<?php echo $_SESSION['ad'];?>`;
}
</script>

 <?php echo $_SESSION['ad'];?>
</body>
</html>

