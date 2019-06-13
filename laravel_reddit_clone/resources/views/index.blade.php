@extends('layout')

@section('main')
    @isset($username)
        <p>Welcome {{ $username }}</p>
    @endisset

    @foreach($links as $link)
        <div>
            <button>up</button>
            {{ $link->votes }}
            <button>down</button>
            <a href="{{ $link->link }}">{{ $link->title }}</a>
            <a href="/comments/{{ $link->id }}">(comments)</a>
        </div>
    @endforeach
@endsection