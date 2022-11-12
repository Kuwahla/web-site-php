<!DOCTYPE html>
<html lang="en">
<head>
<title>Mike Provenzano</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">


<link rel="stylesheet" href="#"> <!-- add bootstrap or my own style sheets later? -->
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body, h1,h2,h3,h4,h5,h6 {font-family: "Montserrat", sans-serif}
.w3-row-padding img {margin-bottom: 12px}
/* Set the width of the sidebar to 120px */
.w3-sidebar {width: 120px;background: #222;}
/* Add a left margin to the "page content" that matches the width of the sidebar (120px) */
#main {margin-left: 120px}
/* Remove margins from "page content" on small screens */
@media only screen and (max-width: 600px) {#main {margin-left: 0}}
</style>


</head>
<body class="w3-black">

<!-- Icon Bar (Sidebar - hidden on small screens) -->
<nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center">
  <!-- Avatar image in top left corner -->
  <img src="/pics/profile.jpg" style="width:100%" alt="Mike's profile photo">
  <a href="#" class="w3-bar-item w3-button w3-padding-large w3-black">
    <i class="fa fa-home w3-xxlarge"></i>
    <p>HOME</p>
  </a>
  <a href="#about" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-user w3-xxlarge"></i>
    <p>ABOUT</p>
  </a>
  <a href="#photos" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-eye w3-xxlarge"></i>
    <p>PORTFOLIO</p>
  </a>
  <!--<a href="#contact" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-envelope w3-xxlarge"></i>
    <p>CONTACT</p>
  </a>-->
</nav>

<!-- Navbar on small screens (Hidden on medium and large screens) -->
<div class="w3-top w3-hide-large w3-hide-medium" id="myNavbar">
  <div class="w3-bar w3-black w3-opacity w3-hover-opacity-off w3-center w3-small">
    <a href="#" class="w3-bar-item w3-button" style="width:25% !important">HOME</a>
    <a href="#about" class="w3-bar-item w3-button" style="width:25% !important">ABOUT</a>
    <a href="#photos" class="w3-bar-item w3-button" style="width:25% !important">PORTFOLIO</a>
<!--    <a href="#contact" class="w3-bar-item w3-button" style="width:25% !important">CONTACT</a> -->
  </div>
</div>

<!-- Page Content -->
<div class="w3-padding-large" id="main">
  <!-- Header/Home -->
  <header class="w3-container w3-padding-32 w3-center w3-black" id="home">
    <h1 class="w3-jumbo"><span class="w3-hide-small">I'm</span> Mike.</h1>
    <p>Software Developer / Software Engineer / Blockchain Developer</p>
    <img src="/pics/profile.jpg"  alt="Mike's profile photo" class="w3-image" width="496" height="554">
  </header>

  <!-- About Section -->
  <div class="w3-content w3-justify w3-text-grey w3-padding-32" id="about">
    <h2 class="w3-text-light-grey">Mike Provenzano</h2>
    <hr style="width:200px" class="w3-opacity">
    <p>Mike is a computer science student and expects to graduate in the fall of 2023. He seeks to work with others toward creating or upgrading enterprise software while giving value to all stakeholders. He feels more confident in backend development but is willing to grow to the team's needs.
    <br><br>Mike's drive to return to programming was rekindled by his years as an ESL (English as a Second Language) teacher. He has lived and taught in China and South Korea since February 2017. He uses what he has learned in Web Development to create small web apps to teach his students.<br><br>
    <strong><a href="3kList/index.html" target="_blank">"English in 15 Weeks!"</a></strong> is one such app he has made for his more advanced students. It breaks down the 3,000 most used words in English into small lists of review & search lessons for his students to study.<br><br>
    After making this simple web app and discovering the <a href="https://www.uopeople.edu/" target="_blank">University of the People</a>, he was motivated to change his career path toward Software Developer / Software Engineer / Blockchain Developer.

    </p>
    <h3 class="w3-padding-16 w3-text-light-grey">My Skills</h3>
    <p class="w3-wide">Web Design</p>
    <div class="w3-white">
      <div class="w3-dark-grey" style="height:28px;width:75%"></div>
    </div>
    <p class="w3-wide">Godot Game Engine</p>
    <div class="w3-white">
      <div class="w3-dark-grey" style="height:28px;width:65%"></div>
    </div>
    <p class="w3-wide">Android Studio</p>
    <div class="w3-white">
      <div class="w3-dark-grey" style="height:28px;width:60%"></div>
    </div><br>
    

    <button class="w3-button w3-light-grey w3-padding-16 w3-section">
      <a href="/pics/internResume.pdf" target="_blank"><i class="fa fa-download"></i> Download Resume</a>
    </button>
  </div>

  <!-- Portfolio Section -->
  <div class="w3-padding-32 w3-content" id="photos">
  <div class="w3-third">
    <h2 class="w3-text-light-grey">Food Decision App</h2>
    <hr style="width:200px" class="w3-opacity">

    <a href="https://play.google.com/store/apps/details?id=solo.miketheappsmith.fooddecisionapp" target="_blank"><img src="/pics/FDA.png" style="width:64;height:64;"  alt="Logo for Food Decision App"></a> 

    <button class="w3-button w3-light-grey w3-padding-16 w3-section">
      <a href="https://github.com/Mike-Proven/My_First_Published_App" target="_blank">APP's CODE</a>
    </button>

</div><div class="w3-third">
    <h2 class="w3-text-light-grey">Certificates</h2>
    <hr style="width:200px" class="w3-opacity">
    <p><a href="https://www.freecodecamp.org/certification/fccefe88fbf-9406-49ac-a8cc-8f11e4a77d19/javascript-algorithms-and-data-structures" target="_blank"><img src="/pics/jsCert.PNG" style="width:90%"  alt="Mike's certificate for JavaScript"></a></p>
  <p><a href="/pics/blockchainDevCert.pdf" target="_blank"><img src="/pics/blockchainDevCert.png" style="width:90%"  alt="Mike's certificate for Blockchain Developer"></a></p>
  <p><img src="/pics/WebDevCert.jpg" style="width:90%"  alt="Mike's certificate for Web Developer"></p>  
</div>

  <!-- Contact Section 
  <div class="w3-padding-16 w3-content w3-text-grey" id="contact"> -->
  <div class="w3-third">
    <h2 class="w3-text-light-grey">Contact Me</h2>
    <hr style="width:200px" class="w3-opacity">

    <div class="w3-section">
      <p><i class="fa fa-map-marker fa-fw w3-text-white w3-xxlarge w3-margin-right"></i>Portland, OR. US &<br>South Korea, Seoul, Dongdaemun</p>
      <p><i class="fa fa-phone fa-fw w3-text-white w3-xxlarge w3-margin-right"></i> Phone: (US, +1) 901-290-3499</p>
      <p><i class="fa fa-envelope fa-fw w3-text-white w3-xxlarge w3-margin-right"> </i> Email: <a href="mailto:cs.mike.pro@gmail.com">cs.mike.pro@gmail.com</a></p>
      <a href="https://www.linkedin.com/in/michael-provenzano-398a7a253?trk=people-guest_people_search-card" target="_blank"><i class="fa fa-linkedin w3-hover-opacity fa-fw w3-text-white w3-xxlarge"></i></a> 
      <a href="https://github.com/Mike-Proven" target="_blank"><i class="fa fa-github w3-hover-opacity fa-fw w3-text-white w3-xxlarge"></i></a>
      <p class="w3-medium">Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank" class="w3-hover-text-green">w3.css</a></p>
    </div>
  </div></div>
  </div>

  


<!-- END PAGE CONTENT -->
</div>

</body>
</html>
