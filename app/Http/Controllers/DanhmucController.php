<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Danhmuc;
use App\Models\Dichvu; 

class DanhmucController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $danhmucs = Danhmuc::all();
        $dichvus = Dichvu::all();
        return view('danhmuc.listCate')->with('danhmucs', $danhmucs)
                                         ->with('dichvus',$dichvus);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('danhmuc.createCate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
  
        $imageName = $request->image->getClientOriginalName();
        $request->image->move(public_path('images'), $imageName);
        //
        $danhmuc = new Danhmuc;
        $danhmuc->name_cate = $request->nameCate;
        $danhmuc->description = $request->description;
        $danhmuc->image = $imageName;
        $danhmuc->save();
        return back()
        ->with('success','Thêm danh mục thành công')
        ->with('image',$imageName);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $danhmucs = Danhmuc::all();
        $dichvus = Dichvu::all();
        $danhmuc = Danhmuc::findOrFail($id);
        return view('danhmuc.showCate')->with('danhmuc',$danhmuc)
                                        ->with('danhmucs', $danhmucs)
                                        ->with('dichvus',$dichvus);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        return view('danhmuc.editCate');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
  
        $imageName = $request->image->getClientOriginalName();
        $request->image->move(public_path('images'), $imageName);
        //
        $danhmuc = new Danhmuc;
        $danhmuc->name_cate = $request->nameCate;
        $danhmuc->description = $request->description;
        $danhmuc->image = $imageName;
        $danhmuc->save();
        return back()
        ->with('success','Thêm danh mục thành công')
        ->with('image',$imageName);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
