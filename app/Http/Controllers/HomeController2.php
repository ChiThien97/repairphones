<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Danhmuc; 

class HomeController2 extends Controller
{
    //
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $danhmucs = Danhmuc::all();
        return view('home-2')->with('danhmuc',$danhmucs);
    }
}
