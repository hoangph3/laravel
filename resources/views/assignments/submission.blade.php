@extends('users.layout')
@section('content')
<h2>Show Submissions</h2>
<div class="w3-container">
    <label for="assignment">Assignment</label>
    <input class="w3-input w3-border" type="text" name="assignment" style="width:100%;" value="{{ $assignment }}" readonly>
</div>
    <table class="styled-table">
    <thead>
        <tr>
            <th>Username</th>
            <th>File name</th>
            <th>Time Submit</th>
            <th>Download</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($submits as $submit)
        <tr>
            <td>{{ $submit->username }}</td>
            <td>{{ $submit->filename }}</td>
            <td>{{ $submit->time }}</td>
            <td><a href="{{ route('downloadSolution',[$assignment, $submit->filename]) }}">{{ $submit->filename }}</a></td>
        </tr>
    @endforeach
    </tbody>
</table>
@endsection