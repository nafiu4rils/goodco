<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="/css/w3.css">
    <link rel="stylesheet" type="text/css" href="/css/Bootstrap.css">
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
     <h1  class="w3-animate-right w3-center"><u>Verify Email</u></h1>
     <p class="w3-animate-right w3-center">Verify  your Email below</p>  
</div>

<div class="w3-border" style="background-image:url('/img/images2.jpeg');width:auto;" class="w3-mobile">

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="background-color:black;">
                <div class="card-header"  style="background-color:blue;color:white;font-weight:bolder;text-align:center;">{{ __('Verify Your Email Address') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}" style="font-weight:bolder;">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
