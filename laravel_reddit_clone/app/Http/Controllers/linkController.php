<?php

namespace App\Http\Controllers;

use App\Link;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\URL;

class linkController extends Controller
{
    function upvote($id)
    {
        $previousUrl = URL::previous();

        if(Auth::check())
        {
            Link::increment('votes');
        }

        return redirect($previousUrl);
    }

    function downvote($id)
    {
        $previousUrl = URL::previous();

        if(Auth::check())
        {
            Link::decrement('votes');
        }

        return redirect($previousUrl);
    }
}
