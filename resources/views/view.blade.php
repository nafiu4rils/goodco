<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="/css/w3.css">
	<link rel="stylesheet" type="text/css" href="/css/Bootstrap.css">
</head>
<body>
<div class="w3-border" style="height:100px;width:auto;background-color:black;">
	<p style="color:white;text-align:center;font-weight:bolder;"><br> CUSTOMER OFFICE APPLICATION PORTAL  </p>
</div>
<div class="w3-border" style="height:300px;width:auto;background-color:brown;">
	<br>
	<br>
	<p class="w3-animate-right" style="color:white;font-weight:bolder;">Welcome to the Customer application portal</p>
	<br>
     <br>
		<p class="w3-animate-left" style="color:white;font-weight:bolder;">This is where you add a customer or client that has an appointment with our organization.</p>
</div>
<div class="w3-row w3-mobile">
<div class="w3-border w3-mobile" style="height:1600px;width:auto;background-image:url('/img/images2.jpeg');">	

<div class="jumbotron text-center" style="background-color:black;">
	<div align="right">
		<a href="{{ route('crud.index') }}" class="btn btn-default" style="background-color:blue;color:white;font-weight:bolder;">Back</a>
	</div>
</div>
<br>
<br>
<div class="w3-border" style="background-color:brown;color:white;">
 <h3>Customer ID : {{ $data->customerid }}</h3>
 <h3>Firstname : {{ $data->firstname }}</h3>
  <h3>Middlename : {{ $data->middlename }}</h3>
 <h3>Lastname: {{ $data->lastname }}</h3>
 <h3>Email: {{ $data->email }}</h3>
 <h3>Phone: {{ $data->phoneno }}</h3>
 <h3>Address: {{ $data->address }}</h3>
 <h3>Purpose: {{ $data->purpose }}</h3>
 <h3>Date: {{ $data->date }}</h3>
 <h3>Time In: {{ $data->timein }}</h3>
 <h3>Time Out: {{ $data->timeout }}</h3>
 <h3>Staff Username: {{ $data->staffusername }}</h3>
 <h3>Staff ID: {{ $data->staffid }}</h3>
</div>


<div class="w3-border" style="height:600px;width:auto;background-color:darkblue;margin-top:600px;">
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