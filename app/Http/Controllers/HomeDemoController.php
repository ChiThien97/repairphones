<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Danhmuc; 
use App\Models\Dichvu; 

class HomeDemoController extends Controller
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
        return view('home-demo')->with('danhmucs',$danhmucs)
                             ->with('dichvus',$dichvus);
    }
}
