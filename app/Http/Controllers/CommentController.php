<?php

namespace App\Http\Controllers;

use App\Repositories\Comments\CommentsInterface;
use Illuminate\Http\Request;
use App\Http\Requests\CommentRequest;

class CommentController extends Controller
{
    protected $comment;

    public function __construct(CommentsInterface $comment)
    {
        $this->middleware('auth',['only'=>['store','reply']]);

        $this->comment=$comment;
    }

    public function store(CommentRequest $request)
    {
        $this->comment->add($request);

        return back();
    }

    public function reply(Request $request)
    {
        $this->comment->addReply($request);

        return back();
    }
}
