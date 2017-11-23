<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::getUser();
        if($user->hasRole("secretary")) {
            //get the director
        }
        $colleagues = User::role("teacher")->get();
        return view('home', [
            "user" => $user,
            "colleagues" => $colleagues,
        ]);
    }
}
