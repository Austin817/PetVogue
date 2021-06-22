<?php

namespace App\Http\Controllers;

use App\Ad;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class AdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $adData = Ad::get();
        return view('admin.ad.index',compact('adData'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.ad.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $adData = $request->all();

        if($request->hasFile('img')){
            $file=$request->file('img');
            $path=Storage::disk('myfile')->putFile('ad',$file);
            $adData['img']= Storage::disk('myfile')->url($path);
        }

        Ad::create($adData);
        return redirect('/admin/ad');
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
        $ad = Ad::find($id);
        return view('admin.ad.edit',compact('ad'));
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
        $ad= Ad::find($id);
        //取出表單所有內容
        $adData= $request->all();
        if ($request->hasFile('img')) {
            //刪除舊圖片
            File::delete(public_path().$ad->img);
            //存儲新圖片
            $file=$request->file('img');
            $path=Storage::disk('myfile')->putFile('ad',$file);
            $adData['img']= Storage::disk('myfile')->url($path);
        }
        //更新資料庫
        $ad->update($adData);
        return redirect('/admin/ad');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ad = Ad::find($id);
        File::delete(public_path().$ad->img);
        $ad->delete();
        return redirect('/admin/ad');
    }
}
