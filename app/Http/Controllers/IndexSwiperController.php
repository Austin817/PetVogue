<?php

namespace App\Http\Controllers;

use App\IndexSwiper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class IndexSwiperController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $indexswiperData = IndexSwiper::orderBy('sort','asc')->get();
        return view('admin.index_swiper.index',compact('indexswiperData'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.index_swiper.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $indexswiperData = $request->all();

        if($request->hasFile('img1')){
            $file=$request->file('img1');
            $path=Storage::disk('myfile')->putFile('indexswiper',$file);
            $indexswiperData['img1']= Storage::disk('myfile')->url($path);
        }
        if($request->hasFile('img2')){
            $file=$request->file('img2');
            $path=Storage::disk('myfile')->putFile('indexswiper',$file);
            $indexswiperData['img2']= Storage::disk('myfile')->url($path);
        }

        IndexSwiper::create($indexswiperData);
        return redirect('/admin/index_swiper');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $indexswiper = IndexSwiper::find($id);
        return view('admin.index_swiper.edit',compact('indexswiper'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $indexswiper = IndexSwiper::find($id);
        return view('admin.index_swiper.edit',compact('indexswiper'));
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
        $indexswiper= IndexSwiper::find($id);
        //取出表單所有內容
        $indexswiperData= $request->all();
        if ($request->hasFile('img1')) {
            //刪除舊圖片
            File::delete(public_path().$indexswiper->img1);
            //存儲新圖片
            $file=$request->file('img1');
            $path=Storage::disk('myfile')->putFile('indexswiper',$file);
            $indexswiperData['img1']= Storage::disk('myfile')->url($path);
        }
        if ($request->hasFile('img2')) {
            //刪除舊圖片
            File::delete(public_path().$indexswiper->img2);
            //存儲新圖片
            $file=$request->file('img2');
            $path=Storage::disk('myfile')->putFile('indexswiper',$file);
            $indexswiperData['img2']= Storage::disk('myfile')->url($path);
        }

        //更新資料庫
        $indexswiper->update($indexswiperData);
        return redirect('/admin/index_swiper');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $indexswiper = IndexSwiper::find($id);
        File::delete(public_path().$indexswiper->img1);
        File::delete(public_path().$indexswiper->img2);
        $indexswiper->delete();
        return redirect('/admin/index_swiper');
    }
}
