
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="/css/w3.css">
 <link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
</head>
<body>

<div class="w3-border" style="height:100px;width:auto;background-color:black;">
  <p style="color:white;text-align:center;font-weight:bolder;"><br> CUSTOMER OFFICE APPLICATION PORTAL </p>
</div>
<div class="w3-border" style="height:300px;width:auto;background-color:brown;">
  <br>
  <br>
  <p class="w3-animate-right" style="color:white;font-weight:bolder;">Welcome to the Customer application portal</p>
  <br>
     <br>
    <p class="w3-animate-left" style="color:white;font-weight:bolder;">This is where you add a customer or client that has an appointment with our organization.</p>
     </div>
     <div class="w3-border" style="height:70px;width:auto;background-color:grey;">
                         @guest
                             <a href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                
                                    <a  href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                        <a href="#" style="color:white;font-weight:bolder;">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                           <br>
                           <br>
                    <a href="{{ route('logout') }}"
                      onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();" style="color:white;font-weight:bolder;">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
<div class="w3-border" style="height:120px;width:auto;background-color:grey;">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
</div>


<div class="w3-row w3-mobile">
<div class="w3-border w3-mobile" style="height:1600px;width:auto;"> 

<a href="{{ route('crud.create') }}" class="btn btn-success">Add Customer</a>

@if($message = Session::get('success'))
    <div class="alert alert-success">
      <p>{{$message}}</p>
    </div> 
@endif


<div class="w3-mobile" style="width:100%;">
  <table class="w3-table  w3-collapse w3-hoverable w3-striped " width="100%" >
      <tr class="w3-hover-green">
        <th col="6%">Customer ID</th>
        <th col="6%">First<br>name</th>
        <th col="6%">Middle<br>name</th>
        <th col="6%">Last<br>name</th>
        <th col="6%">Email</th>
        <th col="6%">Phone</th>
        <th col="6%">Addr</th>
        <th col="6%">Purpose</th>
        <th col="6%">Date</th>
        <th col="6%">Time <br>In</th>
        <th col="6%">Time Out</th>
        <th col="6%">Staff</th>
        <th col="6%">Staff<br>ID</th>
        <th col="20%">Action</th>
      </tr>
         @foreach($data as $row)
          <tr class="w3-hover-red">
            <td>{{$row->customerid}}</td>
            <td>{{$row->firstname}}</td>
            <td>{{$row->middlename}}</td>
            <td>{{$row->lastname}}</td>
            <td>{{$row->email}}</td>
            <td>{{$row->phoneno}}</td>
            <td>{{$row->address}}</td>
            <td>{{$row->purpose}}</td>
            <td>{{$row->date}}</td>
            <td>{{$row->timein}}</td>
            <td>{{$row->timeout}}</td>
            <td>{{$row->staffusername}}</td>
            <td>{{$row->staffid}}</td>
            <td>
             <a href="{{ route('crud.show',$row->id) }}" class="btn btn-primary">Show</a>
             <a href="{{ route('crud.edit',$row->id) }}" class="btn btn-warning">Edit</a>
            <form action="{{ route('crud.destroy',$row->id) }}" method="post">
              
              @csrf
             @method('DELETE')

            <button type="submit" class="btn btn-danger">
              Delete
            </button>

             </form>
            </td>

          </tr>
      @endforeach


     </table>
 {!!$data->links() !!}
</div>

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
