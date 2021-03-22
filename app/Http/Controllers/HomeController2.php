<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Danhmuc; 
use App\Models\Dichvu; 

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
        $dichvus = Dichvu::all();
        return view('home-2')->with('danhmucs',$danhmucs)
                             ->with('dichvus',$dichvus);
    }
}
