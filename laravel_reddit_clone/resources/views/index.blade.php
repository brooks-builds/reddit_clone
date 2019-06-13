@extends('layout')

@section('main')
   @foreach($links as $link)
    <div>
            <hr>
            @include('votes', ['link' => $link])
            <a href="{{ $link->link }}">{{ $link->title }}</a>
            <a href="/comments/{{ $link->id }}">(comments)</a>
            <hr>
        </div>
    @endforeach
@endsection