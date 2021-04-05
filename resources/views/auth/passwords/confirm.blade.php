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
  <a href="/service" class="w3-bar-item w3-button" style="font-weight:bolder;">Services</a>
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
       <h1  class="w3-animate-right w3-center" style="font-size:30px;">My Good Company Web Application</h1>
     <h1  class="w3-animate-right w3-center"><u>Confirm Email</u></h1>
     <p class="w3-animate-right w3-center">Confirm  your Email below</p>  
</div>

<div class="w3-border" style="background-image:url('/img/images2.jpeg');width:auto;" class="w3-mobile">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="background-color:black;">
                <div class="card-header" style="background-color:blue;color:white;font-weight:bolder;text-align:center;">{{ __('Confirm Password') }}</div>

                <div class="card-body">
                    {{ __('Please confirm your password before continuing.') }}

                    <form method="POST" action="{{ route('password.confirm') }}" style="text-decoration:none;">
                        @csrf

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right" style="color:white;font-weight:bolder;>{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary" style="color:white;font-weight:bolder;>
                                    {{ __('Confirm Password') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>




</body>
</html>
