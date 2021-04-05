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
     <h1  class="w3-animate-right w3-center"><u>ABOUT US</u></h1>
     <p class="w3-animate-right w3-center">My Good  Company Web Application is a company that is into Training,Consultancy,Conferences and Event planning and software developments and web developments.</p>  
</div>
<div class="w3-border w3-mobile" style="height:300px;width:auto;">
  <img src="/img/Germany.png" height="300" width="1366" class="w3-mobile">
</div>
<div class="w3-border w3-mobile" style="height:300px;width:auto;">
  <h1  class="w3-animate-right w3-center"><u>Germany</u></h1>
   <p class="w3-animate-zoom" align="center" style="font-weight:bolder;">
      Every mid year ,around june ,we do normally do a get together party and also have a nice treats with colleagues from all other branch offices from swden , London, canada , Netherlands and also get to familiarize with both old staffs and new staffs amongst us.
   </p>
</div>
<div class="w3-border w3-mobile" style="height:300px;width:auto;">
  <img src="/img/Sweden.png" height="300" width="1366" class="w3-mobile">
</div>
<div class="w3-border w3-mobile" style="height:300px;width:auto;">
     <h1  class="w3-animate-right w3-center"><u>Sweden </u></h1>
   <p class="w3-animate-zoom" align="center" style="font-weight:bolder;">
      Our staffs in sweden do have monthly fun by playing video games in the game room, having some fresh fruits, soft drinks and barbeque to go along with it.
   </p>
</div>
<div class="w3-border w3-mobile" style="height:300px;width:auto;">
  <img src="/img/London.png" height="300" width="1366" class="w3-mobile">
</div>
<div class="w3-border w3-mobile" style="height:300px;width:auto;">
       <h1  class="w3-animate-right w3-center"><u>London </u></h1>
   <p class="w3-animate-zoom" align="center" style="font-weight:bolder;">
       Our staffs in London do have monthly fun by going to watch the Engglis Premiership Football games, having some fresh fruits, soft drinks and nice continental dishes at one of the best hotel in London,England.
   </p>
</div>
<div class="w3-border w3-mobile" style="height:300px;width:auto;">
  <img src="/img/canada2.jpeg" height="300" width="1366" class="w3-mobile">
</div>
<div class="w3-border w3-mobile" style="height:300px;width:auto;">
       <h1  class="w3-animate-right w3-center"><u>Canada </u></h1>
   <p class="w3-animate-zoom" align="center" style="font-weight:bolder;">
      Our staffs in canada also do have monthly fun by skiing in weekends,going to watch movie as a team ,colleague and one family.
   </p>
</div>
<div class="w3-border w3-mobile" style="height:300px;width:auto;">
<img src="/img/Netherlands.png" height="300" width="1366" class="w3-mobile">
</div>
<div class="w3-border w3-mobile" style="height:300px;width:auto;">
       <h1  class="w3-animate-right w3-center"><u>Netherlands </u></h1>
   <p class="w3-animate-zoom" align="center" style="font-weight:bolder;">
      Our staffs in  Netherlands are another set of team that you will love to work with and have fun with. They have fun by doing  sports every end of the months and also organizing parties to catch their fun.
   </p>
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
