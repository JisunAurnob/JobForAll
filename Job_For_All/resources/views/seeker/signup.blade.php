@extends('layouts.app')
@section('content')

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: black;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  /* padding: 12px; */
  background-color: white;
}


.textred {
  color: red;
}

/* Full-width input fields */
input[type=text], input[type=password], input[type='number'],input[type='date'] {
  width: 30%;
  padding: 8px;
  margin: 2px 0 15px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
  border-radius: 5px;
}


input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
  border-radius: 5px;
}

/* Overwrite default styles of hr */
hr {
  margin-bottom: 25px;
  border-radius: 5px;
  border-top: 5px solid #00b8e6;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #00b8e6;
  color: white;
  padding: 7px 15px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 30%;
  opacity: 0.9;
  border-radius: 5px;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}


</style>
</head>
<body>

<form action="{{route('signup')}}" method="post">
  {{csrf_field()}}

  <div class="container,login-block">
    <h3>Create An Account</h3>
    <hr>

    <label for="name"><b>Name</b></label><br>
    <input type="text" placeholder="Enter your Name" name="name" id="name" >
    @error('name')
    <span class="textred"> {{$message}}</span>
    @enderror
    <br>

    <label for="username"><b>Username</b></label><br>
    <input type="text" placeholder="Enter your Username" name="username" id="username" >
    @error('username')
    <span class="textred"> {{$message}}</span>
    @enderror
    <br>

    <label for="email"><b>Email</b></label><br>
    <input type="text" placeholder="Enter your Email" name="email" id="email" >
    @error('email')
    <span class="textred"> {{$message}}</span>
    @enderror
    <br>

    <label for="phone"><b>Phone Number</b></label><br>
    <input type="text" placeholder="Enter your phone" name="phone" id="phone" >
    @error('phone')
    <span class="textred"> {{$message}}</span><br>
    @enderror
    <br>


    <label for="gender"><b>Gender</b></label>
    <br>
    <input type="radio" id="male" name="gender" value="male">
    <label for="male">Male</label>
    <input type="radio" id="female" name="gender" value="female">
    <label for="female">Female</label>
    <input type="radio" id="other" name="gender" value="other">
    <label for="other">Other</label>
    @error('gender')
    <span class="textred"> {{$message}}</span>
    @enderror
    <br><br>
  

    <label for="dob"><b>Date Of Birth</b></label><br>
    <input type="date" placeholder="Enter your date of birth" name="dob" id="dob" >
    @error('dob')
    <span class="textred"> {{$message}}</span>
    @enderror
    <br>


    <label for="nid"><b>National ID</b></label><br>
    <input type="text" placeholder="Enter your NID" name="nid" id="nid" >
    @error('nid')
    <span class="textred"> {{$message}}</span>
    @enderror
    <br>


    <label for="password"><b>Password</b></label><br>
    <input type="password" placeholder="Enter Password" name="password" id="password" >
    @error('password')
    <span class="textred"> {{$message}}</span>
    @enderror
    <br>

    <label for="password_confirmation"><b>Confirm Password</b></label><br>
    <input type="password" placeholder="Confirm Password" name="password_confirmation" id="password_confirmation" >
    @error('password_confirmation')
    <span class="textred"> {{$message}}</span>
    @enderror
    <br>

    <button type="submit" class="registerbtn">SUBMIT</button>
  </div>
  
 
</form>

</body>
</html>
@endsection 
