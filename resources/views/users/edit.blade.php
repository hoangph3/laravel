@extends('users.layout')

@section('content')

<h2>Edit Student</h2>
<form class="w3-container" method="POST" action="{{ route('users.update',$user->id) }}">
    @csrf
    @method('PUT')
    <div class="w3-container">
        <label for="username">Username</label>
        <input required="true" class="w3-input w3-animate-input" type="text" style="width:50%" id="username" name="username" value="{{ $user->username }}"><br/> 
    </div>
    <div class="w3-container">
        <label for="password">Password</label>
        <input required="true" class="w3-input w3-animate-input" type="password" style="width:50%" id="password" name="password" value="{{ $user->password }}"><br/>
    </div>
    <div class="w3-container">
        <label for="fullname">Full name</label>
        <input required="true" class="w3-input w3-animate-input" type="text" style="width:50%" id="fullname" name="fullname" value="{{ $user->fullname }}"><br/> 
    </div>
    <div class="w3-container">
        <label for="email">Email</label>
        <input class="w3-input w3-animate-input" type="email" style="width:50%" name="email" value="{{ $user->email }}"><br/>
    </div>
    <div class="w3-container">
        <label for="phone">Phone</label>
        <input class="w3-input w3-animate-input" type="text" style="width:50%" id="phone" name="phone" value="{{ $user->phone }}" ><br/>
    </div>
    <div class="w3-container">
        <button class="w3-button w3-right w3-teal">Submit &raquo;</button>
    </div>
   
@endsection