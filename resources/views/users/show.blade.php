@extends('users.layout')
@section('content')

<h2 style="text-align:left;float:left;" >View Details</h2>
<a style="text-align:right;float:right;" href="{{ route('message', $user->username) }}" 
class="w3-bar-item w3-button w3-dark-grey w3-button w3-hover-black w3-left-align" >Send Message<i class="w3-padding fa fa-pencil"></i></a>

<form class="w3-container">
    <div class="w3-container">
        <label for="username">Username</label>
        <input required="true" class="w3-input" type="text" style="width:100%" id="username" name="username" value="{{ $user->username }}" readonly><br/> 
    </div>
    <div class="w3-container">
        <label for="password">Password</label>
        <input required="true" class="w3-input" type="text" style="width:100%" id="password" name="password" value="{{ $user->password }}" readonly><br/>
    </div>
    <div class="w3-container">
        <label for="fullname">Full name</label>
        <input required="true" class="w3-input" type="text" style="width:100%" id="fullname" name="fullname" value="{{ $user->fullname }}" readonly><br/> 
    </div>
    <div class="w3-container">
        <label for="email">Email</label>
        <input class="w3-input" type="email" style="width:100%" name="email" value="{{ $user->email }}" readonly><br/>
    </div>
    <div class="w3-container">
        <label for="phone">Phone</label>
        <input class="w3-input" type="text" style="width:100%" id="phone" name="phone" value="{{ $user->phone }}" readonly><br/>
    </div>
</form>

@endsection