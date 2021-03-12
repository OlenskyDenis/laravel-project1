<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('pages.index');
    }
    public function page1(){
        return view('pages.page1');
    }
    public function page2(){
        return view('pages.page2');
    }
    public function page3(){
        return view('pages.page3');
    }
    public function page4(){
        return view('pages.page4');
    }
    public function page5(){
        return view('pages.page5');
    }
}
