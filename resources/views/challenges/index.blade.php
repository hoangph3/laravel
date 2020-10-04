@extends('users.layout')
@section('content')
@if(session('level')==1)
<h2>Create Challenge</h2>
<form class="w3-container" action="{{ route('postChallenge') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="w3-container">
        <input class="w3-input w3-border" required="true" style="width:100%;" type="file" name="fileUpload" value="">
    </div><br/>
    <div class="w3-container">
        <label for="suggest">Suggestion</label>
        <textarea class="w3-input w3-border" required="true" name="suggest" style="width:100%" rows="5" cols="50" placeholder="Write your hint.."></textarea>
    </div><br/>
    <div class="w3-container">
        <input class="w3-button w3-right w3-teal" type="submit" name="up" value="Upload &raquo;">
    </div>
</form>
@endif
<h2>Your Challenge</h2>
<table class="styled-table">
      <thead>
        <tr>
          <th>Your Hint</th>
          <th width="50"></th>
        </tr>
      </thead>
      <tbody>
    @foreach ($challenges as $challenge)
      <tr>
          <td>{{ $challenge->suggest }}</td>
          <td><a href="{{ route('solveInterface', $challenge->name) }}" class="w3-button w3-white w3-border w3-round-large">Submit</a></td>
      </tr>
    @endforeach
      </tbody>
</table>
{!! $challenges->links() !!}
@endsection
