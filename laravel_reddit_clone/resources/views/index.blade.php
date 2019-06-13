@extends('layout')

@section('main')
    <h1>Reddit Clone with Laravel</h1>

    @foreach($links as $link)
        <div>
            <button>up</button>
            {{ $link['votes'] }}
            <button>down</button>
            <a href="{{ $link['link'] }}">{{ $link['text'] }}</a>
            <a href="/comments/{{ $link['id'] }}">(comments)</a>
        </div>
    @endforeach
@endsection