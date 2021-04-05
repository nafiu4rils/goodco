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
<div class="w3-border w3-mobile" style="height:1900px;width:auto;background-image:url('/img/images2.jpeg');">

<center><div class="w3-border" style="background-color:black;width:500px;">


  <div align="right">
  	<a href="{{ route('crud.index') }}" class="btn btn-default"  style="background-color:blue;color:white;font-weight:bolder;">Back</a>
  </div>
  <br>

  <form method="post"  action="{{ route('crud.update',$data->id) }}" enctype="multipart/form-data">
  	   
  	  @csrf
    @method('PATCH')

    <div>
   <label style="color:white;font-weight:bolder;">Customer ID</label>     
   <div class="">
       <input type="text" name="customerid" value="{{$data->customerid}}">
   </div>   
   </div>
   <br>
   <br>

   <div>
   <label style="color:white;font-weight:bolder;">Firstname</label>     
   <div class="">
       <input type="text" name="firstname" value="{{$data->firstname}}">
   </div>   
   </div>
   <br>
   <br>

   <div>
   <label style="color:white;font-weight:bolder;">Middlename</label>    
   <div class="">
       <input type="text" name="middlename" value="{{$data->middlename}}">
   </div>   
   </div>
   <br>
   <br>

   <div>
   <label style="color:white;font-weight:bolder;">Lastname</label>    
   <div class="">
       <input type="text" name="lastname" value="{{$data->lastname}}">
   </div>   
   </div>
   <br>
   <br>

   <div>
   <label style="color:white;font-weight:bolder;">Email</label>     
   <div class="">
       <input type="text" name="email" value="{{$data->email}}">
   </div>   
   </div>
   <br>
   <br>

   <div>
   <label style="color:white;font-weight:bolder;">Phone No</label>    
   <div class="">
       <input type="text" name="phoneno" value="{{$data->phoneno}}">
   </div>   
   </div>
   <br>
   <br>

   <div>
   <label style="color:white;font-weight:bolder;">Address</label>     
   <div class="">
       <input type="text" name="address" value="{{$data->address}}">
   </div>   
   </div>
   <br>
   <br>

    <div>
   <label style="color:white;font-weight:bolder;">Purpose</label>     
   <div class="">
       <input type="text" name="purpose" value="{{$data->purpose}}">
   </div>   
   </div>
   <br>
   <br>

   <div>
   <label style="color:white;font-weight:bolder;">Date</label>    
   <div class="">
       <input type="text" name="date" value="{{$data->date}}">
   </div>   
   </div>
   <br>
   <br>

      <div>
   <label style="color:white;font-weight:bolder;">Time In</label>     
   <div class="">
       <input type="text" name="timein" value="{{$data->timein}}">
   </div>   
   </div>
   <br>
   <br>

      <div>
   <label style="color:white;font-weight:bolder;">Time Out</label>    
   <div class="">
       <input type="text" name="timeout" value="{{$data->timeout}}">
   </div>   
   </div>
   <br>
   <br>

   <div>
   <label style="color:white;font-weight:bolder;">Staff Username</label>    
   <div class="">
   <input type="text" name="staffusername" value="{{$data->staffusername}}">
   </div>   
   </div>
   <br>
   <br>

   <div>
   <label style="color:white;font-weight:bolder;">Staff ID</label>    
   <div class="">
   <input type="text" name="staffid" value="{{$data->staffid}}">
   </div>   
   </div>
   <br>
   <br>

  <input type="submit" name="edit" class="btn btn-primary" value="Edit" />

  </form></center>
</div></center>

<div class="w3-border" style="height:600px;width:auto;background-color:darkblue;margin-top:0px;">
  
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

