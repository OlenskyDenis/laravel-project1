<?php

namespace App\Http\Controllers;

use App\Models\Tovar;
use Illuminate\Http\Request;

class TovarController extends Controller
{
    public function index(){
        $tovars = Tovar::all();
        return view('pages.tovars',[
            'tovars' => $tovars
        ]);
    }
}
