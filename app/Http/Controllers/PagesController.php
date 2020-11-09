<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        return view('home');
    }

    public function gallery() {
        return view('gallery');
    }

    public function videos() {
        return view('videos');
    }

    public function contact() {
        return view('contact');
    }
}
