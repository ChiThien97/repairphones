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
        $danhmucs = Danhmuc::all();
        return view('dichvu.listService')->with('dichvus', $dichvus)
                                        ->with('danhmucs', $danhmucs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $danhmucs = Danhmuc::all();
        return view('dichvu.createService')->with('danhmucs', $danhmucs);
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
        $Dichvu->sale_price = $request->salePrice;
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
