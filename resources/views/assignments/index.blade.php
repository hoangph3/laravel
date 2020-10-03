@extends('users.layout')
@section('content')
@if(session('level')==1)
<h2>Create Assignment</h2>
<form class="w3-container" action="{{ route('postAssignment') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="w3-container">
        <input class="w3-input w3-border" type="file" name="fileUpload" value="">
    </div><br/>
    <div class="w3-container">
        <input class="button w3-right" type="submit" name="up" value="Upload &raquo;">
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

		</tbody>
	  </table>
@endsection
