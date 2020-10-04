@extends('users.layout')
@section('content')
<h2>Upload Your Solution</h2>
<form class="w3-container" action="{{route('postSolution', $foldername)}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="w3-container">
        <label for="assignment">Your Assignment</label>
        <input class="w3-input w3-border" type="text" name="assignment" style="width:100%;" value="{{ $foldername }}" readonly>
    </div><br/>
    <div class="w3-container">
        <input class="w3-input w3-border" type="file" name="fileUpload" value=""><br/>
    </div>
    <div class="w3-container">
        <input class="w3-button w3-right w3-teal" type="submit" name="up" value="Upload &raquo;">
    </div>
</form>
@endsection
