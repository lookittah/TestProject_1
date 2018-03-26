<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    function homepage() {
        return view('pages.index');
    }

    function contact() {
        return view('pages.contact');
    }

    function about() {
        return view('pages.about');
    }

}
