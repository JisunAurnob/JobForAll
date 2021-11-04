@extends('layouts.app')
@section('content')

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
    background: url('http://i.imgur.com/Eor57Ae.jpg') no-repeat fixed center center;
    background-size: cover;
    font-family: Arial, Helvetica, sans-serif;
}

.logo {
    width: 80px;
    height: 36px;
    
    margin: 30px auto;
}

.textred {
  color: red;
}

.login-block {
    width: 320px;
    padding: 20px;
    background: #fff;
    border-radius: 3px;
    border-top: 5px solid #2eb82e;
    margin: 0 auto;
}

.login-block h1 {
    text-align: center;
    color: #000;
    font-size: 18px;
    text-transform: uppercase;
    margin-top: 0;
    margin-bottom: 20px;
}

.login-block input {
    width: 100%;
    height: 42px;
    box-sizing: border-box;
    border-radius: 5px;
    border: 1px solid #ccc;
    margin-bottom: 20px;
    font-size: 14px;
    font-family: Arial, Helvetica, sans-serif;
    padding: 0 20px 0 50px;
    outline: none;
}

.login-block input#username {
    background: #fff url('http://i.imgur.com/u0XmBmv.png') 20px top no-repeat;
    background-size: 16px 80px;
}

.login-block input#username:focus {
    background: #fff url('http://i.imgur.com/u0XmBmv.png') 20px bottom no-repeat;
    background-size: 16px 80px;
}

.login-block input#password {
    background: #fff url('http://i.imgur.com/Qf83FTt.png') 20px top no-repeat;
    background-size: 16px 80px;
}

.login-block input#password:focus {
    background: #fff url('http://i.imgur.com/Qf83FTt.png') 20px bottom no-repeat;
    background-size: 16px 80px;
}

.login-block input:active, .login-block input:focus {
    border: 1px solid #ff656c;
}

.login-block button {
    width: 100%;
    height: 40px;
    background-color: #2eb82e;
    box-sizing: border-box;
    border-radius: 5px;
    border: none;
    color: white;
    
    text-transform: uppercase;
    font-size: 14px;
    font-family: Arial, Helvetica, sans-serif;
    outline: none;
    cursor: pointer;
    opacity: 0.9;
}

.login-block button:hover {
    opacity: 1;
}



</style>
</head>
<body>

<form action="{{route('login')}}" method="post">
  {{csrf_field()}}

 
<div class="logo"></div>
<div class="login-block">
    <h1>Login</h1>
  

   

   
    <input type="text" name="username" value="" placeholder="Username" id="username" />
    @error('username')
    <span class="textred"> {{$message}}</span>
    @enderror
    <input type="password" name="password" value="" placeholder="Password" id="password" />
    @error('password')
    <span class="textred"> {{$message}}</span>
    @enderror

    <span class="textred">@if(!empty($errmsg)){{$errmsg}}@endif</span>

    <button>LOGIN</button>
</div>
  
 
</form>

</body>
</html>
@endsection 
