<?php
session_start();
if(!isset($_SESSION['username'])){
   header("Location:Login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="./blood_homepage.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
<style>
body,h1,h2,h3,h4,h5 {font-family: "Poppins", sans-serif}
body {font-size:16px;}
.w3-half img{margin-bottom:-6px;margin-top:16px;opacity:0.8;cursor:pointer}
.w3-half img:hover{opacity:1}
.GFG {
			background-color: red;
			color: white ;
			padding: 5px 10px;
			text-align: center;
			display: inline-block;
			font-size: 20px;
			margin: 10px 30px;
			cursor: pointer;
			text-decoration:none;
		}
</style>
<body>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-red w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
  <div class="w3-container">
    <h3 class="w3-padding-64"><b>Helping<br>Hands</b></h3>
  </div>
  <div class="w3-bar-block">
    <a href="#" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Home</a> 
    <a href="#showcase" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">About</a> 
    <a href="#services" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Importance of Donation</a> 
    <a href="#designers" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Place to Donate</a> 
    <a href="#packages" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Services</a> 
    <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Who can I donate too?</a>
    <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Contact</a>
  </div>
</nav>

<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-hide-large w3-red w3-xlarge w3-padding">
  <a href="javascript:void(0)" class="w3-button w3-red w3-margin-right" onclick="w3_open()">☰</a>
  <span>Helping Hands</span>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:340px;margin-right:40px">

<!-- Header -->
  <div class="w3-container" style="margin-top:80px" id="showcase">
    <h1 class="w3-jumbo"><b>Home</b></h1>
    <!-- hr style="width:50px;border:5px solid red" class="w3-round" --> <!--Red line/round -->
  </div>


  <!-- About -->
  <div class="w3-container" id="services" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-red"><b>About</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
    <p>We are a Plasma donation service that focus on what's best for you and your health!</p>
    <p>Plasma is the clear, straw-colored liquid portion of blood that remains after red blood cells, white blood cells, platelets and other cellular components are removed. It is the single largest component of human blood, comprising about 55 percent, and contains water, salts, enzymes, antibodies and other proteins.
    </p>
  </div> 
  <div class="w3-col m4 w3-margin-left">
        <p class="w3-center "><img src="http://localhost/Blood/Images/Logo.png" alt="Blood camps" style="width:100%"></p>
   </div>  
 
 
 <!-- Importance of donation -->
  <div class="w3-container" id="services" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-red"><b>Importance of Donation</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
    <ul>
	<li>The plasma protein therapeutics industry supports volunteerism donation in all of its forms. Source plasma donation and blood donation are critically important activities that contribute to saving lives. Source plasma and recovered plasma are used to produce therapies that treat people with rare, chronic diseases and disorders such as primary immunodeficiency, hemophilia and a genetic lung disease, as well as in the treatment of trauma, burns and shock. Whole blood donations most often are used locally in hospitals for transfusions required during surgery or other medical treatment.</li>
	<br><li>Plasma donation requires a commitment both in the amount of time for each donation and frequency of donation. Typically it takes between one and three hours to donate source plasma, and plasma can be donated twice within a seven day period. Whole blood donation takes less time—under 30 minutes—and donors donate less frequently—no more than once in eight weeks. The programs may fit into a donor's life differently at various times in the donor's life, and are equally important in helping to fulfill a vital medical need.</li>
    </ul>
  </div>
  
  <!-- Donate Blood -->
  <div class="w3-container" id="designers" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-red"><b>Places to Donate</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
    <p>Search for places to donate within your city, for blood camps or nearby hospitals.</p>
    <p><b>We have made sure the lists are uptodate and convinient for your usage!</b></p>
  </div>

  <!-- The city -->
  <div class="w3-row-padding w3-grayscale">
    <div class="w3-col m4 w3-margin-bottom">
      <div class="w3-light-grey">
        <img src="http://localhost/Blood/Images/city.jpg" alt="City" style="width:100%">
        <div class="w3-container">
          <h3>City</h3>
          <p class="w3-opacity">Nearby cities</p>
          <p>Search for Blood/Plasma banks within the given city.</p>
        </div>
      </div>
    </div>
    <div class="w3-col m4 w3-margin-bottom">
      <div class="w3-light-grey">
        <img src="http://localhost/Blood/Images/Plasma.jpg" alt="Blood camps" style="width:100%">
        <div class="w3-container">
          <h3>Blood camps</h3>
          <p class="w3-opacity">Nearby Blood camps</p>
          <p>Search by Blood/Plasma bank names.</p>
        </div>
      </div>
    </div>
    <div class="w3-col m4 w3-margin-bottom">
      <div class="w3-light-grey">
        <img src="http://localhost/Blood/Images/Hospital.jpg" alt="Hospitals" style="width:100%">
        <div class="w3-container">
          <h3>Hospitals</h3>
          <p class="w3-opacity">Nearby Hospitals</p>
          <p>Search for nearby hospitals by their names or by location.</p>
        </div>
      </div>
    </div>
  </div>

  <!-- Packages / Services -->
  <div class="w3-container" id="packages" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-red"><b>Services</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
    <p>The services are provided below and can be searched by:</p>
  </div>

  <div class="w3-row-padding">
    <div class="w3-half w3-margin-bottom">
      <ul class="w3-ul w3-light-grey w3-center">
        <li class="w3-dark-grey w3-xlarge w3-padding-32">Places to Donate</li>
        <li class="w3-padding-16"><a href="https://www.google.com/maps/@24.4852306,54.3609672,15z">City</a></li>
        <li class="w3-padding-16"><a href="https://www.google.com/maps/search/blood+camps/@24.2430874,54.5131931,9z/data=!5m1!1e7">Blood/Plasma camps</a></li>
        <li class="w3-padding-16"><a href="https://www.google.com/maps/search/Hospitals/@24.4852301,54.3468037,15z/data=!3m1!4b1!5m1!1e7">Hospitals</a></li>
        <li class="w3-padding-16"><a href="database.php">User details</a></li>
      </ul>
    </div>
        
    <div class="w3-half">
      <ul class="w3-ul w3-light-grey w3-center">
        <li class="w3-dark-grey w3-xlarge w3-padding-32">Places to Request</li>
        <li class="w3-padding-16"><a href="https://www.google.com/maps/@24.4852306,54.3609672,15z">City</a></li>
        <li class="w3-padding-16"><a href="https://www.google.com/maps/search/blood+camps/@24.2430874,54.5131931,9z/data=!5m1!1e7">Blood/Plasma camps</a></li>
        <li class="w3-padding-16"><a href="https://www.google.com/maps/search/Hospitals/@24.4852301,54.3468037,15z/data=!3m1!4b1!5m1!1e7">Hospitals</a></li>
        <li class="w3-padding-16"><a href="database.php">User details</a></li>
      </ul>
    </div>
  </div>
  
<!-- who can get my blood -->
<div class="w3-light-grey w3-container w3-padding-32" style="margin-top:75px;padding-right:58px"><p class="w3-center"><a href="http://localhost/Blood/who-can-get-my-blood/dist/"><b>Who can I donate my Blood too?</b></a></p></div>


  <!-- Contact -->
  <div class="w3-container" id="contact" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-red"><b>Contact.</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
    <p>Do you any questions to ask us? Fill out the form and fill me in with the details :) We love meeting new people!</p>
    <form action="/action_page.php" target="_blank">
      <div class="w3-section">
        <label>Name</label>
        <input class="w3-input w3-border" type="text" name="Name" required>
      </div>
      <div class="w3-section">
        <label>Email</label>
        <input class="w3-input w3-border" type="text" name="Email" required>
      </div>
      <div class="w3-section">
        <label>Message</label>
        <input class="w3-input w3-border" type="text" name="Message" required>
      </div>
      <button type="submit" class="w3-button w3-block w3-padding-large w3-red w3-margin-bottom">Send Message</button>
    </form>
  <br> <p> <b>You can also meet us at our office </p> <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3630.807897102033!2d54.36385941499565!3d24.49211208422909!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x70a384a3a8bd7431!2sDunkin&#39;%20UAE!5e0!3m2!1sen!2sae!4v1621425033909!5m2!1sen!2sae" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
  <p> Our contact details are : </p>
  <ul>
     <li>
         <p> Email: <a href="mailto:7hrugvedpawar@gmail.com" style="color:red">7hrugvedpawar@gmail.com</a></p>
     </li> 
     <li>
         <p> Phone no: <a href="tel:+91 9003469700” style="color:red">+91 9003469700</a></p><br>
     </li>
  </ul>
</div>

<div class="w3-light-grey w3-container w3-padding-32" style="margin-bottom:50px; padding-right:58px"><p class="w3-center"><a href="logout.php">Logout</a></p></div>

<!-- End page content -->
</div>

<script>
// Script to open and close sidebar
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("myOverlay").style.display = "none";
}

// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}
</script>
</body>
</html>