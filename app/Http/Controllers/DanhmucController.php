<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
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
        $danhmucs = Danhmuc::paginate(5);
        return view('danhmuc.listCate')->with('danhmucs',$danhmucs);
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
        $danhmuc = Danhmuc::findOrFail($id);
        return view('danhmuc.showCate')
        ->with('danhmuc',$danhmuc);
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
        $danhmuc = Danhmuc::findOrFail($id);
        return view('danhmuc.editCate')
        ->with('danhmuc',$danhmuc);
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
        $imageName = ($request->image)?$request->image->getClientOriginalName():false;
        $danhmuc = Danhmuc::findOrFail($id);
        $danhmuc->name_cate = $request->nameCate;
        $danhmuc->description = $request->description;
        if($imageName){
            $danhmuc->image = $imageName;
            $request->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            $request->image->move(public_path('images'), $imageName);
            //
        }
        $danhmuc->save();
        return back()
        ->with('success','Sửa danh mục thành công')
        ->with('image',($imageName)?$imageName:'Không có thay đổi hình ảnh');
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
        $danhmuc = Danhmuc::findOrFail($id);
        $id_danhmuc = DB::table('dichvus')->where('id_cate', $id)->first();
        if($id_danhmuc){
            return back()->with('fail','Xóa danh mục thất bại');
        }
        else{
            $danhmuc->delete();
            return view('danhmuc.listCate')
            ->with('success','Xóa danh mục thành công');
        }
    }
}
