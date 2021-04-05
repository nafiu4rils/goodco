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
  <a href="{{url('/')}}" class="w3-bar-item w3-button" style="font-weight:bolder;">Home</a>
  @else
  <a href="{{('login')}}" class="w3-bar-item w3-button" style="font-weight:bolder;text-decoration:none;">Login</a>
  @if (Route::has('register'))
  <a href="{{('register')}}" class="w3-bar-item w3-button" style="font-weight: bolder;text-decoration:none;">Register</a>
     @endif
   @endauth
    @endif
  <a href="/service" class="w3-bar-item w3-button" style="font-weight:bolder;text-decoration: none;">Services</a>
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
     <h1  class="w3-animate-right w3-center"><u>Register Here</u></h1>
     <p class="w3-animate-right w3-center">Fill in your Information to Register</p>  
</div>


  <div class="w3-border" style="background-color:grey;width:auto;" class="w3-mobile">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="background-color:black;">
                <div class="card-header" style="background-color:blue;color:white;font-weight:bolder;text-align:center;">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" style="text-decoration:none;">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right" style="color:white;font-weight:bolder;">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right" style="color:white;font-weight:bolder;">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right" style="color:white;font-weight:bolder;">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right" style="color:white;
                            font-weight:bolder;">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary" style="font-weight:bolder;">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="w3-border w3-mobile" style="height:300px;width:auto;">
  <h1  class="w3-animate-right w3-center"><u>Head Quarters</u></h1>
   <p class="w3-animate-zoom" align="center" style="font-weight:bolder;">
     Head quarters staff should register at their office and Login 
   </p>
</div>
<div class="w3-border w3-mobile" style="height:300px;width:auto;">
  <img src="/img/images2.jpeg" height="300" width="1366" class="w3-mobile">
</div>
<div class="w3-border w3-mobile" style="height:300px;width:auto;">
  <h1  class="w3-animate-right w3-center"><u>Sweden office </u></h1>
   <p class="w3-animate-zoom" align="center" style="font-weight:bolder;">
     staffs in sweden should register at their office and Login
   </p>
</div>
<div class="w3-border w3-mobile" style="height:300px;width:auto;">
  <img src="/img/images3.jpeg" height="300" width="1366" class="w3-mobile">
</div>
<div class="w3-border w3-mobile" style="height:300px;width:auto;">
  <h1  class="w3-animate-right w3-center"><u>London office</u></h1>
   <p class="w3-animate-zoom" align="center" style="font-weight:bolder;">
     staffs in London should register at their office and Login
   </p>
</div>
<div class="w3-border w3-mobile" style="height:300px;width:auto;">
  <img src="/img/images4.jpeg" height="300" width="1366" class="w3-mobile">
</div>
<div class="w3-border w3-mobile" style="height:300px;width:auto;">
  <h1  class="w3-animate-right w3-center"><u>Canada office</u></h1>
   <p class="w3-animate-zoom" align="center" style="font-weight:bolder;">
      staffs in canada should register at their office and Login
   </p>
</div>
<div class="w3-border w3-mobile" style="height:300px;width:auto;">
  <img src="/img/images5.jpeg" height="300" width="1366" class="w3-mobile">
</div>
<div class="w3-border w3-mobile" style="height:300px;width:auto;">
  <h1  class="w3-animate-right w3-center"><u>Netherlands office</u></h1>
   <p class="w3-animate-zoom" align="center" style="font-weight:bolder;">
      staffs in Netherlands should register at their office and Login
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
       <a href="/aboutus" style="color:white;text-decoration:underline;font-weight:bolder;">About Us</a>|
       <a href="/service" style="color:white;text-decoration:underline;font-weight:bolder;">Services</a>|
       <a href="/contactus" style="color:white;text-decoration:underline;font-weight:bolder;">Contact Us</a>
    </p>
    <br>
    <p style="color:white;text-align:center;font-weight:bolder;">Copy Right &copy 2021 </p>
</footer>

</body>
</html>
