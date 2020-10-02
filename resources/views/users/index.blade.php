@extends('users.layout')
@section('content')

    <h2 style="text-align:left;float:left;" >Student List</h2>
    <a style="text-align:right;float:right;" href="{{ route('users.create') }}" 
    class="w3-bar-item w3-button w3-dark-grey w3-button w3-hover-black w3-left-align" >New Student<i class="w3-padding fa fa-pencil"></i></a>
    <table class="styled-table">
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
                    <form action="{{ route('users.destroy',$user->id) }}" method="POST">
                        <a class="w3-button w3-border" href="{{ route('users.show',$user->id) }}">Show</a>
                        <a class="w3-button w3-border" href="{{ route('users.edit',$user->id) }}">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="w3-button w3-border">Delete</button>
                    </form>
                </td>
            </tr>
    @endforeach
        </tbody>
    </table>
    {!! $users->links() !!}
@endsection
