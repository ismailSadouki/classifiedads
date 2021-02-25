<?php

namespace App\Repositories\Comments;

use App\Models\ {
    Comment,
    Ad
};

class CommentsRepository implements CommentsInterface
{
    protected $comment;

    public function __construct(Comment $comment)
    {
        $this->comment=$comment;
    }

    public function add($request)
    {
        $request->user()->comments()->create($request->all());
    }

    public function addReply($request)
    {
        $request->user()->comments()->create($request->all());
    }

    public function getComments($request)
    {

    }

    public function delete($id)
    {

    }


}
?>