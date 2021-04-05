<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="/css/w3.css">
    </head>
    <body>

<div class="w3-border" style="height:500px;width:auto;">
  <img class="mySlides" src="/img/images2.jpeg" style="width:100%;height:500px;">
  <img class="mySlides" src="/img/images3.jpeg" style="width:100%;height:500px;">
  <img class="mySlides" src="/img/images4.jpeg" style="width:100%;height:500px;">
    <img class="mySlides" src="/img/images5.jpeg" style="width:100%;height:500px;">
  <img class="mySlides" src="/img/images6.jpeg" style="width:100%;height:500px;">
  <img class="mySlides" src="/img/images7.jpeg" style="width:100%;height:500px;">
</div>
<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>
</div>
<div class="w3-border">
<div class="w3-bar w3-red">
  @if (Route::has('login'))
   @auth
  <a href="{{url('/home')}}" class="w3-bar-item w3-button w3-hide-small" style="font-weight:bolder;">Home</a>
   @else
  <a href="{{route('login')}}" class="w3-bar-item w3-button w3-hide-small" style="font-weight:bolder;">Login</a>
  @if (Route::has('register'))
  <a href="{{route('register')}}" class="w3-bar-item w3-button w3-hide-small" style="font-weight:bolder;">Register</a>
   @endif
   @endauth
    @endif
  <a href="/service" class="w3-bar-item w3-button w3-hide-small" style="font-weight:bolder;">Services</a>
  <a href="/aboutus" class="w3-bar-item w3-button w3-hide-small" style="font-weight:bolder;">About Us</a>
  <a href="/contactus" class="w3-bar-item w3-button w3-hide-small" style="font-weight:bolder">Contact Us</a>
  <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="myFunction()">&#9776;</a>
</div>

<div id="demo" class="w3-bar-block w3-red w3-hide w3-hide-large w3-hide-medium">  @if (Route::has('login'))
   @auth
  <a href="{{url('/home')}}" class="w3-bar-item w3-button" style="font-weight:bolder;">Home</a>
  @else
  <a href="{{('login')}}" class="w3-bar-item w3-button" style="font-weight:bolder;">Login</a>
  @if (Route::has('register'))
  <a href="{{('register')}}" class="w3-bar-item w3-button" style="font-weight: bolder;">Register</a>
     @endif
   @endauth
    @endif
  <a href="/service" class="w3-bar-item w3-button" style="font-weight:bolder;">Services</a>
    <a href="/aboutus" class="w3-bar-item w3-button" style="font-weight:bolder;">About Us</a>
  <a href="/contactus" class="w3-bar-item w3-button" style="font-weight:bolder;">Contact Us</a>
</div>
<script>
function myFunction() {
    var x = document.getElementById("demo");
    if (x.className.indexOf("w3-show") == -1){
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>
</div>
<div class="w3-border" style="height:300px;width:auto;">
       <h1  class="w3-animate-right w3-center" style="font-size:30px;"><b><u>My Good Company Web Application</u></b></h1>
     <h1  class="w3-animate-right w3-center">Welcome To My Good Company Web Apllication</h1>
     <p>
       Welcome to My Good Company Web Application. A company that deals with Technology , Trainings, Consultancy, Conferences and Events.
       we are the best in what we do .
     </p>
</div>
<div class="w3-border w3-mobile" style="height:300px;width:auto;">
  <img src="/img/trainings2.jpeg" height="300" width="1366" class="w3-mobile">
</div>
<div class="w3-border" style="height:300px;width:auto;">
       <h1  class="w3-animate-right w3-center" style="font-size:30px;"><b><u>Training Section</u></b></h1>
     <h1  class="w3-animate-right w3-center">Training</h1>
     <p>
       Are you planning to organize training for your current staffs or colleagues or new recruitees in your organization. we are always ready and available to make your training program a success . 
       Contact Us Today .
     </p>
</div>
<div class="w3-border w3-mobile" style="height:300px;width:auto;">
  <img src="/img/consultancy2.jpeg" height="300" width="1366" class="w3-mobile">
</div>
<div class="w3-border" style="height:300px;width:auto;">
       <h1  class="w3-animate-right w3-center" style="font-size:30px;"><b><u>Consultancy Section</u></b></h1>
     <h1  class="w3-animate-right w3-center">Consultancy</h1>
     <p>
       Do you need advise , information,consultation about the latest trends and services in Technology,Education,Health,Business and more...we are here to assist you in all ways. 
       Contact us today.
     </p>
</div>
<div class="w3-border w3-mobile" style="height:300px;width:auto;">
  <img src="/img/consultancy2.jpeg" height="300" width="1366" class="w3-mobile">
</div>
<div class="w3-border" style="height:300px;width:auto;">
       <h1  class="w3-animate-right w3-center" style="font-size:30px;"><b><u>Consultancy Section</u></b></h1>
     <h1  class="w3-animate-right w3-center">Consultancy</h1>
     <p>
       Do you need advise , information,consultation about the latest trends and services in Technology,Education,Health,Business and more...we are here to assist you in all ways. 
       Contact us today.
     </p>
</div>
<div class="w3-border w3-mobile" style="height:300px;width:auto;">
  <img src="/img/Conferences.jpeg" height="300" width="1366" class="w3-mobile">
</div>
<div class="w3-border" style="height:300px;width:auto;">
       <h1  class="w3-animate-right w3-center" style="font-size:30px;"><b><u>Conferences Section</u></b></h1>
     <h1  class="w3-animate-right w3-center">Conferences</h1>
     <p>
       Are you planning to organize your conference such as Games Conferences,Technology Conferences, Education Conferences, Health Conferences and others. we can help you organize any conference you are planning. 
       Contact us today . 
     </p>
</div>
<div class="w3-border w3-mobile" style="height:300px;width:auto;">
  <img src="/img/Eventsnew.jpeg" height="300" width="1366" class="w3-mobile">
</div>
<div class="w3-border" style="height:300px;width:auto;">
       <h1  class="w3-animate-right w3-center" style="font-size:30px;"><b><u>Events Section</u></b></h1>
     <h1  class="w3-animate-right w3-center">Events</h1>
     <p>
        For your Wedding event, Birthday parties,Musical Concert ,Corporate Events we are fully equipped and ready to handle it from start to the end without any issues involved. 
        Contact us today . 
     </p>
</div>
<div class="w3-border" style="height:600px;width:auto;background-color:darkblue;">
       <p style="color:white;text-align:center;font-weight:bolder;"> <br><br>All Right Reserved
      <br><br><br>
      <a href="www.instagram.com"><img src="/img/instagram.png" height="20" width="20"></a>|
      <a href="www.facebook.com"><img src="/img/facebook.png" height="20" width="20"></a>| 
      <a href="www.twitter.com"><img src="/img/twitter.png" height="20" width="20"></a>|
      <a href="www.gmail.com"><img src="/img/Gmail logo.png" height="20" width="20"></a> 
      <br><br>
       <a href="/aboutus" style="color:white;text-decoration:underline;font-weight:bolder;">About Us</a>|
       <a href="/service" style="color:white;text-decoration:underline;font-weight:bolder;">Services</a>|
       <a href="/contactus" style="color:white;text-decoration:underline;font-weight:bolder;">Contact Us</a>
    </p>
    <br>
    <p style="color:white;text-align:center;font-weight:bolder;">Copy Right &copy 2021 </p>
</div>
</div>
</body>
</html>


