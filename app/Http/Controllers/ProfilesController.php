<?php

namespace App\Http\Controllers;

use App\User;
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
        dd(User::find($user));
        return view('home');
    }
}
