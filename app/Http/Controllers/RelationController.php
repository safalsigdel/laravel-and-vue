<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Post;
use App\Video;
use Illuminate\Http\Request;

class RelationController extends Controller
{
    public function insertPostComment()
    {
        $post = Post::find(1);
        $comment = Comment::create(['body'=>'second comment for post']);
        $status =$post->comments()->save($comment);
        if ($status) {
            return 'inserted';
        }


    }

    public function insertVideoComment()
    {
        $video = Video::find(1);
        $comment = Comment::create(['body'=>'first video comment']);
        $status = $video->comments()->save($comment);
        if ($status) {
            return 'inserted';
        }


    }

    public function showVideoComment()
    {
        $video = Video::find(1);
        foreach ($video->comments as $comment) {
            echo $comment->body;
        }
    }
    public function showPostComment()
    {
        $post = Post::find(1);
        echo "Comments for Post id".$post->id;
        echo "<br>";
        foreach ($post->comments as $key=> $comment) {
            echo ++$key.' '. $comment->body;
            echo "<br>";
        }
    }
}
