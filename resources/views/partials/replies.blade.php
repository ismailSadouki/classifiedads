<ul class="comment-container">
    @foreach ($replies as $reply)
        <li>
            <div class="card bg-light">
                <div class="card-header">
                    <strong>{{$reply->user->name}}</strong>
                </div>
                <div class="card-body">
                    {{$reply->content}}
                </div>
                @include('partials.replies',['replies' => $reply->replies])
            </div>
        </li>
    @endforeach
</ul>