<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@section('title', 'Laravel Reddit Clone')</title>
</head>
<body>
    <h1><a href="/">Laravel Reddit Clone</a></h1>
    @if($username)
        <p>Welcome {{ $username }}</p>
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button>Log Out</button>
        </form>
    @else
        <a href="/home">login</a>
    @endif

    @section('main')
    @show
</body>
</html>