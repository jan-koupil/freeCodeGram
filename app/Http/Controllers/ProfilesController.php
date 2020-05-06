<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @param $user
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index($user)
    {
        dd($user);
        return view('home');
    }
}
