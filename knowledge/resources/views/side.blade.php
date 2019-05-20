<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<div class="w3-sidebar w3-bar-block w3-collapse w3-card w3-animate-left" style="width:200px; background-color: #009688;" id="mySidebar">
  <button class="w3-bar-item w3-button w3-large w3-hide-large" onclick="w3_close()">Close &times;</button>
  <a href="home" class="w3-bar-item w3-button" style="color: white;">Home</a>
  <a href="#" class="w3-bar-item w3-button" style="color: white;">About</a>
  <a href="#" class="w3-bar-item w3-button" style="color: white;">Contact</a>
   <a href="loginform" class="w3-bar-item w3-button" style="color: white;">Login</a>
  <a href="form" class="w3-bar-item w3-button" style="color: white;">Signup</a>
  <a href="#" class="w3-bar-item w3-button" style="color: white;">Services</a>
</div>

<div class="w3-main" style="margin-left:200px">
<div class="w3-teal">
  <button class="w3-button w3-teal w3-xlarge w3-hide-large" onclick="w3_open()">&#9776;</button>
  <div class="w3-container">
    <h1>Charity Form</h1>
  </div>
</div>

<div class="w3-container">
  
</div>
   
</div>

<script>
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
}

function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
}
</script>
     
</body>
</html>
