@extends('users.layout')

@section('content')

<h2>Update Student</h2>
<form class="w3-container" method="POST" action="{{ route('users.store') }}">
    @csrf
    <div class="w3-container">
        <label for="username">Username</label>
        <input required="true" class="w3-input w3-animate-input" type="text" style="width:50%" id="username" name="username"><br/> 
    </div>
    <div class="w3-container">
        <label for="password">Password</label>
        <input required="true" class="w3-input w3-animate-input" type="password" style="width:50%" id="password" name="password" ><br/>
    </div>
    <div class="w3-container">
        <label for="fullname">Full name</label>
        <input required="true" class="w3-input w3-animate-input" type="text" style="width:50%" id="fullname" name="fullname" ><br/> 
    </div>
    <div class="w3-container">
        <label for="email">Email</label>
        <input class="w3-input w3-animate-input" type="email" style="width:50%" name="email" ><br/>
    </div>
    <div class="w3-container">
        <label for="phone">Phone</label>
        <input class="w3-input w3-animate-input" type="text" style="width:50%" id="phone" name="phone" ><br/>
    </div>
    <div class="w3-container">
        <button class="w3-button w3-right w3-teal">Submit &raquo;</button>
    </div>
   
@endsection