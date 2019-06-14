<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\User;
use Illuminate\Support\Facades\Auth;

class deleteAccountController extends Controller
{
    public function destroy()
    {
        User::where(['id' => Auth::id()])->delete();

        return redirect('/');
    }
}
