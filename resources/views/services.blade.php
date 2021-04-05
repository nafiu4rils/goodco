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
       <h1  class="w3-animate-right w3-center" style="font-size:30px;">My Good Company Web Application</h1>
     <h1  class="w3-animate-right w3-center"><u>SERVICES WE OFFER</u></h1>
<ul>
  <li class="w3-animate-right w3-center">Trainings</li>
    <li class="w3-animate-right w3-center">Consultancy</li>
        <li class="w3-animate-right w3-center">Conferences</li>
          <li class="w3-animate-right w3-center">Event planning</li>
        </ul>
</div>
<div class="w3-row-padding">

  <div class="w3-quarter">
    <div class="w3-border" style="height:350px;width:300px;margin-top:20px;">
      <h5 class="w3-animate-zoom"  style="font-weight:bolder;text-align:center;">Trainings</h5>
      <img src="/img/Trainings1.jpeg" height="150" width="200" style="margin-left:40px;margin-top:20px;" class="w3-animate-zoom">
        <p class="w3-animate-zoom" align="center">Our Trainings helps and develops you with the necessary skills and knowledge in any area or field.we give you the best trainings to make you stand out from the crowd</p>
    </div>
    
  </div>
    <div class="w3-quarter">
         <div class="w3-border" style="height:350px;width:300px;margin-top:20px;">
          <h5 class="w3-animate-zoom"  style="font-weight:bolder;text-align:center;">Consultancy</h5>
           <img src="/img/consultancy.jpeg" height="150" width="200" style="margin-left:40px;margin-top:20px;" class="w3-animate-zoom">
         <p class="w3-animate-zoom" align="center">We are the best to consult for any information regarding informations in the education sector,health sector,IT sector and engineering sector.</p>
    </div>
  </div>
    <div class="w3-quarter">
          <div class="w3-border" style="height:350px;width:300px;margin-top:20px;">
            <h5 class="w3-animate-zoom" style="font-weight:bolder;text-align:center;">Conferences</h5>
             <img src="/img/Conferences1.jpeg" height="150" width="200" style="margin-left:40px;margin-top:20px;" class="w3-animate-zoom">
            <p class="w3-animate-zoom"  align="center">We conduct conferences to help professionals meet , discuss and also understand and know more about latest services and innovations.</p>
    </div>
  </div>
     <div class="w3-quarter">
          <div class="w3-border" style="height:350px;width:300px;margin-top:20px;">
            <h5 class="w3-animate-zoom" style="font-weight:bolder;text-align:center;">Events planning</h5>
             <img src="/img/Events2.jpeg" height="150" width="200" style="margin-left:40px;margin-top:20px;" class="w3-animate-zoom">
            <p class="w3-animate-zoom" align="center"> we are here and ready to help you plan your events such as weddings, parties,corporate events and advertisements.</p>
    </div>
  </div>

</div>

<div class="w3-border w3-mobile" style="height:300px;width:auto;margin-top:20px;">
  <img src="/img/Trainings3.jpeg" height="300" width="1366" class="w3-mobile">
</div>

<div class="w3-row-padding">

  <div class="w3-quarter">
    <div class="w3-border" style="height:350px;width:300px;margin-top:20px;">
      <h5 class="w3-animate-zoom"  style="font-weight:bolder;text-align:center;">IT Trainings</h5>
      <img src="/img/Programming.jpeg" height="150" width="200" style="margin-left:40px;margin-top:20px;" class="w3-animate-zoom">
        <p class="w3-animate-zoom" align="center">
          <ul class="w3-animate-zoom">
            <li>Programming</li>
            <li>Software and Web Development</li>
            <li>AI and Machine Learning</li>
            <li>Game Development</li>
          </ul>
        </p>
    </div>
    
  </div>
    <div class="w3-quarter">
         <div class="w3-border" style="height:350px;width:300px;margin-top:20px;">
          <h5 class="w3-animate-zoom"  style="font-weight:bolder;text-align:center;">Education Trainings</h5>
           <img src="/img/teaching.jpeg" height="150" width="200" style="margin-left:40px;margin-top:20px;" class="w3-animate-zoom">
         <p class="w3-animate-zoom" align="center">
           <ul class="w3-animate-zoom">
             <li>Tertiary</li>
             <li>Hight School</li>
             <li>Primary</li>
             <li>Kindergaten</li>
           </ul>
         </p>
    </div>
  </div>
    <div class="w3-quarter">
          <div class="w3-border" style="height:350px;width:300px;margin-top:20px;">
            <h5 class="w3-animate-zoom" style="font-weight:bolder;text-align:center;">Health Trainings</h5>
             <img src="/img/health2.jpeg" height="150" width="200" style="margin-left:40px;margin-top:20px;" class="w3-animate-zoom">
            <p class="w3-animate-zoom"  align="center">
              <ul class="w3-animate-zoom">
                <li>Medical</li>
                <li>Dentistry</li>
                <li>Nursing</li>
                <li>Urology</li>
              </ul>
            </p>
    </div>
  </div>
     <div class="w3-quarter">
          <div class="w3-border" style="height:350px;width:300px;margin-top:20px;">
            <h5 class="w3-animate-zoom" style="font-weight:bolder;text-align:center;">Engineering Trainings</h5>
             <img src="/img/engineer2.jpeg" height="150" width="200" style="margin-left:40px;margin-top:20px;" class="w3-animate-zoom">
            <p class="w3-animate-zoom" align="center"> 
             <ul class="w3-animate-zoom">
               <li>Civil Engineering</li>
               <li>Electrical Engineering</li>
               <li>Mechanical Engineering</li>
               <li>Computer Engineering</li>
             </ul>
            </p>
    </div>
  </div>

</div>
<div class="w3-border w3-mobile" style="height:300px;width:auto;margin-top:20px;">
  <img src="/img/Consultancy2.jpeg" height="300" width="1366" class="w3-mobile">
</div>

<div class="w3-row-padding">

  <div class="w3-quarter">
    <div class="w3-border" style="height:350px;width:300px;margin-top:20px;">
      <h5 class="w3-animate-zoom"  style="font-weight:bolder;text-align:center;">IT Consultancy</h5>
      <img src="/img/techconsul.jpg" height="150" width="200" style="margin-left:40px;margin-top:20px;" class="w3-animate-zoom">
        <p class="w3-animate-zoom" align="center">
          <ul class="w3-animate-zoom">
            <li>in software development </li>
            <li>in programming</li>
            <li>in AI and Machine Learning</li>
            <li>in Games development</li>
          </ul>
        </p>
    </div>
    
  </div>
    <div class="w3-quarter">
         <div class="w3-border" style="height:350px;width:300px;margin-top:20px;">
          <h5 class="w3-animate-zoom"  style="font-weight:bolder;text-align:center;">Education Consultancy</h5>
           <img src="/img/Educonsul.jpg" height="150" width="200" style="margin-left:40px;margin-top:20px;" class="w3-animate-zoom">
         <p class="w3-animate-zoom" align="center">
          <ul class="w3-animate-zoom">
            <li>For tertiary level</li>
            <li>For High school level</li>
            <li>For Primary school level</li>
            <li>For Kindergaten level</li>
          </ul>
         </p>
    </div>
  </div>
    <div class="w3-quarter">
          <div class="w3-border" style="height:350px;width:300px;margin-top:20px;">
            <h5 class="w3-animate-zoom" style="font-weight:bolder;text-align:center;">Health Consultancy</h5>
             <img src="/img/Hconsul.jpg" height="150" width="200" style="margin-left:40px;margin-top:20px;" class="w3-animate-zoom">
            <p class="w3-animate-zoom"  align="center">
          <ul class="w3-animate-zoom">
            <li>in Medicals</li>
            <li>in denstistry</li>
            <li>in nursing</li>
            <li>in urology</li>
          </ul>
            </p>
    </div>
  </div>
     <div class="w3-quarter">
          <div class="w3-border" style="height:350px;width:300px;margin-top:20px;">
            <h5 class="w3-animate-zoom" style="font-weight:bolder;text-align:center;">Engineering Consultancy</h5>
             <img src="/img/Econsul.jpg" height="150" width="200" style="margin-left:40px;margin-top:20px;" class="w3-animate-zoom">
            <p class="w3-animate-zoom" align="center"> 
          <ul class="w3-animate-zoom">
            <li>in Mechanical Engineering</li>
            <li>in Electrical Engineering</li>
            <li>in Computer Engineering</li>
            <li>in Civil Engineering</li>
          </ul>
            </p>
    </div>
  </div>

</div>

<div class="w3-border w3-mobile" style="height:300px;width:auto;margin-top:20px;">
  <img src="/img/confbanner.jpeg" height="300" width="1366" class="w3-mobile">
</div>

<div class="w3-row-padding">

  <div class="w3-quarter">
    <div class="w3-border" style="height:350px;width:300px;margin-top:20px;">
      <h5 class="w3-animate-zoom"  style="font-weight:bolder;text-align:center;">IT Conferences</h5>
      <img src="/img/techconf.jpeg" height="150" width="200" style="margin-left:40px;margin-top:20px;" class="w3-animate-zoom">
        <p class="w3-animate-zoom" align="center">
          <ul class="w3-animate-zoom">
            <li>For software development</li>
            <li>For Ai and Machine Learning</li>
            <li>For programming</li>
            <li>For games development</li>
          </ul>
        </p>
    </div>
    
  </div>
    <div class="w3-quarter">
         <div class="w3-border" style="height:350px;width:300px;margin-top:20px;">
          <h5 class="w3-animate-zoom"  style="font-weight:bolder;text-align:center;">Game Conferences</h5>
           <img src="/img/gameconf.jpeg" height="150" width="200" style="margin-left:40px;margin-top:20px;" class="w3-animate-zoom">
         <p class="w3-animate-zoom" align="center">
          <ul class="w3-animate-zoom">
            <li>For Indie games</li>
            <li>For VR and AR games</li>
            <li>For Mobile games</li>
            <li>For AI games</li>
          </ul>
         </p>
    </div>
  </div>
    <div class="w3-quarter">
          <div class="w3-border" style="height:350px;width:300px;margin-top:20px;">
            <h5 class="w3-animate-zoom" style="font-weight:bolder;text-align:center;">Health Conferences</h5>
             <img src="/img/Hconf.jpg" height="150" width="200" style="margin-left:40px;margin-top:20px;" class="w3-animate-zoom">
            <p class="w3-animate-zoom"  align="center">
          <ul class="w3-animate-zoom">
            <li>For Medical doctors</li>
            <li>For Nurses</li>
            <li>For Dentistry</li>
            <li>For Urologist</li>
          </ul>
            </p>
    </div>
  </div>
     <div class="w3-quarter">
          <div class="w3-border" style="height:350px;width:300px;margin-top:20px;">
            <h5 class="w3-animate-zoom" style="font-weight:bolder;text-align:center;">Engineering Conferences</h5>
             <img src="/img/engconf.jpeg" height="150" width="200" style="margin-left:40px;margin-top:20px;" class="w3-animate-zoom">
            <p class="w3-animate-zoom" align="center"> 
          <ul class="w3-animate-zoom">
            <li>For Civil Engineering</li>
            <li>For Electrical Engineering</li>
            <li>For Computer Engineering</li>
            <li>For Mechanical Engineering</li>
          </ul>
            </p>
    </div>
  </div>
</div>

<div class="w3-border w3-mobile" style="height:300px;width:auto;margin-top:20px;">
  <img src="/img/Events.jpeg" height="300" width="1366" class="w3-mobile">
</div>

<div class="w3-row-padding">

  <div class="w3-quarter">
    <div class="w3-border" style="height:350px;width:300px;margin-top:20px;">
      <h5 class="w3-animate-zoom"  style="font-weight:bolder;text-align:center;">Entertainment</h5>
      <img src="/img/movie.jpg" height="150" width="200" style="margin-left:40px;margin-top:20px;" class="w3-animate-zoom">
        <p class="w3-animate-zoom" align="center">
          <ul class="w3-animate-zoom">
            <li>Movies</li>
            <li>Music</li>
            <li>Videography</li>
            <li>Editing</li>
          </ul>
        </p>
    </div>
    
  </div>
    <div class="w3-quarter">
         <div class="w3-border" style="height:350px;width:300px;margin-top:20px;">
          <h5 class="w3-animate-zoom"  style="font-weight:bolder;text-align:center;">Weddings </h5>
           <img src="/img/wedding.jpg" height="150" width="200" style="margin-left:40px;margin-top:20px;" class="w3-animate-zoom">
         <p class="w3-animate-zoom" align="center">
          <ul class="w3-animate-zoom">
            <li>Church weddings</li>
            <li>Catholic weddings</li>
            <li>Formal Weddings</li>
            <li>Informal Weddings</li>
          </ul>
         </p>
    </div>
  </div>
    <div class="w3-quarter">
          <div class="w3-border" style="height:350px;width:300px;margin-top:20px;">
            <h5 class="w3-animate-zoom" style="font-weight:bolder;text-align:center;">Party</h5>
             <img src="/img/party.jpg" height="150" width="200" style="margin-left:40px;margin-top:20px;" class="w3-animate-zoom">
            <p class="w3-animate-zoom"  align="center">
          <ul class="w3-animate-zoom">
            <li>Adult party</li>
            <li>Youth party</li>
            <li>Childrens party</li>
            <li>Teenagers party</li>
          </ul>
            </p>
    </div>
  </div>
     <div class="w3-quarter">
          <div class="w3-border" style="height:350px;width:300px;margin-top:20px;">
            <h5 class="w3-animate-zoom" style="font-weight:bolder;text-align:center;">Corporate Events</h5>
             <img src="/img/corporatevent.jpg" height="150" width="200" style="margin-left:40px;margin-top:20px;" class="w3-animate-zoom">
            <p class="w3-animate-zoom" align="center"> 
          <ul class="w3-animate-zoom">
            <li>Trade shows/Expos</li>
            <li>products launching</li>
            <li>Rebranding</li>
            <li>Team Building Events</li>
          </ul>
            </p>
    </div>
  </div>
</div>
<div class="w3-border w3-mobile" style="height:300px;width:auto;margin-top:20px;">
  <img src="/img/bizplan.jpeg" height="300" width="1366" class="w3-mobile">
</div>
<footer class="w3-border"style="height:600px;width:auto;background-color:darkblue;">
      <p style="color:white;text-align:center;font-weight:bolder;"> <br><br>All Right Reserved
      <br><br><br>
      <a href="www.instagram.com"><img src="/img/instagram.png" height="20" width="20"></a>|
      <a href="www.facebook.com"><img src="/img/facebook.png" height="20" width="20"></a>| 
      <a href="www.twitter.com"><img src="/img/twitter.png" height="20" width="20"></a>|
      <a href="www.gmail.com"><img src="/img/Gmail logo.png" height="20" width="20"></a> 
      <br><br>
       <a href="/aboutus">About Us</a>|
       <a href="/service">Services</a>|
       <a href="/contactus">Contact Us</a>
    </p>
    <br>
    <p style="color:white;text-align:center;font-weight:bolder;">Copy Right &copy 2021 </p>
</footer>


</body>
</html>
