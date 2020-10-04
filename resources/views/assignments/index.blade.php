@extends('users.layout')
@section('content')
@if(session('level')==1)
@if (session('alert'))
    <script>alert("{{session('alert')}}")</script>
@endif
<h2>Create Assignment</h2>
<form class="w3-container" action="{{ route('postAssignment') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="w3-container">
        <input class="w3-input w3-border" type="file" name="fileUpload" value="">
    </div><br/>
    <div class="w3-container">
        <input class="w3-button w3-right w3-teal" type="submit" name="up" value="Upload &raquo;">
    </div>
</form> 
@endif
<h2>Your Assignment</h2>
    <table class="styled-table">
		<thead>
			<tr>
                <th width="600">Assignment</th>
                <th width="150"></th>
                <th width="50"></th>
			</tr>
		</thead>
		<tbody>
    @foreach ($allfiles as $file)
            <tr>
                <td><a href="{{ route('downloadAssignment', $file->getFileName())}}">{{$file->getFileName()}}</a></td>
                @if(session('level')==1)
                <td><a class="w3-button w3-white w3-border w3-round-large" href="{{route('submission', $file->getFileName())}}">View Submission</a></td>
                @else 
                <td><button class="w3-button w3-white w3-border w3-round-large w3-disabled" href="">View Submission</button></td>
                @endif
                <td><a class="w3-button w3-white w3-border w3-round-large" href="{{route('solution', $file->getFileName())}}">Submit</a></td>
            </tr>
    @endforeach
		</tbody>
      </table>
@endsection
