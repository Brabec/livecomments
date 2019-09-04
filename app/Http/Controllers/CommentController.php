<?php

namespace App\Http\Controllers;

use App\Events\CommentEvent;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index()
    {
        return view('comments');
    }

    public function fetchComments()
    {
        $commments = Comment::all();
        return response()->json($commments);
    }

    public function store(Request $request)
    {
        $comment = Comment::create($request->all());

        event(new CommentEvent($comment));
        return response()->json('ok');
    }
}
