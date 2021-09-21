@extends ('master')
@section ('inc.search')
@section ('inc.loggin')
@section ('content')

    <h2> Recent messages </h2>
    <ul>
        @if($messages->isNotEmpty())
            @foreach ($messages as $message)  
                <li>
                <h3><a href="/posts/{{$message->id}}">{{$message->title}}</a></h3>
                    {{$message->content}}<br>
                    {{$message->created_at->diffForHumans()}}            
                </li>
            @endforeach
        @else 
                <li>
                    <p>No posts found</p>
                </li>
        @endif
    </ul>
    <br>
    <h2>Create new message </h2>
    <div class="row">
        <form action="/create" method="post">
            <div class="col-4 sm">
            <input class="form-control me-2type" type="text" name="title" placeholder="Title">
            </div>
            <br>
            <div class="col-4 sm">
            <input class="form-control me-2type" type="text" name="content" placeholder="Content">
            </div>
            @csrf
            <button class="btn" type="submit">Submit</button>
        </form>
        </div>

@endsection

