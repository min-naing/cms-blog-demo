<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    function home() {
        return view('home');
    }

    function about() {
        return view('about');
    }

    function services() {
        return view('services');
    }

    function contact() {
        return view('contact');
    }
}
