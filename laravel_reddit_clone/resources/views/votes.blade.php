<form action="/links/{{$link->id}}/upvote" method="POST">
    @csrf
    <button>up</button>
</form>
{{$link->votes}}
<form action="/links/{{$link->id}}/downvote" method="POST">
    @csrf
    <button>down</button>
</form>