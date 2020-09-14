<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('pages.home');
    }
    public function thongtin()
    {
        return view ('pages.about');
    }
    public function diendan()
    {
        return view('pages.news');
    }
    public function sukien()
    {
        return view('pages.event');
    }
}
