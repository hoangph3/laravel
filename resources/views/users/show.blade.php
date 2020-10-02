@extends('users.layout')
@section('content')
<h2 style="text-align:left;float:left;" >View Details</h2><br/><br/><br/>

<p>Username: 
{{ $user->username }}

<p>Password:
{{ $user->password }}

<p>Fullname: 
{{ $user->fullname }}

<p>Email: 
{{ $user->email }}

<p>Phone: 
{{ $user->phone }}


<form action="" method="POST">
    <a class="w3-button w3-border" href="">Send email</a>
</form>
     
@endsection