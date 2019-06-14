@extends('layout')

@section('main')
    <h2>Add Link</h2>
    @if($username)
        <div>
            <form action="/links" method="POST">
                @csrf
                <div>
                    <label for="link">URL you want to share</label>
                </div>
                <div>
                    <input type="url" name="link" id="link">
                    @if($errors->has('link'))
                        @foreach($errors->get('link') as $message)
                            <span>{{ $message }}</span>
                        @endforeach
                    @endif
                </div>

                <div>
                    <label for="title">Title for your link</label>
                </div>
                <div>
                    <input type="text" name="title" id="title">
                    @if($errors->has('title'))
                        @foreach($errors->get('title') as $message)
                            <span>{{ $message }}</span>
                        @endforeach
                    @endif
                </div>

                <div>
                    <button>Create Link</button>
                </div>
        </div>
    @else
        <div>
            <p>You must be logged in to add a link</p>
        </div>
    @endif

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