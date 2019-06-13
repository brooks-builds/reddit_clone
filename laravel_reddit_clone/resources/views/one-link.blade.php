@extends('layout')

@section('main')
    <h2><a href="{{$link->link}}">{{$link->title}}</a></h2>

    <h2>Comments</h2>
    <ul>
        @foreach($comments as $comment)
            <li>{{$comment->text}} by {{$comment->name}}</li>
        @endforeach
    </ul>
@endsection