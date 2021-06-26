<?php

namespace App\Http\Controllers;

use App\House;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class HouseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $houseData = House::orderBy('sort','asc')->get();
        return view('admin.house.index',compact('houseData'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.house.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $houseData = $request->all();

        if($request->hasFile('img')){
            $file=$request->file('img');
            $path=Storage::disk('myfile')->putFile('house',$file);
            $houseData['img']= Storage::disk('myfile')->url($path);
        }

        House::create($houseData);
        return redirect('/admin/house');
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
        $house = House::find($id);
        return view('admin.house.edit',compact('house'));
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
         //從資料庫找到資料
         $house= House::find($id);
         //取出表單所有內容
         $houseData= $request->all();
         if ($request->hasFile('img')) {
             //刪除舊圖片
             File::delete(public_path().$house->img);
             //存儲新圖片
             $file=$request->file('img');
             $path=Storage::disk('myfile')->putFile('house',$file);
             $houseData['img']= Storage::disk('myfile')->url($path);
         }
         //更新資料庫
         $house->update($houseData);
         return redirect('/admin/house');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $house = House::find($id);
        File::delete(public_path().$house->img);
        $house->delete();
        return redirect('/admin/house');
    }
}
