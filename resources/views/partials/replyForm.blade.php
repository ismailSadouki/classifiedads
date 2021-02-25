<form method="post" action="/comment/reply">
    @csrf
    <div class="form-group">
        <div class="input-group md-3">
            <input type="text" name="content" class="form-control" placeholder="" >
            <div class="input-group-prepend">
                <button class="btn btn-outline-secondary" type="submit">رد</button>
            </div>
            <input type="hidden" name="ad_id" value="{{$ad->id}}">
            <input type="hidden" name="parent_id" value="{{$comment->id}}">
        </div>
    </div>
</form>     