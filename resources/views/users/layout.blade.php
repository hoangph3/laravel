<!DOCTYPE html>
<html lang="en">
<head>
<title>Viettel Cyber Security</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/w3.css')}}">
<link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">

<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
</head>
<body>

<div class="header">
  <h1>Viettel Cyber Security</h1>
  <p>BigData and Machine Learning</p>
</div>

<ul>
  <li><a href="{{ route('users.index') }}">Home</a></li>
  <li><a href="{{ route('messages.index') }}">Message</a></li>
  <li><a href="{{ route('assignment') }}">Assignment</a></li> <!-- goi route theo ten assignment -->
  <li><a href="{{ route('challenge') }}">Challenge</a></li>
  <div class="navbar">
    <a href="{{ route('logout') }}" class="right">Log out</a>
  </div>
</ul>

<div class="row">
  <div class="side">
    <h2>About Me</h2>
    <h5>Photo of me:</h5>
    <img src="{{asset('/css/hack.png')}}" width="250px" height="250px">
    <h5>While hack we dev - While dev we hack</h5>
  </div>
  <div class="main">
    @yield('content')
  </div>
</div>

<div class="footer">
  <h2>Contact me</h2>
  <p>Viettel Cyber Security, 41st Floor, Keangnam 72 Landmark Building, Pham Hung Str., Nam Tu Liem Dist., Hanoi</p>
</div>

</body>
</html>
