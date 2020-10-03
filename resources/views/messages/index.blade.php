@extends('messages.layout')
@section('content')
<h2>Sent</h2>
<table class="styled-table">
<thead>
    <tr>
        <th>From</th>
        <th>To</th>
        <th width=500>Content</th>
        <th width="100">Time</th>
        <th width="200">Action</th>
    </tr>
</thead>
<tbody>
@foreach ($messages as $msg)
    <tr>
        <td>{{ $msg->sender }}</td>
        <td>{{ $msg->receiver }}</td>
        <td>{{ $msg->content }}</td>
        <td>{{ $msg->time }}</td>
        <td>
        <form action="" method="POST">
            <a class="w3-button w3-white w3-border w3-round-large" href="">Edit</a>
            @csrf
            @method('DELETE')
            <button type="submit" class="w3-button w3-white w3-border w3-round-large">Delete</button>
        </form>
        </td>
    </tr>
@endforeach
</tbody>
</table>

<h2>Inbox</h2>
<table class="styled-table">
<thead>
    <tr>
        <th>From</th>
        <th>To</th>
        <th width=500>Content</th>
        <th width="100">Time</th>
        <th width="200">Action</th>
    </tr>
</thead>
<tbody>
@foreach ($messages as $msg)
    <tr>
        <td>{{ $msg->sender }}</td>
        <td>{{ $msg->receiver }}</td>
        <td>{{ $msg->content }}</td>
        <td>{{ $msg->time }}</td>
        <td>
            <button class="w3-button w3-white w3-border w3-round-large w3-disabled">Edit</button>
            <button class="w3-button w3-white w3-border w3-round-large w3-disabled">Delete</button>
        </td>
    </tr>
@endforeach
</tbody>
</table>

@endsection