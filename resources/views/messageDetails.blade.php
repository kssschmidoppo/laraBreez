@extends('master')

@section ('inc.search')


@section('content')

<h2>Message Details</h2>
<br>
<h3>{{$message->title}}</h3>

<p>{{$message->content}}</p>


<form action="/posts/{{$message->id}}" method="post">
    @csrf
    @method('delete')
    <button class="btn" type="submit">Delete</button>
</form>

@endsection