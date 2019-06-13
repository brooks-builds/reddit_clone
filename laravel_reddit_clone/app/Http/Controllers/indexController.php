<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class indexController extends Controller
{
    function index()
    {
        $links = [
            [
            'votes' => 55,
            'link' => 'https://www.nasa.gov',
            'text' => 'NASA',
            'id' => 1
            ],
            [
            'votes' => 34,
            'link' => 'https://www.google.com',
            'text' => 'Google',
            'id' => 2
            ]
        ];

        return view('index', ['links' => $links]);
    }
}
