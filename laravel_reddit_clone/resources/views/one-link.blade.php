@extends('layout')

@section('main')
    <h2><a href="{{$link->link}}">{{$link->title}}</a></h2>
    @include('votes', ['link' => $link, 'redirectTo' => '/{{$link->id}}'])

    <h2>Comments</h2>
    <ul>
        @foreach($comments as $comment)
            <li>{{$comment->text}} by {{$comment->name}}</li>
        @endforeach
    </ul>

    <h3>Add a comment</h3>
    <form action="/comments?linkid={{$link->id}}" method="POST">
        @csrf
        <label for="comment-text">
            <input type="text" name="text" id="comment-text">
        </label>
        <div>
            <button>Add Comment</button>
        </div>
    </form>
@endsection