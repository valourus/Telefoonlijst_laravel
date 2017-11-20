<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller{
    
    public function index() {
        return view("pages.welcome");
    }

    public function teamIB() {
        return view("pages.ib");
    }

    public function teamAO() {
        return view("pages.ao");
    }
}
