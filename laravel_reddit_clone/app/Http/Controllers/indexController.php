<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Link;
use \App\Comment;
use Illuminate\Support\Facades\Auth;

class indexController extends Controller
{
    function index()
    {
        $user = Auth::user();
        $username = Auth::check() ? $user->name : null;
        $links = Link::all();

        return view('index', ['links' => $links, 'username' => $username]);
    }

    function linkWithComments($id)
    {
        $user = Auth::user();
        $username = Auth::check() ? $user->name : null;
        $link = Link::where(['id' => $id])->first();
        $comments = Comment::where(['link_id' => $id])
            ->join('users', ['users.id' => 'comments.user_id'])
            ->select('comments.*', 'users.name')
            ->get();

        return view('one-link', ['link' => $link,
                                'comments' => $comments,
                                'username' => $username]);
    }
}
