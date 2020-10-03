@extends('users.layout')
@section('content')

<h2 style="text-align:left;float:left;" >Student List</h2>
@if (session('level')==1)
<a style="text-align:right;float:right;" href="{{ route('users.create') }}" 
class="w3-bar-item w3-button w3-dark-grey w3-button w3-hover-black w3-left-align" >New Student<i class="w3-padding fa fa-pencil"></i></a>
<table class="styled-table">
@else
<a style="text-align:right;float:right;" href="{{ route('users.edit',session('id')) }}" 
class="w3-bar-item w3-button w3-dark-grey w3-button w3-hover-black w3-left-align" >Change Info<i class="w3-padding fa fa-pencil"></i></a>
<table class="styled-table">
@endif

        <thead>
            <tr>
                <th>Username</th>
                <th width="250">Action</th>
            </tr>
    </thead>
    <tbody>
@foreach ($users as $user)
        <tr>
            <td>{{ $user->username }}</td>
            <td>
                @if (session('level')==1)
                <form action="{{ route('users.destroy',$user->id) }}" method="POST">
                    <a class="w3-button w3-white w3-border w3-round-large" href="{{ route('users.show',$user->id) }}">Show</a>
                    <a class="w3-button w3-white w3-border w3-round-large" href="{{ route('users.edit',$user->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="w3-button w3-white w3-border w3-round-large">Delete</button>
                </form>
                @else
                    <a class="w3-button w3-white w3-border w3-round-large" href="{{ route('users.show',$user->id) }}">Show</a>
                    <button class="w3-button w3-white w3-border w3-round-large w3-disabled">Edit</button>
                    <button class="w3-button w3-white w3-border w3-round-large w3-disabled">Delete</button>
                @endif
            </td>
        </tr>
@endforeach
    </tbody>
</table>
{!! $users->links() !!}
@endsection
