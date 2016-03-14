<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class SiteController extends Controller
{
    public function index () {
        return view('pages.index');
    }

    public function register () {
        return view('pages.register');
    }

    public function about () {
        return view('pages.about');
    }

    public function history () {
        return view('pages.past_contests');
    }

    public function contact () {
        return view('pages.contact');
    }
}
