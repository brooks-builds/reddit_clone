<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Comment;
use Illuminate\Support\Facades\Auth;

class commentsController extends Controller
{
    function store(Request $request)
    {
        if(Auth::check())
        {
            $linkId = $request->get('linkid');

            Comment::create([
                'link_id' => $linkId,
                'text' => $request->text,
                'user_id' => Auth::id()
            ]);
        }

        return redirect("/comments/$linkId");
    }
}
