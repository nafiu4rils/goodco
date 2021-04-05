<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="/css/w3.css">
        <link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
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
  <a href="{{route('login')}}" class="w3-bar-item w3-button w3-hide-small" style="font-weight:bolder;text-decoration:none;">Login</a>
  @if (Route::has('register'))
  <a href="{{route('register')}}" class="w3-bar-item w3-button w3-hide-small" style="font-weight:bolder;text-decoration:none;">Register</a>
   @endif
   @endauth
    @endif
  <a href="/service" class="w3-bar-item w3-button w3-hide-small" style="font-weight:bolder;text-decoration:none;">Services</a>
  <a href="/aboutus" class="w3-bar-item w3-button w3-hide-small" style="font-weight:bolder;text-decoration:none;">About Us</a>
  <a href="/contactus" class="w3-bar-item w3-button w3-hide-small" style="font-weight:bolder;text-decoration:none;">Contact Us</a>
  <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="myFunction()">&#9776;</a>
</div>

<div id="demo" class="w3-bar-block w3-red w3-hide w3-hide-large w3-hide-medium">  @if (Route::has('login'))
   @auth
  <a href="{{url('/home')}}" class="w3-bar-item w3-button" style="font-weight:bolder;">Home</a>
  @else
  <a href="{{('login')}}" class="w3-bar-item w3-button" style="font-weight:bolder;text-decoration:none;">Login</a>
  @if (Route::has('register'))
  <a href="{{('register')}}" class="w3-bar-item w3-button" style="font-weight: bolder;text-decoration:none;">Register</a>
     @endif
   @endauth
    @endif
  <a href="/service" class="w3-bar-item w3-button" style="font-weight:bolder;text-decoration:none;">Services</a>
    <a href="/aboutus" class="w3-bar-item w3-button" style="font-weight:bolder;text-decoration:none;">About Us</a>
  <a href="/contactus" class="w3-bar-item w3-button" style="font-weight:bolder;text-decoration:none;">Contact Us</a>
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
     <h1  class="w3-animate-right w3-center" style="font-size:30px;">My Good Company Web Application </h1>
     <h1  class="w3-animate-right w3-center"><u>CONTACT US</u></h1>
     <p class="w3-animate-right w3-center">
      Our Headquarter is at Germany,we have other branch offices in sweden,london,Canada and Netherland.
       </p>  
</div>
<div class="w3-border" style="height:700px;width:auto;background-color:grey;">
  <center><form action="/contactus"  method="POST">
    @csrf
  
    <div class="w3-border" style="height:700px;width:500px;background-color:black;">
      <h1 style="color:white;font-weight:bolder;text-align:center;">CONTACT US</h1>
 @if(session()->has('message'))
<div class="alert alert-success" role="alert">
    <strong>Success :</strong>{{session()->get('message')}}
  </div>
  @endif
  
      <label for="fullname" style="color:white;font-weight:bolder;">Fullnames</label> 
      <div class="">
          <input type="text" name="fullname" value="{{old('fullname')}}">
          <div style="color:white;">{{$errors->first('fullname')}}</div>
      </div>
      <label for="email" style="color:white;font-weight:bolder;">Email</label> 
      <div class="">
          <input type="text" name="email" value="{{old('email')}}">
          <div style="color:white;">{{$errors->first('email')}}</div>
      </div>
    <label for="message" name="message" style="color:white;font-weight:bolder;">Message</label>

<br>
<textarea name="message" rows="10" cols="30"  width="fixed">{{old('message')}}</textarea>
<div style="color:white;">{{$errors->first('message')}}</div>
        <br>
       <input type="SUBMIT" name="SUBMIT" value="Send Message" style="color:white;background-color:blue;border-radius:20px;font-weight:bolder;">

 
  </div>


  </form></center>
</div>
<div class="w3-border w3-mobile" style="height:300px;width:auto;">
  <h1  class="w3-animate-right w3-center"><u>Head Quarters contact</u></h1>
   <p class="w3-animate-zoom" align="center">
     <b>Company :</b> My Good Company Web Application <br>
     <b>Address :</b> Oderbergerstrasse in Berlin, Germany<br>
     <b>Phone no:</b> +49200211345343<br>
   </p>
</div>
<div class="w3-border w3-mobile" style="height:300px;width:auto;">
  <img src="/img/contactus1.jpg" height="300" width="1366" class="w3-mobile">
</div>
<div class="w3-border w3-mobile" style="height:300px;width:auto;">
  <h1  class="w3-animate-right w3-center"><u>Sweden office contact</u></h1>
   <p class="w3-animate-zoom" align="center">
     <b>Company :</b> My Good Company Web Application<br>
     <b>Address :</b>Vasagatan in Gothenburg,Sweden<br>
     <b>Phone no:</b>+462391002872 <br>
   </p>
</div>
<div class="w3-border w3-mobile" style="height:300px;width:auto;">
  <img src="/img/contactus2.png" height="300" width="1366" class="w3-mobile">
</div>
<div class="w3-border w3-mobile" style="height:300px;width:auto;">
  <h1  class="w3-animate-right w3-center"><u>London office contact</u></h1>
   <p class="w3-animate-zoom" align="center">
     <b>Company :</b> My Good Company Web Application <br>
     <b>Address :</b> Brick Lane,London United Kingdom <br>
     <b>Phone no:</b> +446283522002<br>
   </p>
</div>
<div class="w3-border w3-mobile" style="height:300px;width:auto;">
  <img src="/img/contactus5.png" height="300" width="1366" class="w3-mobile">
</div>
<div class="w3-border w3-mobile" style="height:300px;width:auto;">
  <h1  class="w3-animate-right w3-center"><u>Canada office contact</u></h1>
   <p class="w3-animate-zoom" align="center">
     <b>Company :</b> My Good Company Web Application <br>
     <b>Address :</b> 724 Lyon St S<br>
     <b>Phone no:</b> +1-653-413-3427<br>
   </p>
</div>
<div class="w3-border w3-mobile" style="height:300px;width:auto;">
  <img src="/img/contactus6.jpg" height="300" width="1366" class="w3-mobile">
</div>
<div class="w3-border w3-mobile" style="height:300px;width:auto;">
  <h1  class="w3-animate-right w3-center"><u>Netherland office contact</u></h1>
   <p class="w3-animate-zoom" align="center">
     <b>Company :</b> My Good Company Web Application <br>
     <b>Address :</b> Parkstraat(park street)<br>
     <b>Phone no:</b> +31608342923<br>
   </p>
</div>
<div class="w3-border w3-mobile" style="height:300px;width:auto;">
  <img src="/img/contactus7.jpg" height="300" width="1366" class="w3-mobile">
</div>
<footer class="w3-border"style="height:600px;width:auto;background-color:darkblue;">
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
</footer>


</body>
</html>
