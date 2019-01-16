<?php

namespace App\Http\Controllers;

use App\Model\Reply;

class LikeController extends Controller
{
    public function LikeIt(Reply $reply)
    {
        $reply->like()->create(
            [
                //'user_id'=>auth()->id()
                'user_id' => 1,
            ]
        );
    }

    public function unLikeIt(Reply $reply)
    {
        //$reply->like()->where(['user_id', auth()->id()])->first()->delete();
        $reply->like()->where('user_id', '1')->first()->delete();
    }
}
