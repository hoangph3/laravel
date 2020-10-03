@extends('users.layout')
@section('content')
<h2>Sent</h2>
<table class="styled-table">
<thead>
    <tr>
        <th>From</th>
        <th>To</th>
        <th width=500>Content</th>
        <th width="150">Time</th>
        <th width="200">Action</th>
    </tr>
</thead>
<tbody>
@foreach ($messages as $message)
    <tr>
        <td>{{ $message->sender }}</td>
        <td>{{ $message->receiver }}</td>
        <td>{{ $message->content }}</td>
        <td>{{ $message->time }}</td>
        <td>
        <form action="{{ route('messages.destroy',$message->id) }}" method="POST">
            <a class="w3-button w3-white w3-border w3-round-large" href="{{ route('messages.edit',$message->id) }}">Edit</a>
            @csrf
            @method('DELETE')
            <button type="submit" class="w3-button w3-white w3-border w3-round-large">Delete</button>
        </form>
        </td>
    </tr>
@endforeach
</tbody>
</table>
{!! $messages->links() !!}

<h2>Inbox</h2>
<table class="styled-table">
<thead>
    <tr>
        <th>From</th>
        <th>To</th>
        <th width=500>Content</th>
        <th width="150">Time</th>
        <th width="200">Action</th>
    </tr>
</thead>
<tbody>
@foreach ($inbox as $ib)
    <tr>
        <td>{{ $ib->sender }}</td>
        <td>{{ $ib->receiver }}</td>
        <td>{{ $ib->content }}</td>
        <td>{{ $ib->time }}</td>
        <td>
            <button class="w3-button w3-white w3-border w3-round-large w3-disabled">Edit</button>
            <button class="w3-button w3-white w3-border w3-round-large w3-disabled">Delete</button>
        </td>
    </tr>
@endforeach
</tbody>
</table>
{!! $inbox->links() !!}

@endsection