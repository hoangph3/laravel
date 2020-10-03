@extends('users.layout')
@section('content')
<h2>Message</h2>

<form method="post" action="{{ route('messages.store') }}">
    @csrf
    <div class="w3-container">
        <label for="sender">From</label>
        <input required="true" type="text" class="w3-input" style="width:100%" name="sender" value="{{ session('username') }}" readonly>
    </div><br/>
    <div class="w3-container">
        <label for="receiver">To</label>
        <input required="true" type="text" class="w3-input" style="width:100%" name="receiver" value="">
    </div><br/>
    <div class="w3-container">
        <label for="content">Content</label>
        <textarea name="content" class="w3-input" style="width:100%" rows="10" cols="75" placeholder="Write something.."></textarea>
    </div><br/>
    <div class="w3-container">
        <input type="submit" class="w3-button w3-right w3-teal" name="message" value="Send &raquo"/>
    </div>
</form>

@endsection