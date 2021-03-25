<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Dichvu;

use App\Models\Danhmuc;

class DichvuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $dichvus = Dichvu::paginate(5);
        return view('dichvu.listService')
        ->with('dichvus', $dichvus);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('dichvu.createService');
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
        $Dichvu = new Dichvu;
        $Dichvu->name_service = $request->nameService;
        $Dichvu->price = $request->price;
        $Dichvu->sale_price = ($request->salePrice)?$request->salePrice:'0';
        $Dichvu->description = $request->description;
        $Dichvu->image = $imageName;
        $Dichvu->id_cate = $request->idCate;
        $Dichvu->save();
        return back()
        ->with('success','Thêm dịch vụ thành công')
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
        $dichvu = Dichvu::findOrFail($id);
        return view('dichvu.showService')
        ->with('dichvu',$dichvu);
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
        $dichvu = Dichvu::findOrFail($id);
        return view('dichvu.editService')
        ->with('dichvu',$dichvu);
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
        $Dichvu = Dichvu::findOrFail($id);
        $Dichvu->name_service = $request->nameService;
        $Dichvu->price = $request->price;
        $Dichvu->sale_price = $request->salePrice;
        $Dichvu->description = $request->description;
        $Dichvu->image = $imageName;
        $Dichvu->id_cate = $request->idCate;
        $Dichvu->save();
        return back()
        ->with('success','Sửa dịch vụ thành công')
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
        $dichvu = Dichvu::findOrFail($id);

        $dichvu->delete();
        return view('dichvu.listService')
        ->with('success','Xóa dịch vụ thành công');
    }
}
