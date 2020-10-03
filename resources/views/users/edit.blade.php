@extends('users.layout')

@section('content')

<h2>Edit Student</h2>
<form class="w3-container" method="POST" action="{{ route('users.update',$user->id) }}">
    @csrf
    @method('PUT')
    <div class="w3-container">
        <label for="username">Username</label>
        @if (session('level')==1)
        <input required="true" class="w3-input " type="text" style="width:100%" id="username" name="username" value="{{ $user->username }}"><br/> 
        @else
        <input required="true" class="w3-input " type="text" style="width:100%" id="username" name="username" value="{{ $user->username }}" readonly><br/> 
        @endif
    </div>
    <div class="w3-container">
        <label for="password">Password</label>
        <input required="true" class="w3-input " type="password" style="width:100%" id="password" name="password" value="{{ $user->password }}"><br/>
    </div>
    <div class="w3-container">
        <label for="fullname">Full name</label>
        @if (session('level')==1)
        <input required="true" class="w3-input " type="text" style="width:100%" id="fullname" name="fullname" value="{{ $user->fullname }}"><br/> 
        @else
        <input required="true" class="w3-input " type="text" style="width:100%" id="fullname" name="fullname" value="{{ $user->fullname }}" readonly><br/> 
        @endif
    </div>
    <div class="w3-container">
        <label for="email">Email</label>
        <input class="w3-input " type="email" style="width:100%" name="email" value="{{ $user->email }}"><br/>
    </div>
    <div class="w3-container">
        <label for="phone">Phone</label>
        <input class="w3-input " type="text" style="width:100%" id="phone" name="phone" value="{{ $user->phone }}" ><br/>
    </div>
    <div class="w3-container">
        <button class="w3-button w3-right w3-teal">Submit &raquo;</button>
    </div>
</form>
@endsection