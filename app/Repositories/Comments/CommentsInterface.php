<?php

namespace App\Repositories\Comments;

interface CommentsInterface
{

    public function add($request);


    public function addReply($request);


}

?>