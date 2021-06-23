<?php

namespace App\Http\Controllers;

use App\Feed;
use App\FeedImg;
use App\FeedStatus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class FeedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $feedData = Feed::with('feedStatus')->get();
        return view('admin.feed.index',compact('feedData'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('front.feed.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'g-recaptcha-response' => 'recaptcha',
        ]);
        // check if validator fails
        if($validator->fails()) {
            $errors = $validator->errors();
            // dd($errors);
            return redirect('/feeds/create#feed-error')
            ->withErrors($validator)
            ->withInput();
        }

        $feedData = $request->all();
        if($request->hasFile('img')){
            $file=$request->file('img');
            $path=Storage::disk('myfile')->putFile('feed',$file);
            $feedData['img']= Storage::disk('myfile')->url($path);
        }

        $feed=Feed::create($feedData);
        $imgs=$request->file('imgs');
        foreach($imgs as $img){
            //存檔並取得檔案在myfile內的路徑
            $path=Storage::disk('myfile')->putFile('feed',$img);
            //取得檔案在public的完整路徑
            $publishPath = Storage::disk('myfile')->url($path);
            //存到資料庫
            FeedImg::create([
                'feed_id'=>$feed->id,
                'img'=>$publishPath
            ]);
        }
        return redirect('feeds');
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
        $feedstatuses = FeedStatus::get();
        $feed = Feed::with('feedStatus','feedImgs')->find($id);
        return view('admin.feed.edit',compact('feed','feedstatuses'));
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
         $feed= Feed::find($id);
         //取出表單所有內容
         $feedData= $request->all();
         if ($request->hasFile('img')) {
             //刪除舊圖片
             File::delete(public_path().$feed->img);
             //存儲新圖片
             $file=$request->file('img');
             $path=Storage::disk('myfile')->putFile('feed',$file);
             $feedData['img']= Storage::disk('myfile')->url($path);
         }
         //更新資料庫
         $feed->update($feedData);
         return redirect('/admin/feed');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $feed = Feed::with('feedImgs')->find($id);
        foreach ( $feed->feedImgs as $img){
            File::delete(public_path().$img->img);
            $img->delete();
        }
        File::delete(public_path().$feed->img);
        $feed->delete();
        return redirect('/admin/feed');
    }
}
