@extends('users.layout')
@section('content')
<h2>Solve Challenge</h2>
<form method="post" action="{{ route('solveChallenge', $folder)}}">
    @csrf
    <div class="w3-container">
        <label for="hint">Suggestion</label>
        <textarea name="hint" class="w3-input w3-border" style="width:100%" rows="3" cols="50" placeholder="{{$hint}}" readonly></textarea>
    </div><br/>
    <div class="w3-container">
        <label for="answer">Your answer</label>
        <input required="true" type="text" class="w3-input w3-border" style="width:100%" name="answer" placeholder="Write your answer ..">
    </div><br/>
    <div class="w3-container">
        <input type="submit" class="w3-button w3-right w3-teal" name="submit" value="Submit &raquo;"/>
    </div><br/>
</form>
@if (session('alert'))
    <div class="alert alert-success">
        <h2 style="color:red; font-weight:bold;">{{ session('alert') }}</h2>
    </div>
@endif
@endsection
