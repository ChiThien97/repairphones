<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Models\Dichvu;

class FullTextSearchController extends Controller
{
    // 
    public function index(Request $request) {
        if($request->term){
            //$data['dichvus']= DB::table('dichvus')->where('MATCH(name_service)AGAINST('.$request->term.')')->get();
            $data['dichvus'] = Dichvu::WhereRaw("MATCH(name_service) AGAINST('$request->term')")->get();
        }else{
            return view('full-text-search')->with('message','Không tìm thấy dịch vụ bạn muốn, vui lòng liên hệ +84 000 999');
        }
        return view('full-text-search', $data)->with('message','Không tìm thấy dịch vụ bạn muốn, vui lòng liên hệ +84 000 999');
    }
}